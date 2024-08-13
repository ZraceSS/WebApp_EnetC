<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>
</head>
<body>
    <center><h1>Webboard Easy</h1></center>
    <hr>
    <?php
        if(isset($_SESSION['id']))
        {
            echo "<br>ผู้ใช้ : $_SESSION[username]&nbsp;&nbsp;&nbsp;";
        }
        else
        {
            header("location:index.php");
            die();
        }
    ?>
    <form style="text-align: left;">
        <br>หมวดหมู่ : 
        <select name="Category">
            <option value="all">--ทั้งหมด--</option>
            <option value="General">เรื่องทั่วไป</option>
            <option value="Study">เรื่องเรียน</option>
        </select>
        <table align="left"><tr><td> หัวข้อ : </td>
        <td><input type="text"></td></tr>
        <tr><td>เนื้อหา : </td><td><textarea name="MS" rows="5px" cols="21px"></textarea></td></tr> <br>
        <tr><td></td><td colspan="2"><input type="submit" value="บันทึกข้อความ"></td></tr>
        <br>
        </table>
    </form>
</body>
</html>