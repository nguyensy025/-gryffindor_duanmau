<?php
session_start();
ob_start();
include './provider.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Check Out</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="checkout-area">
                <div class="container container-default-2 custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-accordion">
                                <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                                <div id="checkout-login" class="coupon-content">
                                    <div class="coupon-info">
                                        <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est
                                            sit amet ipsum luctus.</p>
                                        <form action="#">
                                            <p class="form-row-first">
                                                <label>Username or email <span>*</span></label>
                                                <input type="text">
                                            </p>
                                            <p class="form-row-last">
                                                <label>Password <span>*</span></label>
                                                <input type="password">
                                            </p>
                                            <p class="form-row">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me">Remember me</label>
                                            </p>
                                            <p class="lost-password"><a href="#">Lost your password?</a></p>
                                        </form>
                                    </div>
                                </div>
                                <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                                <div id="checkout_coupon" class="coupon-checkout-content">
                                    <div class="coupon-info">
                                        <form action="#">
                                            <p class="checkout-coupon">
                                                <input placeholder="Coupon code" type="text">
                                                <input class="coupon-inner_btn" value="Apply Coupon" type="submit">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $firstname = $_POST['firstname'];
                            $lastname = $_POST['lastname'];
                            $address = $_POST['address'];
                            $apartment = $_POST['apartment'];
                            $city = $_POST['city'];
                            $state = $_POST['state'];
                            $postcode = $_POST['postcode'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            //lấy data từ data base
                            $sqlCheck = "SELECT * FROM checkout";
                            $stm = $connection->prepare($sqlCheck);
                            $stm->setFetchMode(PDO::FETCH_ASSOC);
                            $list = $stm->fetchAll();
                            if ($stm->execute(['']))
                            $sql = "INSERT INTO checkout (firstname, lastname, address, city, state, postcode, email, phone)
                             VALUES (:firstname, :lastname, :address, :city, :state, :postcode, :email, :phone)";
                            $stm2 = $connection->prepare($sql);
                            if ($stm2->execute([
                                'firstname' => $firstname,
                                'lastname' => $lastname,
                                'address' => $address,
                                'apartment' => $apartment,
                                'city' => $city,
                                'state' => $state,
                                'postcode' => $postcode,
                                'email' => $email,
                                'phone' => $phone
                            ]));
                        }
                        ?>
                        <div class="col-lg-6 col-12">
                            <form action="./checkout.php" method="post">
                                <div class="checkbox-form">
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>First Name <span>*</span></label>
                                                <input placeholder="John" type="text" name="firstname">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Last Name <span>*</span></label>
                                                <input placeholder="Doe" type="text" name="lastname">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span>*</span></label>
                                                <input placeholder="Street address" type="text" name="address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <input placeholder="Apartment, suite, unit etc. (optional)" type="text" name="apartment">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span>*</span></label>
                                                <input placeholder="City" type="text" name="city">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>State / County <span>*</span></label>
                                                <input placeholder="State" type="text" name="state">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Postcode / Zip <span>*</span></label>
                                                <input placeholder="Zip Code" type="text" name="postcode">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span>*</span></label>
                                                <input placeholder="you@example.com" type="email" name='email'>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone <span>*</span></label>
                                                <input placeholder="123-456-7890" type="text" name='phone'>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list create-acc">
                                                <input id="cbox" type="checkbox">
                                                <label for="cbox">Create an account?</label>
                                            </div>
                                            <div id="cbox-info" class="checkout-form-list create-account">
                                                <p class="mb-2">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                <label>Account password <span>*</span></label>
                                                <input placeholder="password" type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-button-payment">
                                        <input value="Lưu Thông Tin" type="submit">
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class=" col-lg-6 col-12">
                            <?php $userName = $_SESSION['userName'];
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
                            ?>
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-product-name">Product</th>
                                                <th class="cart-product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <? foreach ($user_cart as $product) { ?>
                                            <tbody>
                                                <tr class="cart_item">
                                                    <td class="cart-product-name"> <?= $product['name'] ?>
                                                        <strong class="product-quantity">
                                                            x <?= $product['quantity'] ?> </strong>
                                                    </td>
                                                    <td class="cart-product-total text-center"><span class="amount"><?= $product['price'] ?></span></td>
                                                </tr>
                                            </tbody>
                                        <?php } ?>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td class="text-center"><span class="amount"><? echo number_format($_SESSION['total']); ?></span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td class="text-center"><strong><span class="amount"><? echo number_format($_SESSION['total']); ?></span></strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="#payment-1">
                                                    <h5 class="panel-title mb-2">
                                                        <a href="#" class="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Direct Bank Transfer.
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                    <div class="card-body mb-2 mt-2">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="#payment-2">
                                                    <h5 class="panel-title mb-2">
                                                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Cheque Payment
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                    <div class="card-body mb-2 mt-2">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="#payment-3">
                                                    <h5 class="panel-title mb-2">
                                                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            PayPal
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                    <div class="card-body mb-2 mt-2">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input value="Place order" type="submit">
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
</body>

</html>