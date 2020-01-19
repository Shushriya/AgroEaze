<?php
    session_start();
    require_once("../controller/AccountController.php");
    require_once("../db/base.php");

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $account = $_POST['account'];

        $conn = Dbhelper::create_db_connection();
        AccountController::login($email, $password, $account, $conn);
        
    }
    
?>
<!-- <form action="" method="post">
    <input type="email" name="email">
    <input type="password" name="password">
    <select name="account">
        <option value="customer">Customer</option>
        <option value="farmer">Farmer</option>
        <option value="warehouse">Warehouse</option>
        <option value="admin">Admin</option>
    </select>
    <input type="submit" value="login" name="submit">
</form> -->


<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>AgroEaze</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="">
		
		<!-- all css here -->
        <link rel="stylesheet" href="http://localhost/ht_manual/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/ht_manual/assets/css/animate.css">
        <link rel="stylesheet" href="http://localhost/ht_manual/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="http://localhost/ht_manual/assets/css/chosen.min.css">
        <link rel="stylesheet" href="http://localhost/ht_manual/assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="http://localhost/ht_manual/assets/css/themify-icons.css">
        <link rel="stylesheet" href="http://localhost/ht_manual/assets/css/icofont.css">
        <link rel="stylesheet" href="http://localhost/ht_manual/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://localhost/ht_manual/assets/css/bundle.css">
        <link rel="stylesheet" href="http://localhost/ht_manual/assets/css/style.css">
        <link rel="stylesheet" href="http://localhost/ht_manual/assets/css/responsive.css">
        <script src="http://localhost/ht_manual/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
            <!-- include header here -->
            <?php include("../includes/header.php") ?>
        <div class="wrapper" >
            <div class="breadcrumb-area pt-80 pb-0" >
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>login </h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>login </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="login-register-area ptb-50" style="background-image:url(../assets/img/register.jpg) ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 ml-auto mr-auto">
                            <div class="login-register-wrapper">
                                <div class="login-register-tab-list nav">
                                    <a class="active"  href="#lg1">
                                        <h4> login </h4>
                                    </a>
                                </div>
                                <div class="tab-content">
                                    <div id="lg1" class="tab-pane active">
                                        <div class="login-form-container">
                                            <div class="login-form">
                                                <form action="" method="post">
                                                    <input type="email" name="email" placeholder="Email">
                                                    <input type="password" name="password" placeholder="Password">
                                                    <select name="account" id="">
                                                        <option value="customer">Customer</option>
                                                        <option value="farmer">Farmer</option>
                                                        <option value="warehouse">Warehouse</option>
                                                        <option value="admin">Admin</option>
                                                    </select>
                                                    <br><br><br>
                                                    <input style="background-color:#ffb52f;" type="submit" name="submit" value="Login">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="lg2" class="tab-pane">
                                        <div class="login-form-container">
                                            <div class="login-form">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- include footer here -->
            <?php include("../includes/footer.php") ?>
        </div>
        
        
        
		
		
		
		
		
		
		
		
		<!-- all js here -->
        <script src="http://localhost/ht_manual/assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="http://localhost/ht_manual/assets/js/popper.js"></script>
        <script src="http://localhost/ht_manual/assets/js/bootstrap.min.js"></script>
        <script src="http://localhost/ht_manual/assets/js/isotope.pkgd.min.js"></script>
        <script src="http://localhost/ht_manual/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="http://localhost/ht_manual/assets/js/jquery.counterup.min.js"></script>
        <script src="http://localhost/ht_manual/assets/js/waypoints.min.js"></script>
        
        <script src="http://localhost/ht_manual/assets/js/owl.carousel.min.js"></script>
        <script src="http://localhost/ht_manual/assets/js/plugins.js"></script>
        <script src="http://localhost/ht_manual/assets/js/main.js"></script>
    </body>
</html>



    