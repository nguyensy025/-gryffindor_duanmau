<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main-wrapper">

        <div class="header">

            <div class="header-left active">
                <a href="index.html" class="logo">
                    <img src="layout_dashboard/assets/img/logo.png" alt="">
                </a>
                <a href="index.html" class="logo-small">
                    <img src="layout_dashboard/assets/img/logo-small.png" alt="">
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">

                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                        <form action="#">
                            <div class="searchinputs">
                                <input type="text" placeholder="Search Here ...">
                                <div class="search-addon">
                                    <span><img src="layout_dashboard/assets/img/icons/closes.svg" alt="img"></span>
                                </div>
                            </div>
                            <a class="btn" id="searchdiv"><img src="layout_dashboard/assets/img/icons/search.svg" alt="img"></a>
                        </form>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow flag-nav">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                        <img src="layout_dashboard/assets/img/flags/us1.png" alt="" height="20">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="layout_dashboard/assets/img/flags/us.png" alt="" height="16"> English
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="layout_dashboard/assets/img/flags/fr.png" alt="" height="16"> French
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="layout_dashboard/assets/img/flags/es.png" alt="" height="16"> Spanish
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="layout_dashboard/assets/img/flags/de.png" alt="" height="16"> German
                        </a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <img src="layout_dashboard/assets/img/icons/notification-bing.svg" alt="img"> <span class="badge rounded-pill">4</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="layout_dashboard/assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> added
                                                    new task <span class="noti-title">Patient appointment booking</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="layout_dashboard/assets/img/profiles/avatar-03.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
                                                    changed the task name <span class="noti-title">Appointment booking
                                                        with payment gateway</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="layout_dashboard/assets/img/profiles/avatar-06.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span>
                                                    added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="layout_dashboard/assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span>
                                                    completed task <span class="noti-title">Patient and Doctor video
                                                        conferencing</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="layout_dashboard/assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
                                                    added new task <span class="noti-title">Private chat module</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="layout_dashboard/assets/img/profiles/avator1.jpg" alt="">
                            <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img src="layout_dashboard/assets/img/profiles/avator1.jpg" alt="">
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>John Doe</h6>
                                    <h5>Admin</h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My
                                Profile</a>
                            <a class="dropdown-item" href="generalsettings.html"><i class="me-2" data-feather="settings"></i>Settings</a>
                            <hr class="m-0">
                            <a class="dropdown-item logout pb-0" href="signin.html"><img src="layout_dashboard/assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>


            <div class="dropdown mobile-user-menu">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="generalsettings.html">Settings</a>
                    <a class="dropdown-item" href="signin.html">Logout</a>
                </div>
            </div>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href="index.html"><img src="layout_dashboard/assets/img/icons/dashboard.svg" alt="img"><span>
                                    Dashboard</span> </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="layout_dashboard/assets/img/icons/product.svg" alt="img"><span>
                                    Product</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="addproduct.php">Add Product</a></li>
                                <li><a href="listproduct.php">Product List</a></li>
                                <li><a href="edit-product.php">Product Edit</a></li>
                                <li><a href="product-update.php">Product update</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <img src="layout_dashboard/assets/img/icons/product.svg" alt="img">
                                <span>Category</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <?php
                            // Truy vấn lấy danh sách các danh mục cha và danh mục con tương ứng
                            $sql_categories_cha = "SELECT * FROM categories_cha";
                            $statement_categories_cha = $connection->prepare($sql_categories_cha);
                            $statement_categories_cha->execute();
                            $categoriesChaResults = $statement_categories_cha->fetchAll(PDO::FETCH_ASSOC);

                            // Bắt đầu danh sách menu
                            echo "<ul>";

                            // Lặp qua danh sách danh mục cha và danh mục con tương ứng
                            foreach ($categoriesChaResults as $categoryCha) {
                                $categoryChaId = $categoryCha['id']; // Sử dụng tên cột chính xác
                                $categoryChaName = $categoryCha['name'];

                                // Truy vấn lấy danh sách các danh mục con dựa trên cha_id
                                $sql_categories = "SELECT * FROM categories WHERE cha_id = :cha_id";
                                $statement_categories = $connection->prepare($sql_categories);
                                $statement_categories->bindValue(':cha_id', $categoryChaId, PDO::PARAM_INT);
                                $statement_categories->execute();
                                $categoriesResults = $statement_categories->fetchAll(PDO::FETCH_ASSOC);

                                // Hiển thị danh mục cha và danh mục con (nếu có)
                                if (!empty($categoriesResults)) {
                                    echo "<li class='submenu'><a href='#'>{$categoryChaName}
                                        <span class='menu-arrow'></span></a>";
                                    echo "<ul>";
                                    foreach ($categoriesResults as $category) {
                                        $categoryId = $category['id'];
                                        $categoryName = $category['name'];
                                        echo "<li><a href='#'>{$categoryName}</a></li>";
                                    }
                                    echo "</ul>";
                                    echo "</li>"; // Đóng thẻ </li> cho danh mục cha
                                }
                            }
                            // Kết thúc danh sách menu
                            echo "</ul>";
                            ?>

                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="layout_dashboard/assets/img/icons/users1.svg" alt="img"><span>
                                    Users</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="customerlist.php">New User </a></li>
                                <li><a href="addcustomer.php">Users List</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="layout_dashboard/assets/js/jquery-3.6.0.min.js"></script>

    <script src="layout_dashboard/assets/js/feather.min.js"></script>

    <script src="layout_dashboard/assets/js/jquery.slimscroll.min.js"></script>

    <script src="layout_dashboard/assets/js/jquery.dataTables.min.js"></script>
    <script src="layout_dashboard/assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="layout_dashboard/assets/js/bootstrap.bundle.min.js"></script>

    <script src="layout_dashboard/assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="layout_dashboard/assets/plugins/apexchart/chart-data.js"></script>

    <script src="layout_dashboard/assets/js/script.js"></script>
</body>

</html>