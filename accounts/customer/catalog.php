<?php
    session_start();
    require_once("../../db/base.php");

    $connection = Dbhelper::create_db_connection();
    $que = "SELECT product.id, product.description, product.quantity, product.price, product.image, food_category.category AS type3, food_type.name AS type1, product_type.name AS type2
    FROM product
    INNER JOIN food_category
    ON product.category = food_category.id
    INNER JOIN food_type
    ON food_category.food_type_id = food_type.id
    INNER JOIN product_type
    ON food_category.product_type_id = product_type.id";
    $res = mysqli_query($connection, $que);
    $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
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
        <link rel="stylesheet" href="http://localhost/ht_manual/assets/css/jquery-ui.css">
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
            <!-- header start -->
            
   

           <!--
        -->
            <div class="breadcrumb-area pt-125 pb-10" >
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>Shop Page</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>Shop page</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="shop-wrapper fluid-padding-2 pt-60 pb-150">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="product-sidebar-area pr-60">
                                <div class="sidebar-widget pb-55">
                                    <h3 class="sidebar-widget">Search Products</h3>
                                    <div class="sidebar-search">
                                        <form action="#">
                                            <input type="text" placeholder="Search Products...">
                                            <button><i class="ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="sidebar-widget pb-50">
                                    <h3 class="sidebar-widget">by categories</h3>
                                    <div class="widget-categories">
                                        <ul>
                                            <li><a href="#">Rice</a></li>
                                            <li><a href="#">Wheat</a></li>
                                            <li><a href="#">Apple</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-55">
                                    <h3 class="sidebar-widget">by price</h3>
                                    <div class="price_filter mr-60">
                                        <div id="slider-range"></div>
                                        <div class="price_slider_amount">
                                            <div class="label-input">
                                                <label>price : </label>
                                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                            </div>
                                            <button type="button">Filter</button> 
                                        </div>
                                    </div>
                                </div>
                                <!--

                            -->
                                <div class="sidebar-widget">
                                    <h3 class="sidebar-widget">best seller</h3>
                                    <div class="best-seller">
                                        <div class="single-best-seller">
                                            <div class="best-seller-img">
                                                <a href="http://localhost/ht_manual/accounts/customer/item.php?item_id=1"><img width="100" height="100" src="http://localhost/ht_manual/gallery/basmati_rice.jpg" alt=""></a>
                                            </div>
                                            <div class="best-seller-text">
                                                <h3><a href="http://localhost/ht_manual/accounts/customer/item.php?item_id=1">Basmati (rice)</a></h3>
                                                <span>&#8377 100/kg</span>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-lg-9">
                            <div class="grid-list-product-wrapper tab-content">
                                <div id="new-product" class="product-list product-view tab-pane active">
                                    <div class="row">
                                        <!-- single product starts here -->
                                        <?php
                                            foreach($data as $product){
                                        ?>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="http://localhost/ht_manual/accounts/customer/item.php?item_id=<?php echo $product['id'] ?>">
                                                        <img src="http://localhost/ht_manual<?php echo $product['image'] ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="http://localhost/ht_manual/accounts/customer/item.php?item_id=<?php echo $product['id'] ?>"><?php echo $product['type3']." (".$product['type2'].")" ?></a></h2>
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
                                                    <p><?php echo $product['description']?></p>
                                                    <div class="shop-list-cart">
                                                    <a href="http://localhost/ht_manual/accounts/customer/item.php?item_id=<?php echo $product['id'] ?>"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        ?> 
                                    </div>
                                </div>
                                <div id="use-product" class="product-grid product-view tab-pane">
                                    <div class="row">
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="http://localhost/ht_manual/assets/img/product/product-6.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>270 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Gloriori GSX 250 R</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Gloriori GSX 250 R</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="http://localhost/ht_manual/assets/img/product/product-5.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>300 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Klager GSX 250 R</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="http://localhost/ht_manual/assets/img/product/product-4.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>250 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Matrio Max</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Matrio Max</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-3.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>150 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Demonissi Gori</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Demonissi Gori</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-2.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>280 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Maxclon ZPE 54</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Maxclon ZPE 54</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-1.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>290 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Rigoniss Z 1000</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Rigoniss Z 1000</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-6.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>220 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Klager GSX 250 R</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-5.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>210 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Gloriori GSX 250 R</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Gloriori GSX 250 R</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-4.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>250 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Demonissi Gori</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Demonissi Gori</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="accessory-product" class="product-grid product-view tab-pane">
                                    <div class="row">
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-7.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>270 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Aeri Carbon Helmet</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Aeri Carbon Helmet</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-8.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>300 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Reckles Jacket</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Reckles Jacket</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-9.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>250 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Softy Original Glove</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Softy Original Glove</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-10.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>150 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Flicky Traco Boot</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Flicky Traco Boot</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-11.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>280 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Flicky Traco Boot</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Flicky Traco Boot</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-7.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>290 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Aeri Carbon Helmet</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Aeri Carbon Helmet</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-8.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>220 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Reckles Jacket</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Reckles Jacket</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-9.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>210 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Softy Original Glove</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Softy Original Glove</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/product-10.jpg" alt="">
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
                                                            <li>2018</li>
                                                            <li>MANUAL</li>
                                                            <li>PETROL</li>
                                                            <li>250 CC</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product-details.html">Flicky Traco Boot</a></h4>
                                                            <span>6600 RPM</span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>$2549</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product-details.html">Flicky Traco Boot</a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$2549</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore mag aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo it. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.html"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <div class="newsletter-area">
                <div class="container">
                    <div class="newsletter-wrapper-all theme-bg-2">
                        <div class="row">
                            <div class="col-lg-5 col-12 col-md-12">
                               <div class="newsletter-img bg-img" style="background-image: url(assets/img/banner/newsletter-bg.png)">
                                    <img alt="image" src="assets/img/team/newsletter-img.png">
                             
                                </div>
                            </div>
                            <div class="col-lg-7 col-12 col-md-12">
                                <div class="newsletter-wrapper text-center">
                                    <div class="newsletter-title">
                                        <h3>Subscribe our newsletter</h3>
                                    </div>
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form action="#" method="post" id="#" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input type="email" value="" name="EMAIL" class="email" placeholder="Enter your email here..." required>
                                             real people should not fill this in and expect good things - do not remove this or risk form bot signups
                                                <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        -->
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



    