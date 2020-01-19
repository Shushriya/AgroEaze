<?php
    require_once("../controller/AccountController.php");
    class Registration{
        public $errors = array();
        public $name;
        public $password;
        public $email;
        public $account;
        public $phone;

        function __construct($name, $password1, $password2, $email, $account, $phone, $con){
            //validate password
            $this->validate_password($password1, $password2);
            //validate email
            $this->validate_email($email, $con);
            //validate others
            $this->name = $name;
            $this->account = $account;
            $this->phone = $phone;
        }

        public function validate_email($email, $con){
            $query1 = "SELECT * FROM customer WHERE email='$email'";
            $query2 = "SELECT * FROM warehouse WHERE email='$email'";
            $query3 = "SELECT * FROM farmer WHERE email='$email'";
            $query4 = "SELECT * FROM admin WHERE email='$email'";
            $res1 = mysqli_query($con, $query1);
            $result1 = mysqli_num_rows($res1);

            $res2 = mysqli_query($con, $query2);
            $result2 = mysqli_num_rows($res2);

            $res3 = mysqli_query($con, $query3);
            $result3 = mysqli_num_rows($res3);

            $res4 = mysqli_query($con, $query4);
            $result4 = mysqli_num_rows($res4);

            if($result1 == 0 && $result2 == 0 && $result3 == 0 && $result4 == 0){
                $this->email = $email;
            }else{
                array_push($this->errors, "email already exists");
            }

        }
        public function validate_password($pass1, $pass2){
            if($pass1 !== $pass2){
                array_push($this->errors, "password doesn't match!");
            }else{
                $this->password = $pass1;
            }
        }
        public function create_registration($con){
            if(empty($this->errors)){
                switch($this->account){
                    case "customer":
                        $table = "customer";
                        break;
                    case "farmer":
                        $table = "farmer";
                        break;
                    case "warehouse":
                        $table = "warehouse";
                        break;
                    default:
                        $table = "";
                }
                $que = "INSERT INTO $table (email, password, name, phone, created_at) VALUES 
                (
                    '$this->email',
                    MD5('$this->password'),
                    '$this->name',
                    '$this->phone',
                    now()
                )";
                $res = mysqli_query($con, $que);
            }
        }
        public function login_user($con){
            if(empty($this->errors)){
                AccountController::login($this->email, $this->password, $this->account, $con);
            }
        }
        public function check_errors(){
            if(!empty($this->errors)){
                foreach($this->errors as $error){
                    echo $error."<br>";
                }
            }
        }
    }