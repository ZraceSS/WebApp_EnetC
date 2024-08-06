<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Webboard Easy</h1></center>
    <hr>
    <div align = "center">
        <?php
            $num = $_GET['id'];
            echo "ต้องการดูกระทู้หมายเลข ". $num."<BR>";
            if ($num % 2 == 0)
            {
                echo "เป็นกระทู้หมายเลขคู่";
            }
            else
            {
                echo "เป็นกระทู้หมายเลขคี่";
            }
        ?>
        <table style="border: 2px solid black; width: 40%;">
                <tr><td colspan="2" align="center" style="background-color: #6CD2FE;">แสดงความคิดเห็น</td></tr>
                <tr><td colspan="2" align="center"><textarea name="comment"></textarea></td></tr>
                <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
        </table>
        <br>
        <a href="index.php">กลับไปหน้าหลัก</a>
    </div>
</body>
</html>