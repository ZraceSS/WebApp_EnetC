<?php
    session_start();
    if (isset($_SESSION['id']) && $_SESSION['role'] == 'a')
    {
        $id = $_GET['id'];
        echo "<br>ลบกระทู้หมายเลข : $id <br>";
        echo "<a href='index.php'>กลับไปยังหน้าหลัก</a>";
    }
    else
    {
        header("location:index.php");
        die();
    }
?>