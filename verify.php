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
                $_SESSION['username']='admin';
                $_SESSION['role']='a';
                $_SESSION['id']=session_id();
                header("location:index.php");
            }
            else if ($usr == 'member' && $pass == 'mem1234')
            {
                $_SESSION['username']='member';
                $_SESSION['role']='m';
                $_SESSION['id']=session_id();
                header("location:index.php");
            }
            else
            {
                $_SESSION['error'] = 1;
                header("location:login.php");
            }
        ?>
    </div>
</body>
</html>