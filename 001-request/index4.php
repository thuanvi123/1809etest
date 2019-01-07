<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form name="convertdungluong" action="" method="post">
    <P>
        <label>Nhập ngày sinh :</label>
        <input type="text" name="day" value="">
    </P>
    <P>
        <label>Nhập tháng sinh :</label>
        <input type="text" name="month" value="">
    </P>
    <P>
        <label>Nhập năm sinh :</label>
        <input type="text" name="year" value="">
    </P>
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>
<p>Tính xem còn bao nhiêu ngày nữa là đến sinh nhật của người ấy</p>
<?php
/**
 * Chuyển từ gigabyte
 * 1 - thành megabyte
 * 2 - thành byte
 * 3 - thành bit
 */

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';



?>
</body>
</html>