<?php
    session_start();

    if(isset($_SESSION['id']))
    {
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <center><h1>สมัครสมาชิก</h1></center>
    <?php
        include "nav.php"
    ?>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 mt-3">
            <?php
                if (isset($_SESSION['add_login'])){
                    if ($_SESSION['add_login'] == 'error'){
                        echo "<div class='alert alert-danger'> ชื่อบัญชีซ้ำหรือฐานข้อมูลมีปัญหา</div>";
                    }else{
                        echo "<div class='alert alert-success'>เพิ่มบัญชีเรียบร้อยแล้ว</div>";
                    }
                    unset($_SESSION['add_login']);
                }
            ?>
        </div>
    </div>
    <div class="container-lg">
        <div class="row mt-3">
            <div class="col-sm-8 col-md-6 col-lg-5 mx-auto">
                <div class='card mt-4 me-auto ms-auto'>
                    <div class="card-header text-bg-primary">
                        เข้าสู่ระบบ
                    </div>
                    <div class="card-body">
                        <form action="register_save.php" method="post">
                            <div class="mt-3 row">
                                <div class="col-sm-3 col-md-3 col-lg-3 mx-auto">ชื่อบัญชี : </div>
                                <div class="col-sm-9 col-md-9 col-lg-9 mx-auto">
                                    <input class="form-control" type="text" name="login" required>
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-sm-3 col-md-3 col-lg-3 mx-auto">รหัสผ่าน : </div>
                                <div class="col-sm-9 col-md-9 col-lg-9 mx-auto">
                                    <input class="form-control" type="password" name="pwd" required>
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-sm-3 col-md-3 col-lg-3 mx-auto">ชื่อ-นามสกุล : </div>
                                <div class="col-sm-9 col-md-9 col-lg-9 mx-auto">
                                    <input class="form-control" type="text" name="name" required>
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-sm-3 col-md-3 col-lg-3 mx-auto">
                                    เพศ :
                                </div>
                                <div class="col-sm-9 col-md-9 col-lg-9 mx-auto">
                                    <input type="radio" class="form-control-input" name="gender" value="m" required>ชาย<br>
                                    <input type="radio" class="form-control-input" name="gender" value="f" required>หญิง<br>
                                    <input type="radio" class="form-control-input" name="gender" value="o" required>อื่นๆ
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-sm-3 col-md-3 col-lg-3 mx-auto">
                                    อีเมล : 
                                </div>
                                <div class="col-sm-9 col-md-9 col-lg-9 mx-auto">
                                    <input class="form-control" type="text" name="email" required>
                                    <br>
                                    <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-arrow-down-square"></i> สมัครสมาชิก
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
            <br>
        <div class="mt-4 me-auto ms-auto" style="text-align: center;">
            <a href="index.php">กลับไปหน้าหลัก</a>
        </div>
    </div>
</body>
</html>