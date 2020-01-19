<?php
    session_start();
    require_once("../../db/base.php");
    require_once("../../controller/AccountController.php");
    require_once("../../controller/Setup.php");

    $con = Dbhelper::create_db_connection();
    $logout_url = Setup::$site_root.Setup::$logout_url;
    AccountController::verify_user($con, "farmer");
    //$user =  AccountController::get_user($con);
    //print_r($user);
    
?>

 







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
            <?php include("../../includes/header.php") ?>
        <div class="wrapper">
            <div class="breadcrumb-area pt-100 pb-0"  >
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>add product</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid" id=addproduct>
                <form class="text-center border border-light p-5" action="#!">
          <!-- Default form subscription -->

                    <p class="h4 mb-4">Product details</p>
                
                    <p>Please fill all the information correctly</p>
                    <!-- Name -->
                    <input type="text" id="productname" class="form-control mb-4" placeholder="Product Name">
                    <input type="text" id="productname" class="form-control mb-4" placeholder="Product Type">
                    <input type="text" id="productname" class="form-control mb-4" placeholder="quantity">
                    <input type="text" id="productname" class="form-control mb-4" placeholder="Product image">
                    <input type="text" id="productname" class="form-control mb-4" placeholder="Price">
                    
                    

                    <!-- Email -->
                
                    <button class="btn btn-info btn-block" type="submit">Submit</button>
                    <!-- Sign in button -->
                
                
                </form>
                <!-- Default form subscription -->
        </div>
        <?php include("../../includes/footer.php") ?>
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
