<?php
    session_start();
    if (isset($_SESSION['id']))
    {
        $id = $_GET['id'];
        $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root", "");
        $sql = "DELETE From post where id=$id";
        $conn->exec($sql);
        $sql = "DELETE From comment where post_id=$id";
        $conn->exec($sql);
        $conn=null;
        header("location:index.php");
    }
    else
    {
        header("location:index.php");
        die();
    }
?>