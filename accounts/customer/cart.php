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
        
            <div class="breadcrumb-area pt-125 pb-10">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>Cart page</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>Cart page</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-cart-area pt-60 pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">products</th>
                                            <th class="product-price">products name</th>
                                            <th class="product-name">price/kg</th>
                                            <th class="product-price">quantity</th>
                                            <th class="product-quantity">total</th>
                                            <th class="product-subtotal">delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/img/cart/4.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Basmati rice</a>
                                            </td>
                                            <td class="product-price"><span class="amount">Rs. 60</span></td>
                                            <td class="product-quantity">
                                                <div class="quantity-range">
                                                    <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">Rs. 60</td>
                                            <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/img/cart/5.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Apple</a>
                                            </td>
                                            <td class="product-price"><span class="amount">Rs. 120</span></td>
                                            <td class="product-quantity">
                                                <div class="quantity-range">
                                                    <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">Rs 120</td>
                                            <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/img/cart/6.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Wheat</a>
                                            </td>
                                            <td class="product-price"><span class="amount">Rs. 50</span></td>
                                            <td class="product-quantity">
                                                <div class="quantity-range">
                                                    <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">Rs.50</td>
                                            <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-shiping-update">
                                <div class="cart-shipping">
                                    <a class="btn-style cr-btn" href="#">
                                        <span>continue shopping</span>
                                    </a>
                                </div>
                                <div class="update-checkout-cart">
                                    <div class="update-cart">
                                        <button class="btn-style cr-btn"><span>update</span></button>
                                    </div>
                                    <div class="update-cart">
                                        <a class="btn-style cr-btn" href="http://localhost/ht_manual/accounts/customer/checkout.php">
                                            <span>checkout</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-sm-6">
                            <div class="shop-total">
                                <h3>cart total</h3>
                                <ul>
                                    <li>
                                        sub total
                                        <span>Rs. 230.00</span>
                                    </li>
                                    <li>
                                        tax
                                        <span>Rs. 11.50</span>
                                    </li>
                                    <li class="order-total">
                                        shipping
                                        <span>Rs. 50</span>
                                    </li>
                                    <li>
                                        order total
                                        <span>Rs. 291.50</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart-btn text-center mb-15">
                                <a href="http://localhost/ht_manual/accounts/customer/checkout.php">payment</a>
                            </div>
                            <div class="continue-shopping-btn text-center">
                                <a href="#">continue shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="footer-top pt-210 pb-98 theme-bg">
                    <div class="container">
                       <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-logo">
                                        <a href="index.html">
                                            <img src="assets/img/logo/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="footer-about">
                                        <p><span>AgroEaze</span> most trusted farmer brand of india</p>
                                        <div class="footer-support">
                                            <h5>FOR SUPPORT</h5>
                                            <span> +91-XXXXXXXXX (Toll Free)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-widget-title">
                                        <h3>LATEST TWEET</h3>
                                    </div>
                                    <div class="food-widget-content pr-30">
                                        <div class="single-tweet">
                                            <p><a href="#">@Grigesh,</a> the most latgest agro store in the wold can serve you 
10 min ago</p>
                                        </div>
                                        <div class="single-tweet">
                                            <p><a href="#">@Nishant321,</a> the most latgest agro store in the wold can serve you 
10 min ago</p>
                                        </div>
                                        <div class="single-tweet">
                                            <p><a href="#">@Balaji,</a> the most latgest agro store in the wold can serve you 
10 min ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-widget-title">
                                        <h3>CONTACT INFO</h3>
                                    </div>
                                    <div class="food-info-wrapper">
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Address</span>
                                            </div>
                                            <div class="food-info-content">
                                                <p>National Institute of Technology,Raipur,G.E. Road</p>
                                            </div>
                                        </div>
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Phone</span>
                                            </div>
                                            <div class="food-info-content">
                                                <p>+91-XXXXXXXXXX</p>
                                                <p>+91-XXXXXXXXXX</p>
                                            </div>
                                        </div>
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Web</span>
                                            </div>
                                            <div class="food-info-content">
                                                <a href="#">info@agroeaze.com</a>
                                                <a href="#">www.agroeaze.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
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
