<!doctype html>
<html lang="en">
<?php
include('./layout/header.php')

?>

<body>
    <div class="container">
        <div class="row">
            <?php
            include('./layout/nav.php');
            include('./layout/sidebar.php');
            ?>

            <div class="col col-lg-10">
                <form class="form-inline form" action="" method="POST">
                    <input type="hidden" class="form-control" name="id" placeholder="input name category" id="id">
                    <input type="text" class="form-control" id ="name" name ="name" placeholder="Fill name category" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button type ="submit" class="btn btn-primary" type="button" id="button-addon2">Save</button>
                </form>
                <?php
                //kiểm tra name với isset
                if (isset($_POST['name']) && isset($_POST['id'])) {
                    $message = "";
                    $id = $_POST['id'];
                    if (empty($id)) {
                        //case insert nếu id trống thì thêm
                        $sql = "SELECT * FROM categories where name = :name";
                        $statement = $connection->prepare($sql);
                        $statement->execute([
                            ':name' => $_POST['name'],
                        ]);
                        $count = $statement->rowCount();
                        //thêm
                        if ($count > 0) {
                            $message = "<span class='text text-danger'>catagory name already exists</span>";
                        } else {
                            $sql = "INSERT INTO categories (name) VALUES (:name)";
                            $statement = $connection->prepare($sql);
                            if ($statement->execute([
                                ':name' => $_POST['name'],
                            ])) {

                                $message = "<span  class='text text-success'>created successfully</span>";
                            }
                        }
                    } else {
                        //thì cập nhật
                        $sql = "UPDATE categories SET name = :name where id=:id";
                        $statement = $connection->prepare($sql);
                        if ($statement->execute([
                            ':name' => $_POST['name'],
                            ':id' => intval($id),
                        ])) {

                            $message = "<div class='alert alert-success' role='alert'>Updated successfully</div>";
                        }
                    }
                }
                //in ra thông bao
                if (isset($message) && $message !== '') {
                    echo $message;
                }
                // in ra cái bảng
                $sql_all = "SELECT * FROM categories";
                $statement = $connection->prepare($sql_all);
                $statement->setFetchMode(PDO::FETCH_ASSOC);
                $statement->execute();
                $categories = $statement->fetchAll();
                if (isset($_SESSION['message'])) {
                    echo "<div class='alert alert-success' role='alert'>{$_SESSION['message']}</div>";
                    unset($_SESSION['message']);
                }
                ?>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- đổ dữ liệu ra html -->
                        <?php foreach ($categories as $category) { ?>
                            <tr>
                                <th scope="row"><?php echo $category['id'];  ?></th>
                                <td><?php echo $category['name'];  ?></td>
                                <td>
                                    <button class="btn btn-primary" onclick="updateCat(<?= $category['id'] ?>, '<?= $category['name'] ?>')">edit</button>
                                    <a class="btn btn-danger" href="./delete-category.php?id=<?php echo $category['id'];  ?>">delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script> -->
    <script>
        updateCat = (id, name) => {
            //console.log(id, name)
            const elmId = document.getElementById('id');
            const elmName = document.getElementById('name');
            elmId.value = id;
            elmName.value = name;
        }
    </script>
</body>

</html>