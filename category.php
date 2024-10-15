<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <h1 style="text-align: center;">Webboard Easy</h1>
    <div class="container-fluid">
        <?php
                include "nav.php"
        ?>

        <br>
        <div class="container-lg">
                <div class="col-sm-8 col-md-6 col-lg-5 mx-auto">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="cols">ลำดับ</th>
                                <th scope="cols">ชื่อหมวดหมู่</th>
                                <th scope="cols">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root", "");
                            $sql="SELECT id,name From category Order by id DESC";
                            $result=$conn->query($sql);
                            $i=1;
                            while($row = $result->fetch()){
                                echo "<tr>
                                    <td>$row[0]</td>
                                    <td>$row[1]</td>
                                    <td>
                                        <a class='btn btn-warning' role='button'>
                                            <i class='bi bi-pencil-fill'></i>
                                        </a>
                                        <a class='btn btn-danger' role='button'>
                                            <i class='bi bi-trash'></i>
                                        </a>
                                    </td>
                                </tr>";
                                $i++;
                            }
                            $conn=null;
                        ?>
                        </tbody>
                    </table>
                    <center>
                        <a class="btn btn-success" role="button" data-toggle="Modal" data-target="#addModal">
                            <i class="bi bi-bookmark-plus">เพิ่มหมวดหมู่ใหม่</i>
                        </a>
                    </center>
                </div>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="#addModal">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">เพิ่มหมวดหมู่ใหม่</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="category_save.php" method="post">
                    <div class="modal-body">
                        <div class="mb-1">ชื่อหมวดหมู่ : </div>
                        <input class="form-control" type="text" name="category">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
    </div>
</body>
</html>