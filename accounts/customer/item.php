<?php
    session_start();
    require_once("../../db/base.php");

    $connection = Dbhelper::create_db_connection();
    $item_id = $_GET['item_id'];

    $query1 = "SELECT product.id, product.description, product.quantity, product.price, product.image, food_category.category AS type3, food_type.name AS type1, product_type.name AS type2
    FROM product
    INNER JOIN food_category
    ON product.category = food_category.id
    INNER JOIN food_type
    ON food_category.food_type_id = food_type.id
    INNER JOIN product_type
    ON food_category.product_type_id = product_type.id WHERE product.id='$item_id'";
    $res = mysqli_query($connection, $query1);
    $product = mysqli_fetch_assoc($res);
    
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
        <link rel="stylesheet" href="http://localhost/ht_manual/assets/css/easyzoom.css">
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
    <!--           
        
        -->
            <div class="breadcrumb-area pt-100 pb-10" >
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>product details </h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>product details </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-details-area fluid-padding-3 ptb-80">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-details-img-content">
                                <div class="product-details-tab mr-40">
                                    <div class="product-details-large tab-content">
                                        <div class="tab-pane active" id="pro-details1">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="http://localhost/ht_manual<?php echo $product['image'] ?>">
                                                    <img src="http://localhost/ht_manual<?php echo $product['image'] ?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="pro-details2">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="http://localhost/ht_manual<?php echo $product['image'] ?>">
                                                    <img src="http://localhost/ht_manual<?php echo $product['image'] ?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="pro-details3">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="http://localhost/ht_manual<?php echo $product['image'] ?>">
                                                    <img src="http://localhost/ht_manual<?php echo $product['image'] ?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="pro-details4">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="http://localhost/ht_manual<?php echo $product['image'] ?>">
                                                    <img src="http://localhost/ht_manual<?php echo $product['image'] ?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="pro-details5">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="http://localhost/ht_manual<?php echo $product['image'] ?>">
                                                    <img src="http://localhost/ht_manual<?php echo $product['image'] ?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details-content">
                                <h2><?php echo $product['type3']." (".$product['type2'].")" ?></h2>
                                <div class="quick-view-rating">
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    
                                </div>
                                <div class="product-price">
                                    <span>&#8377<?php echo " ".$product['price']."/kg" ?></span>
                                </div>
                                <div class="product-overview">
                                    <h5 class="pd-sub-title"><?php echo $product['type1'] ?> Overview</h5>
                                    <p><?php echo $product['description'] ?></p>
                                </div>
                                
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-style cr-btn" href="http://localhost/ht_manual/accounts/customer/cart.php"><span>add to cart</span></a>
                                    </div>
                                    
                                </div>
                                <div class="product-categories">
                                    <h5 class="pd-sub-title">Categories</h5>
                                    <ul>
                                        <li>
                                            <a href="#"><?php echo $product['type1'] ?> ,</a>
                                        </li>
                                        <li>
                                            <a href="#"><?php echo $product['type2'] ?> ,</a>
                                        </li>
                                        <li>
                                            <a href="#"><?php echo $product['type3'] ?> </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
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

