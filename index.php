<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style type="text/css">
        
    </style>
</head>
<body>
    <center><h1>Webboard Easy</h1></center>
    <hr>
    <div>
        หมวดหมู่ : 
        <select name="catagory" id="">
            <option value="All">--ทั้งหมด--</option>
            <option value="General">เรื่องทั่วไป</option>
            <option value="Study">เรื่องเรียน</option>
        </select>
        <?php
            if(!isset($_SESSION['id']))
            {
                echo "<a href=login.php style='float: right;'>เข้าสู่ระบบ</a>";
            }
            else
            {
                echo "<div style='float: right;'>
                ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;&nbsp;&nbsp;
                <a href=logout.php>ออกจากระบบ</a></div>";
            }
        ?>
    </div>
    <div>
        <ul>
        </form>     
        <?php 
            echo "<div style ='float: left'>
            <a href = newpost.php>สร้างกระทู้ใหม่</a>
            </div><BR><BR>";
            for($n = 1 ;$n <=10;$n++){
               echo "<li><a href=post.php?id=$n>กระทู้ที่ $n</a>";
               if(isset($_SESSION['id']) && $_SESSION['role']=='a')
               {
                    echo "&nbsp;&nbsp;&nbsp;<a href=delete.php?id=$n>ลบ</a>";
               }
               echo "</li>";
           }
           
       
       ?>
        </ul>
    </div>
</body>
</html>