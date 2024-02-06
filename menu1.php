<!DOCTYPE html>
<html>
<head><title>翔太壽司</title></head>
<body>
    <!--<form method="post" action="menu.php">-->
    <form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
        桌號：<input name="number" type="text" />
        <br />
        類型：
        <br />
        <input type="radio" name="type" value="sushi" />壽司
        <br />
        <input type="radio" name="type" value="sashimi" />生魚片
        <br />
        <input type="submit" value="選擇">
        <br /><br />
    </form>
</body>
</html>
<?php
//echo $_SERVER['PHP_SELF'];
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    echo "第" . $number . "桌<br />";
}
if (isset($_GET['type'])) {
    $type = $_GET['type'];
    if($type == "sushi")
    {
        echo "※黑鮪魚握壽司<br />";
        echo "※炙燒比目魚鰭邊握壽司<br />";
    }
    elseif($type == "sashimi")
    {
        echo "※厚切鮭魚肚<br />";
        echo "※綜合特上刺身特大盛<br />";
    }
}