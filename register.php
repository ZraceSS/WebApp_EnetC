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
</head>
<body>
    <center><h1>สมัครสมาชิก</h1></center>
    <hr>
    <div align="center">
            <table style="border: 2px solid black; width: 40%;">
                <tr><td colspan="2" style="background-color: #6CD2FE;">กรอกข้อมูล</td></tr>
                <tr><td>ชื่อบัญชี:</td><td><input type="text" name="username"></td></tr>
                <tr><td>รหัสผ่าน:</td><td><input type="password" name="password"></td></tr>
                <tr><td>ชื่อ-นามสกุล:</td><td><input type="text" name="name"></td></tr>
                <tr><td>เพศ:</td><td>
                    <input type="radio" name="gender" value="m">
                    ชาย<br>
                    <input type="radio" name="gender" value="f">
                    หญิง<br>
                    <input type="radio" name="gender" value="o">
                    อื่นๆ<br>
                            </td></tr>
                <tr><td>อีเมล:</td><td><input type="email" name="email"></td></tr>
                <tr><td colspan="2" align="center"><input type="submit" value="สมัครสมาชิก"></td></tr>
            </table>
            <br>
            <div>
                <a href="index.php">กลับไปหน้าหลัก</a>
            </div>
    </div>
</body>
</html>