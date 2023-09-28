<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include your CSS and JavaScript libraries -->
</head>

<body>
    <?php
    // tao global setting
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("HOST", "localhost");
    define("DB_NAME", "duanmau");

    //$connection = null;
    try {
        $url = "mysql:host=" . HOST . ";dbname=" . DB_NAME . "";
        $connection = new PDO($url, USERNAME, PASSWORD);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    ?>
    <div class="shop-select">
        <form class="d-flex flex-column w-100" action="#">
            <div class="form-group">
                <select id="categorySelect" class="form-control nice-select w-100" onchange="filterProducts()">
                    <option value="#">Select a category</option>
                    <?php
                    // Your database connection code here
                    $sql = "SELECT * FROM categories_cha";
                    $stm = $connection->prepare($sql);
                    $stm->execute();
                    $categories = $stm->fetchAll();

                    foreach ($categories as $category) {
                        echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </form>
    </div>

    <!-- Shop Wrapper Start -->
    <div class="row shop_wrapper grid_4" id="productList">
        <?php
        // $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        // $productsPerPage = 12;
        // $from = ($page - 1) * $productsPerPage;

        // // Fetch products with pagination
        // $sql = "SELECT * FROM products LIMIT :from, :perPage";
        // $statement = $connection->prepare($sql);
        // $statement->bindParam(':from', $from, PDO::PARAM_INT);
        // $statement->bindParam(':perPage', $productsPerPage, PDO::PARAM_INT);
        // $statement->setFetchMode(PDO::FETCH_ASSOC);
        // $statement->execute();
        // $products = $statement->fetchAll();
        $query = "SELECT * FROM products";
        $stm = $connection->prepare($query);
        $stm->execute();
        $products = $stm->fetchAll();
        ?>

        <?php
        foreach ($products as $product) {
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-custom product-area">

                <div class="single-product position-relative">
                    <div class="product-image">
                        <a class="d-block" href="./product-detail.php?id=<?php echo $product['id']; ?>">
                            <img src="./uploads/<?php echo $product['image']; ?>" alt="" class="product-image-1 w-100" style="height: 24rem;">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-title">
                            <h4 class="title-2"> <a href="./product-detail.php?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h4>
                        </div>
                        <div class="price-box">
                            <span class="regular-price "><?php echo number_format($product['price']) . 'Vnđ'; ?></span>
                        </div>
                    </div>
                    <div class="add-action d-flex position-absolute">
                        <a href="./product-detail.php?id=<?php echo $product['id']; ?>" title="Add To cart">
                            <i class="ion-bag"></i>
                        </a>
                        <a href="compare.html" title="Compare">
                            <i class="ion-ios-loop-strong"></i>
                        </a>
                        <a href="wishlist.html" title="Add To Wishlist">
                            <i class="ion-ios-heart-outline"></i>
                        </a>
                        <a href="#exampleModalCenter" data-bs-toggle="modal" title="Quick View">
                            <i class="ion-eye"></i>
                        </a>
                    </div>
                </div>

            </div>
        <?php
        }
        ?>
    </div>

    <script>
        function filterProducts() {
            var select = document.getElementById("categorySelect");
            var selectedCategoryId = select.value;

            // Make an AJAX request to fetch products based on the selected category
            // You would need to implement this part using JavaScript or jQuery
            // Update the "productList" div with the fetched product data
        }
    </script>

</body>

</html>