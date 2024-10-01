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
</head>
<body>
    <?php
        $login = $_POST['login'];
        $passwd = $_POST['pwd'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];

        $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");

        $sql = "INSERT INTO user (login, password, name, gender, email, role) VALUES ('$login', '$passwd', '$name', '$gender', '$email', 'm')";

        $conn->exec($sql);
        $conn = null;

        $_SESSION['reg_success'] = 1;
        header("location:login.php");
    ?>
</body>
</html>