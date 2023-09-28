<!doctype html>
<html lang="en">

<body>
    <div class="container">
        <div class="row">
            <?php
            include('./layout/header.php');
            include('./layout/nav.php');
            include('./layout/sidebar.php');
            ?>
            <div class="col col-lg-10">
                <form action="./dashboard.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Fill name category" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button type="submit" class="btn btn-primary" type="button" id="button-addon2">Create</button>
                    </div>
                    <?php 
                    //validate data
                    $message = [];
                    $errors = [];
                    if (isset($_POST['name'])) {
                        $name = $_POST['name'];
                        if (isset($name) && $name === '') {
                            $errors[] = 'Please fill this field!';
                        }
                        if (strlen($name) < 1) {
                            $errors[] = 'Name category too short';
                        }
                        if (isset($connection) && count($errors) < 1) {
                            $sql = "SELECT * FROM categories where name = :name";
                            $stm = $connection->prepare($sql);
                            $stm->execute([
                                ':name' => $_POST['name'],
                            ]);
                            $count = $stm->rowCount();

                            if ($count > 0) {
                                $errors[] = 'Category name already exists';
                            } else {
                                $sql = "INSERT INTO categories (name) VALUES (:name)";
                                $stm = $connection->prepare($sql);
                                if ($stm->execute([
                                    ':name' => $_POST['name'],
                                ])) {
                                    $message[] = 'Add new category successful';
                                } else {
                                    $errors[] = 'Add new category false!';
                                }
                            }
                        }
                    }

                    
                    $sql_all = "SELECT * FROM categories";
                    $stm = $connection->prepare($sql_all);
                    $stm->setFetchMode(PDO::FETCH_ASSOC);
                    $stm->execute();
                    $categories = $stm->fetchAll();
                    if (count($categories) < 0) {
                        $message[] = 'No data in category !';
                    }
                    if (isset($message)) {
                        foreach ($message as $message) {
                            echo '<div class="alert alert-success" role="alert">
                            ' . $message . '
                            </div>';
                        }
                    }
                    if (isset($errors)) {
                        foreach ($errors as $error) {
                            echo '<div class="alert alert-danger" role="alert">
                            ' . $error . '
                            </div>';
                        }
                    }
                   
                    ?>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($categories) && is_array($categories) && count($categories) > 0) {
                                if (count($categories) > 0) {
                                    
                                    foreach ($categories as $category) {
                                ?>
                                        <tr>
                                            
                                            <th scope="row"><?php echo $category['id']; ?></th>
                                        
                                            <td><?php echo $category['name']; ?></td>
                                            <td>
                                                
                                                <a class="btn btn-primary" href="./edit-category.php">Sửa</a>
                                                
                                                <a class="btn btn-danger" href="./delete-category.php?id=<?php echo $category['id']; ?>">Xóa</a>
                                            </td>
                                        </tr>
                                <?php
                                }
                            }
                         }
                         else {
                            echo "Không có danh mục hoặc dữ liệu bị thiếu.";
                         }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>