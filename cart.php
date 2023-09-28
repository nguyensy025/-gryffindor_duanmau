<?php
session_start();
ob_start();
include('./layout/header.php');
if (isset($_SESSION['countPro'])) {
    $countCartPro = $_SESSION['countPro'];
} else {
    $countCartPro = 0;
}
?>

<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from template.hasthemes.com/obrien/obrien/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 02:18:09 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Trending Sneaker - Shoes Shop</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon1.png">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->

    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>

    <div class="contact-wrapper">
        <header class="main-header-area">
            <!-- Main Header Area Start -->
            <header class="main-header-area">
                <!-- Main Header Area Start -->
                <div class="main-header">
                    <div class="container container-default custom-area">
                        <div class="row">
                            <div class="col-lg-12 col-custom">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                                        <div class="header-logo d-flex align-items-center">
                                            <a href="index2.php">
                                                <img class="img-full" src="./assets/images/logo/logo2.png" alt="Header Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-7 position-static d-none d-lg-block col-custom">
                                        <nav class="main-nav d-flex justify-content-center">
                                            <ul class="nav">
                                                <li>
                                                    <a class="active" href="index2.php">
                                                        <span class="menu-text"> Home</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop.php">
                                                        <span class="menu-text">Shop</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="mega-menu dropdown-hover">
                                                        <div class="menu-colum">
                                                            <ul>
                                                                <li><span class="mega-menu-text">Shop</span></li>
                                                                <li><a href="shop.html">Shop Left Sidebar</a></li>
                                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                                <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                                                <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                                                <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="menu-colum">
                                                            <ul>
                                                                <li><span class="mega-menu-text">Product</span></li>
                                                                <li><a href="product-details.html">Single Product</a></li>
                                                                <li><a href="variable-product-details.html">Variable Product</a></li>
                                                                <li><a href="external-product-details.html">External Product</a></li>
                                                                <li><a href="gallery-product-details.html">Gallery Product</a></li>
                                                                <li><a href="countdown-product-details.html">Countdown Product</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="menu-colum">
                                                            <ul>
                                                                <li><span class="mega-menu-text">Others</span></li>
                                                                <li><a href="error-404.html">Error 404</a></li>
                                                                <li><a href="compare.html">Compare Page</a></li>
                                                                <li><a href="cart.html">Cart Page</a></li>
                                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="blog-details-fullwidth.html">
                                                        <span class="menu-text"> Blog</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu dropdown-hover">
                                                        <li><a href="blog.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                                        <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                                                        <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                                        <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                                        <li><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>
                                                        <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                                                        <li><a href="blog-details-fullwidth.html">Blog Details Fullwidth</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-text"> Pages</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu dropdown-hover">
                                                        <li><a href="frequently-questions.html">FAQ</a></li>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                        <li><a href="./login.php">Login</a></li>
                                                        <li><a href="./register.php">Register</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="about-us.html">
                                                        <span class="menu-text"> About</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="contact-us.html">
                                                        <span class="menu-text">Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                                        <div class="header-right-area main-nav">
                                            <ul class="nav">
                                                <li class="login-register-wrap d-none d-xl-flex">
                                                    <span><a href="login.php">Login</a></span>
                                                    <span><a href="register.php">Register</a></span>
                                                </li>

                                                <li class="minicart-wrap">
                                                    <a href="#" class="minicart-btn toolbar-btn">
                                                        <i class="ion-bag"></i>
                                                        <span class="cart-item_count">
                                                            <?php
                                                            echo $countCartPro;
                                                            ?></span>
                                                    </a>
                                                    <?php
                                                    $userName = $_SESSION['userName'];
                                                    $sql = "SELECT * FROM users Where username = '$userName'";
                                                    $stm = $connection->prepare($sql);
                                                    $stm->execute();
                                                    $user = $stm->fetch();
                                                    $userID = $user['id'];
                                                    $queryUser_cart = "
                                                            SELECT uc.*, p.name, p.image, p.price
                                                            FROM user_cart uc
                                                            INNER JOIN products p ON uc.product_id = p.id
                                                            WHERE uc.user_id = '$userID'";
                                                    $stm = $connection->prepare($queryUser_cart);
                                                    $stm->execute();
                                                    $user_cart = $stm->fetchAll();
                                                    ?>
                                                    <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                                        <?php foreach ($user_cart as $product) { ?>
                                                            <div class="single-cart-item">
                                                                <div class="cart-img">
                                                                    <a href="cart.html"><img src="uploads/<?= $product['image'] ?>" alt=""></a>
                                                                </div>
                                                                <div class="cart-text">
                                                                    <h5 class="title"><a href="cart.php"><?= $product['name'] ?></a></h5>
                                                                    <div class="cart-text-btn">
                                                                        <div class="cart-qty">
                                                                            <span><?= $product['quantity'] ?>×</span>
                                                                            <span class="cart-price"><?= $product['price'] ?></span>
                                                                        </div>
                                                                        <a href="./delcart.php?id=<?= $product['id']; ?>"><i class="ion-trash-b"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                        <div class="cart-price-total d-flex justify-content-between">
                                                            <h5>Total :<?php echo number_format($_SESSION['total']); ?></h5>
                                                        </div>
                                                        <div class="cart-links d-flex justify-content-center">
                                                            <a class="obrien-button white-btn" href="cart.php">View cart</a>
                                                            <a class="obrien-button white-btn" href="checkout.php">Checkout</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mobile-menu-btn d-lg-none">
                                                    <a class="off-canvas-btn" href="#">
                                                        <i class="fa fa-bars"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main Header Area End -->
                <!-- Sticky Header Start Here-->
                <div class="main-header header-sticky">
                    <div class="container container-default custom-area">
                        <div class="row">
                            <div class="col-lg-12 col-custom">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                                        <div class="header-logo">
                                            <a href="index2.php">
                                                <img class="img-full" src="assets/images/logo/logo2.png" alt="Header Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-7 position-static d-none d-lg-block col-custom">
                                        <nav class="main-nav d-flex justify-content-center">
                                            <ul class="nav">
                                                <li>
                                                    <a href="index.php">
                                                        <span class="menu-text"> Home</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu dropdown-hover">
                                                        <li><a href="index.html">Home Page - 1</a></li>
                                                        <li><a href="index-2.html">Home Page - 2</a></li>
                                                        <li><a href="index-3.html">Home Page - 3</a></li>
                                                        <li><a href="index-4.html">Home Page - 4</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="active" href="shop.html">
                                                        <span class="menu-text">Shop</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="mega-menu dropdown-hover">
                                                        <div class="menu-colum">
                                                            <ul>
                                                                <li><span class="mega-menu-text">Shop</span></li>
                                                                <li><a class="active" href="shop.html">Shop Left Sidebar</a></li>
                                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                                <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                                                <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                                                <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="menu-colum">
                                                            <ul>
                                                                <li><span class="mega-menu-text">Product</span></li>
                                                                <li><a href="product-details.html">Single Product</a></li>
                                                                <li><a href="variable-product-details.html">Variable Product</a></li>
                                                                <li><a href="external-product-details.html">External Product</a></li>
                                                                <li><a href="gallery-product-details.html">Gallery Product</a></li>
                                                                <li><a href="countdown-product-details.html">Countdown Product</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="menu-colum">
                                                            <ul>
                                                                <li><span class="mega-menu-text">Others</span></li>
                                                                <li><a href="error-404.html">Error 404</a></li>
                                                                <li><a href="compare.html">Compare Page</a></li>
                                                                <li><a href="cart.html">Cart Page</a></li>
                                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="blog-details-fullwidth.html">
                                                        <span class="menu-text"> Blog</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu dropdown-hover">
                                                        <li><a href="blog.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                                        <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                                                        <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                                        <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                                        <li><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>
                                                        <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                                                        <li><a href="blog-details-fullwidth.html">Blog Details Fullwidth</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-text"> Pages</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu dropdown-hover">
                                                        <li><a href="frequently-questions.html">FAQ</a></li>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="about-us.html">
                                                        <span class="menu-text"> About</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="contact-us.html">
                                                        <span class="menu-text">Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                                        <div class="header-right-area main-nav">
                                            <ul class="nav">
                                                <li class="login-register-wrap d-none d-xl-flex">
                                                    <span><a href="login.php">Login</a></span>
                                                    <span><a href="register.php">Register</a></span>
                                                </li>
                                                <li class="sidemenu-wrap d-none d-lg-flex">
                                                    <a href="#">USD <i class="fa fa-caret-down"></i> </a>
                                                    <ul class="dropdown-sidemenu dropdown-hover-2 dropdown-language">
                                                        <li><a href="#">USD - US Dollar</a></li>
                                                        <li><a href="#">EUR - Euro</a></li>
                                                        <li><a href="#">GBP - British Pound</a></li>
                                                        <li><a href="#">INR - Indian Rupee</a></li>
                                                        <li><a href="#">BDT - Bangladesh Taka</a></li>
                                                        <li><a href="#">JPY - Japan Yen</a></li>
                                                        <li><a href="#">CAD - Canada Dollar</a></li>
                                                        <li><a href="#">AUD - Australian Dollar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="minicart-wrap">
                                                    <a href="#" class="minicart-btn toolbar-btn">
                                                        <i class="ion-bag"></i>
                                                        <span class="cart-item_count"><?
                                                                                        echo $countCartPro;
                                                                                        ?></span>
                                                    </a>
                                                    <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                                        <?php foreach ($user_cart as $product) { ?>
                                                            <div class="single-cart-item">
                                                                <div class="cart-img">
                                                                    <a href="cart.html"><img src="./uploads/<?= $product['image'] ?>" alt=""></a>
                                                                </div>
                                                                <div class="cart-text">
                                                                    <h5 class="title"><a href="cart.php"><?= $product['name'] ?></a></h5>
                                                                    <div class="cart-text-btn">
                                                                        <div class="cart-qty">
                                                                            <span><?= $product['quantity'] ?>×</span>
                                                                            <span class="cart-price"><?= $product['price'] ?></span>
                                                                        </div>
                                                                        <button type="button"><i class="ion-trash-b"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                        <div class="cart-price-total d-flex justify-content-between">
                                                            <h5>Total :</h5>
                                                            <h5><?php echo number_format($_SESSION['total']); ?></h5>
                                                        </div>
                                                        <div class="cart-links d-flex justify-content-center">
                                                            <a class="obrien-button white-btn" href="cart.php">View cart</a>
                                                            <a class="obrien-button white-btn" href="checkout.php">Checkout</a>
                                                        </div>
                                                </li>
                                                <li class="mobile-menu-btn d-lg-none">
                                                    <a class="off-canvas-btn" href="#mobileMenu">
                                                        <i class="fa fa-bars"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sticky Header End Here -->
                <!-- off-canvas menu start -->
                <aside class="off-canvas-wrapper" id="mobileMenu">
                    <div class="off-canvas-overlay"></div>
                    <div class="off-canvas-inner-content">
                        <div class="btn-close-off-canvas">
                            <i class="fa fa-times"></i>
                        </div>

                        <div class="off-canvas-inner">

                            <div class="search-box-offcanvas">
                                <form>
                                    <input type="text" placeholder="Search product...">
                                    <button class="search-btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>

                            <!-- mobile menu start -->
                            <div class="mobile-navigation">

                                <!-- mobile menu navigation start -->
                                <nav>
                                    <ul class="mobile-menu">
                                        <li class="menu-item-has-children"><a href="#">Home</a>
                                            <ul class="dropdown">
                                                <li><a href="index.html">Home Page 1</a></li>
                                                <li><a href="index-2.html">Home Page 2</a></li>
                                                <li><a href="index-3.html">Home Page 3</a></li>
                                                <li><a href="index-4.html">Home Page 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Shop</a>
                                            <ul class="megamenu dropdown">
                                                <li class="mega-title has-children"><a href="#">Shop Layouts</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Shop Left Sidebar</a></li>
                                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                        <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                                        <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                                        <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-title has-children"><a href="#">Product Details</a>
                                                    <ul class="dropdown">
                                                        <li><a href="product-details.html">Single Product Details</a></li>
                                                        <li><a href="variable-product-details.html">Variable Product Details</a></li>
                                                        <li><a href="external-product-details.html">External Product Details</a></li>
                                                        <li><a href="gallery-product-details.html">Gallery Product Details</a></li>
                                                        <li><a href="countdown-product-details.html">Countdown Product Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-title has-children"><a href="#">Others</a>
                                                    <ul class="dropdown">
                                                        <li><a href="error404.html">Error 404</a></li>
                                                        <li><a href="compare.html">Compare Page</a></li>
                                                        <li><a href="cart.html">Cart Page</a></li>
                                                        <li><a href="checkout.html">Checkout Page</a></li>
                                                        <li><a href="wishlist.html">Wish List Page</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children "><a href="#">Blog</a>
                                            <ul class="dropdown">
                                                <li><a href="blog.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                                <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                                                <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                                <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                                <li><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>
                                                <li><a href="blog-details-sidebar.html">Blog Details Sidebar Page</a></li>
                                                <li><a href="blog-details-fullwidth.html">Blog Details Fullwidth Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children "><a href="#">Pages</a>
                                            <ul class="dropdown">
                                                <li><a href="frequently-questions.html">FAQ</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login-register.html">login &amp; register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                    </ul>
                                </nav>
                                <!-- mobile menu navigation end -->
                            </div>
                            <!-- mobile menu end -->


                            <div class="header-top-settings offcanvas-curreny-lang-support">
                                <!-- mobile menu navigation start -->
                                <nav>
                                    <ul class="mobile-menu">
                                        <li class="menu-item-has-children"><a href="#">My Account</a>
                                            <ul class="dropdown">
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="Register-2.html">Register</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Currency:USD</a>
                                            <ul class="dropdown">
                                                <li><a href="#">USD - US Dollar</a></li>
                                                <li><a href="#">EUR - Euro</a></li>
                                                <li><a href="#">GBP - British Pound</a></li>
                                                <li><a href="#">INR - Indian Rupee</a></li>
                                                <li><a href="#">BDT - Bangladesh Taka</a></li>
                                                <li><a href="#">JPY - Japan Yen</a></li>
                                                <li><a href="#">CAD - Canada Dollar</a></li>
                                                <li><a href="#">AUD - Australian Dollar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- mobile menu navigation end -->
                            </div>

                            <!-- offcanvas widget area start -->
                            <div class="offcanvas-widget-area">
                                <div class="top-info-wrap text-left text-black">
                                    <ul>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <a href="info%40yourdomain.html">(1245) 2456 012</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <a href="info%40yourdomain.html">info@yourdomain.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="off-canvas-widget-social">
                                    <a title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                    <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                                </div>
                            </div>
                            <!-- offcanvas widget area end -->
                        </div>
                    </div>
                </aside>
                <!-- off-canvas menu end -->
            </header>
            <!-- Breadcrumb Area Start Here -->
            <div class="breadcrumbs-area position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="breadcrumb-content position-relative section-content">
                                <h3 class="title-3">Cart</h3>
                                <ul>
                                    <li><a href="index2.php">Home</a></li>
                                    <li>Shop</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--  -->
            <!-- Sticky Header End Here -->
            <!-- off-canvas menu start -->
            <aside class="off-canvas-wrapper" id="mobileMenu">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-inner-content">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>

                    <div class="off-canvas-inner">

                        <div class="search-box-offcanvas">
                            <form>
                                <input type="text" placeholder="Search product...">
                                <button class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <!-- mobile menu start -->
                        <div class="mobile-navigation">

                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="#">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home Page 1</a></li>
                                            <li><a href="index-2.html">Home Page 2</a></li>
                                            <li><a href="index-3.html">Home Page 3</a></li>
                                            <li><a href="index-4.html">Home Page 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Shop</a>
                                        <ul class="megamenu dropdown">
                                            <li class="mega-title has-children"><a href="#">Shop Layouts</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Shop Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                    <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                                    <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                                    <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title has-children"><a href="#">Product Details</a>
                                                <ul class="dropdown">
                                                    <li><a href="product-details.html">Single Product Details</a></li>
                                                    <li><a href="variable-product-details.html">Variable Product Details</a></li>
                                                    <li><a href="external-product-details.html">External Product Details</a></li>
                                                    <li><a href="gallery-product-details.html">Gallery Product Details</a></li>
                                                    <li><a href="countdown-product-details.html">Countdown Product Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title has-children"><a href="#">Others</a>
                                                <ul class="dropdown">
                                                    <li><a href="error404.html">Error 404</a></li>
                                                    <li><a href="compare.html">Compare Page</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="wishlist.html">Wish List Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children "><a href="#">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="blog.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                            <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                                            <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                            <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                            <li><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>
                                            <li><a href="blog-details-sidebar.html">Blog Details Sidebar Page</a></li>
                                            <li><a href="blog-details-fullwidth.html">Blog Details Fullwidth Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children "><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="frequently-questions.html">FAQ</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login-register.html">login &amp; register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->


                        <div class="header-top-settings offcanvas-curreny-lang-support">
                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="#">My Account</a>
                                        <ul class="dropdown">
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="Register.php">Register</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>

                        <!-- offcanvas widget area start -->
                        <div class="offcanvas-widget-area">
                            <div class="top-info-wrap text-left text-black">
                                <ul>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <a href="info%40yourdomain.html">(1245) 2456 012</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <a href="info%40yourdomain.html">info@yourdomain.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="off-canvas-widget-social">
                                <a title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                                <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                        <!-- offcanvas widget area end -->
                    </div>
                </div>
            </aside>
            <!-- off-canvas menu end -->
        </header>

        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper mt-no-text mb-no-text">
            <div class="container container-default-2 custom-area">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <?php

                                $userName = $_SESSION['userName'];
                                $sql = "SELECT * FROM users Where username = '$userName'";
                                $stm = $connection->prepare($sql);
                                $stm->execute();
                                $user = $stm->fetch();
                                $userID = $user['id'];

                                $queryUser_cart = "
                                        SELECT uc.*, p.name, p.image, p.price
                                        FROM user_cart uc
                                        INNER JOIN products p ON uc.product_id = p.id
                                        WHERE uc.user_id = '$userID'
                                    ";

                                $stm = $connection->prepare($queryUser_cart);
                                $stm->execute();
                                $user_cart = $stm->fetchAll();
                                $total = 0;
                                $countPro = 0;
                                ?>

                                <form action="./update-cart.php">
                                    <?php foreach ($user_cart as $product) { ?>
                                        <tbody>
                                            <tr>
                                                <input type="hidden" value="<?= $product['id'] ?>" name='user_cart_id'>
                                                <input type="hidden" value="<?= $product['product_id']; ?>" id='product_id'>
                                                <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="./uploads/<?= $product['image'] ?>" alt="Product" /></a></td>
                                                <td class="pro-title"><a href="#"><?= $product['name'] ?></a></td>
                                                <td class="pro-price" id="price"><?= $product['price'] . ' Vnđ'; ?></td>
                                                <td class="pro-quantity">
                                                    <div class="quantity">
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" name="pro-quantity" value="<?= $product['quantity']; ?>" type="number" id="quantity" min="1">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="pro-subtotal" id="total" name='pro-subtotal'>
                                                    <?php
                                                    echo (number_format($product['subtotal'])) . ' Vnđ';
                                                    ?>

                                                </td>
                                                <td class="pro-remove">
                                                    <a href="./delcart.php?id=<?= $product['id']; ?>"><i class="ion-trash-b"></i></a>

                                                </td>
                                            </tr>
                                            <?php
                                            $total += $product['subtotal'];
                                            ?>
                                        <?php $countPro++;
                                    }
                                    $_SESSION['countPro'] = $countPro;
                                        ?>

                                        </tbody>
                            </table>

                        </div>
                        <!-- Cart Update Option -->
                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                            <div class="apply-coupon-wrapper">
                                <form action="#" method="post" class=" d-block d-md-flex">
                                    <input type="text" placeholder="Enter Your Coupon Code" required />
                                    <button class="btn obrien-button primary-btn">Apply Coupon</button>
                                </form>
                            </div>

                            <div class="cart-update mt-sm-16">
                                <a href="./cart.php" type="submit" class="btn obrien-button primary-btn" id="update-cart">Update Cart</a>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">

                                <h3>Cart Totals</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td id="subTotal">
                                                <?php if (isset($total)) {
                                                    $_SESSION['total'] = $total;
                                                    echo (number_format($total)) . ' Vnđ';
                                                } else {
                                                    echo $total  . "VNĐ";
                                                }; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>

                                                <?php
                                                $ship = 0;
                                                if ($total != 0) {
                                                    $ship = 0.01 * $total;
                                                    echo (number_format($ship)) . " Vnđ";
                                                } else {
                                                    echo $ship . "Vnđ";
                                                }; ?>
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total-amount">
                                                <?php
                                                $checkOut = $total + $ship;
                                                echo (number_format($checkOut)) . " Vnđ";
                                                ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="checkout.php" class="btn obrien-button primary-btn d-block">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
        <!-- Support Area Start Here -->
        <div class="support-area">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-lg-12 col-custom">
                        <div class="support-wrapper d-flex">
                            <div class="support-content">
                                <h1 class="title">Need Help ?</h1>
                                <p class="desc-content">Call our support 24/7 at 01234-567-890</p>
                            </div>
                            <div class="support-button d-flex align-items-center">
                                <a class="obrien-button primary-btn" href="contact-us.html">Contact now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Area End Here -->
        <!-- Footer Area Start Here -->
        <footer class="footer-area">
            <div class="footer-widget-area">
                <div class="container container-default custom-area">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-custom">
                            <div class="single-footer-widget m-0">
                                <div class="footer-logo">
                                    <a href="index2.php">
                                        <img src="assets/images/logo/footer1.png" alt="Logo Image">
                                    </a>
                                </div>
                                <p class="desc-content">Obrien is the best parts shop of your daily nutritions. What kind of nutrition do you need you can get here soluta nobis</p>
                                <div class="social-links">
                                    <ul class="d-flex">
                                        <li>
                                            <a class="border rounded-circle" href="#" title="Facebook">
                                                <i class="fa fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="border rounded-circle" href="#" title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="border rounded-circle" href="#" title="Linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="border rounded-circle" href="#" title="Youtube">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="border rounded-circle" href="#" title="Vimeo">
                                                <i class="fa fa-vimeo"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                            <div class="single-footer-widget">
                                <h2 class="widget-title">Information</h2>
                                <ul class="widget-list">
                                    <li><a href="about-us.html">Our Company</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="about-us.html">Our Services</a></li>
                                    <li><a href="about-us.html">Why We?</a></li>
                                    <li><a href="about-us.html">Careers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                            <div class="single-footer-widget">
                                <h2 class="widget-title">Quicklink</h2>
                                <ul class="widget-list">
                                    <li><a href="about-us.html">About</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                            <div class="single-footer-widget">
                                <h2 class="widget-title">Support</h2>
                                <ul class="widget-list">
                                    <li><a href="contact-us.html">Online Support</a></li>
                                    <li><a href="contact-us.html">Shipping Policy</a></li>
                                    <li><a href="contact-us.html">Return Policy</a></li>
                                    <li><a href="contact-us.html">Privacy Policy</a></li>
                                    <li><a href="contact-us.html">Terms of Service</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-custom">
                            <div class="single-footer-widget">
                                <h2 class="widget-title">See Information</h2>
                                <div class="widget-body">
                                    <address>123, H2, Road #21, Main City, Your address goes here.<br>Phone: 01254 698 785, 36598 254 987<br>Email: https://example.com</address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-area">
                <div class="container custom-area">
                    <div class="row">
                        <div class="col-12 text-center col-custom">
                            <div class="copyright-content">
                                <p>Copyright © 2020 <a href="https://hasthemes.com/" title="https://hasthemes.com/">HasThemes</a> | Built with&nbsp;<strong>Obrien</strong>&nbsp;by <a href="https://hasthemes.com/" title="https://hasthemes.com/">HasThemes</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- jQuery Migrate JS -->
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- Countdown JS -->
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <!-- Ajax JS -->
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <!-- Jquery Nice Select JS -->
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <!-- Jquery Ui JS -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <!-- jquery magnific popup js -->
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script>
        $('.inc').each(function(index, element) {
            $(element).click(function(e) {
                var quantity = $(element).closest('.cart-plus-minus').find('.cart-plus-minus-box').val();
                var product_id = $(element).closest('tr').find('#product_id').val();
                //console.log(product_id, quantity)
                $.ajax({
                    url: "./result.php",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'quantity': quantity,
                        'product_id': product_id
                    },
                    success: function(result) {
                        $(element).closest('tr').find('.pro-subtotal').html(result);
                    }
                });
            });
        });
        $('.dec').each(function(index, element) {
            $(element).click(function(e) {
                var quantity = $(element).closest('.cart-plus-minus').find('.cart-plus-minus-box').val();
                var product_id = $(element).closest('tr').find('#product_id').val();

                $.ajax({
                    url: "./result.php",
                    type: "POST",
                    dataType: "",
                    data: {
                        'quantity': quantity,
                        'product_id': product_id
                    },
                    success: function(result) {
                        console.log(result);
                        $(element).closest('tr').find('.pro-subtotal').html(result);
                    }
                });
            });
        });
        // Sự kiện khi người dùng thay đổi số lượng sản phẩm
        $('.cart-plus-minus-box').on('change', function() {
            var rowElement = $(this).closest('tr');
            updateSubtotalForRow(rowElement);
        });

        // Sự kiện khi người dùng nhấn "Update Cart"
        $('#subTotal').on('click', function(e) {
            e.preventDefault();

            // Gọi hàm cập nhật subtotal cho mỗi hàng
            $('.pro-subtotal').each(function(index, element) {
                var rowElement = $(element).closest('tr');
                updateSubtotalForRow(rowElement);

                // Lấy dữ liệu từ hàng để gửi qua AJAX
                var quantity = $(rowElement).find('.cart-plus-minus-box').val();
                var product_id = $(rowElement).find('#product_id').val();

                // Gửi dữ liệu thông qua AJAX để cập nhật dữ liệu trên cơ sở dữ liệu
                $.ajax({
                    url: "./result.php",
                    type: "POST",
                    dataType: "json",
                    data: {
                        'quantity': quantity,
                        'product_id': product_id
                    },
                    success: function(result) {
                        // Cập nhật tổng giá trị tổng cộng từ kết quả trả về
                        $(rowElement).find('.pro-subtotal').text(result);
                    },
                    error: function() {
                        // Xử lý lỗi nếu cần
                    }
                });
            });
        });

        // Hàm cập nhật tổng giá trị tổng cộng dựa trên các phần tử trong hàng
        function updateSubtotalForRow(rowElement) {
            var quantity = $(rowElement).find('.cart-plus-minus-box').val();
            var price = $(rowElement).find('#price').text();
            var newSubtotal = parseFloat(quantity) * parseFloat(price);
            $(rowElement).find('.pro-subtotal').text(newSubtotal);
        }
    </script>
</body>


<!-- Mirrored from template.hasthemes.com/obrien/obrien/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 02:18:09 GMT -->

</html>