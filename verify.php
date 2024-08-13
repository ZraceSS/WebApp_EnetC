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
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <center><h1>Webboard Easy</h1></center>
    <hr>
    <div align="center">
        <?php
            $usr = $_POST['username'];
            $pass = $_POST['password'];

            if ($usr == 'admin' && $pass == 'ad1234')
            {
                echo "ยินดีต้อนรับคุณ ADMIN <BR>";
                $_SESSION['username']='admin';
                $_SESSION['role']='a';
                $_SESSION['id']=session_id();
            }
            else if ($usr == 'member' && $pass == 'mem1234')
            {
                echo "ยินดีต้อนรับคุณ MEMBER <BR>";
                $_SESSION['username']='member';
                $_SESSION['role']='m';
                $_SESSION['id']=session_id();
            }
            else
            {
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <BR>";
            }
        ?>
        <a href='index.php'>กลับไปยังหน้าหลัก</a>
    </div>
</body>
</html>