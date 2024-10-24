<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        session_start();
        $category = $_POST['category'];
        $topic = $_POST['topic'];
        $content = $_POST['content'];

        $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");

        $id = $_SESSION['user_id'];
        $sql = "INSERT into post (title,content,post_date,cat_id,user_id) values ('$topic','$content',Now(),'$category','$id')";
        $conn->exec($sql);
        $conn = null;
        header("location:index.php");
    ?>
</body>
</html>