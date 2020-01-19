<?php
    require_once("Setup.php");
    class AccountController{
        public static function generate_unique_token(){
            $token = md5(uniqid(rand(), true));
            return $token;
        }

        public static function register_token_session($key){
            $_SESSION['site_token'] = $key;
        }

        public static function login($email, $password, $account, $connection){
            switch($account){
                case "customer":
                    $table = "customer";
                    break;
                case "farmer":
                    $table = "farmer";
                    break;
                case "warehouse":
                    $table = "warehouse";
                    break;
                case "admin":
                    $table = "admin";
                    break;
                default:
                    $table = "";
            }

            $sql = "SELECT * FROM $table WHERE email='$email' AND password=MD5($password)";
            $res = mysqli_query($connection, $sql);
            if(mysqli_num_rows($res) == 1){
                //in case of correct login details
                $result = mysqli_fetch_assoc($res);
                $user_id = $result['id'];
                $unique_token = self::generate_unique_token();
                
                $query1 = "DELETE FROM token WHERE user_id='$user_id' AND account='$account' ";
                $query2 = "INSERT INTO token (token, account, user_id) VALUES ('$unique_token', '$account', '$user_id')";
                
                mysqli_query($connection, $query1);
                mysqli_query($connection, $query2);

                self::register_token_session($unique_token);

                //$redirect_url = Setup::$site_root.Setup::$customer_dashboard;
                $redirect_url = Setup::$site_root."/accounts/".$table."/catalog.php";
                header("Location: $redirect_url");
                
                
            }else{
                //in case of wrong credentials
                echo "wrong credentials";
            }
        }

        public static function get_user($con){
            $token_key = $_SESSION['site_token'];
            $query1 = "SELECT * FROM token WHERE token = '$token_key'";
            $res =  mysqli_query($con, $query1);
            $result =  mysqli_fetch_assoc($res);
            return $result;
        }

        public static function logout($token, $con){
            $query = "DELETE FROM token WHERE token = '$token'";
            mysqli_query($con, $query);

            session_unset();
            session_destroy();

            $root = Setup::$site_root;
            header("Location: $root");
           

        }

        public static function verify_user($con, $account){
            if(!empty($_SESSION['site_token'])){
                $user = self::get_user($con);
                if($user){
                    if($user['account'] != $account){
                        require_once("../../includes/login_required.php");
                        exit();
                    }
                }else{
                    require_once("../../includes/login_required.php");
                    exit();
                }
            }else{
                require_once("../../includes/login_required.php");
                exit();
            }
        }

    }