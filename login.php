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
    <title>Login</title>
    <style>
        input:focus {background-color: lightgrey;}
        h1:hover {background: cyan;}
        a:hover {color: blue;}
        a:visited {color: black;}
    </style>
</head>
<body>
    <center><h1>Webboard Easy</h1></center>
    <hr>
    <div align="center">
        <form action="verify.php" method="post">
            <table style="border: 2px solid black; width: 40%;">
                <tr><td colspan="2" style="background-color: #6CD2FE;">เข้าสู่ระบบ</td></tr>
                <tr><td>Username</td><td><input type="text" name="username"></td></tr>
                <tr><td>Password</td><td><input type="password" name="password"></td></tr>
                <tr><td colspan="2" align="center"><input type="submit" value="Login"></td></tr>
            </table>
        </form>
            <br>
            <div>
                ถ้ายังไม่ได้เป็นสมาชิก
                <a href="register.html">กรุณาสมัครสมาชิก</a>
                <br>
                <a href="index.php" >กลับหน้าหลัก</a>
            </div>
    </div>
</body>
</html>