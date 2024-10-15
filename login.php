<?php
session_start();

if (isset($_SESSION['id'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        <?php
                if (isset($_SESSION['error']) && $_SESSION['error'] == 1){
                    echo "<div class='alert alert-danger mt-4 me-auto ms-auto' style='width: 400px'>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>";
                    unset($_SESSION['error']);
                }
        ?>
        <div class='card mt-4 me-auto ms-auto' style="width: 400px;">
            <div class="card-header">
                เข้าสู่ระบบ
            </div>
            <div class="card-body">
                <form action="verify.php" method="post">
                    <div class="mb-1">Login : </div>
                    <input class="form-control" type="text" name="username">
                    <div class="mb-1">Password : </div>
                    <div class="input-group">
                        <input id="password" class="form-control" type="password" name="password">
                        <button class="input-group-text" type="button" onclick="showpassword()">
                            <i id="showpass" class="bi bi-eye-slash"></i>
                        </button>
                    </div>
                    <div class="text-center">
                        <input class="btn btn-secondary mt-2" type="submit" value="Login">
                        <a class="btn btn-secondary mt-2" href="login.php">Reset</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-3" style="text-align: center;">
            ถ้ายังไม่ได้เป็นสมาชิก
            <a href="register.php">กรุณาสมัครสมาชิก</a>
            <br>
            <a href="index.php">กลับหน้าหลัก</a>
        </div>
    </div>
    <script>
        function showpassword(){
            let password = document.getElementById("password");
            let showpass = document.getElementById("showpass");
            let isPassword = password.type === "password";

            password.type = isPassword ? "text" : "password";
            showpass.classList.toggle("bi-eye", isPassword);
            showpass.classList.toggle("bi-eye-slash-fill", !isPassword);
        }
    </script>
</body>

</html>