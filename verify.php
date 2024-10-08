<?php
    session_start();

    if(isset($_SESSION['id']))
    {
        header("location:index.php");
        die();
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

            $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
            $sql = "SELECT * From user where login='$usr' and password=sha1('$pass')";
            $result=$conn->query($sql);
            if ($result->rowCount()==1){
                $data=$result->fetch(PDO::FETCH_ASSOC);
                $_SESSION['username']=$data['login'];
                $_SESSION['role']=$data['role'];
                $_SESSION['user_id']=$data['id'];
                $_SESSION['id']=session_id();
                header("location:index.php");
                die();
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