<!DOCTYPE html>
<html>
<head><title>再混阿老師</title></head> <!--網頁標題>-->

<body><!--網頁顯示主體>-->
    <!--<form method="post" action="menu.php">-->
    <form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <!--get/post 為送資料  action為php程式做接收-->
        桌號：<input name="number" type="password" /> <!--name是變數名稱 -->
        <br /> <!--換行-->
        類型：
        <br />
        <input type="radio" name="type" value="sushi" />壽司
        <br />
        <input type="radio" name="type" value="sashimi" />生魚片
        <br />
        <input type="submit" value="選擇">
        <input type="reset" name="reset" value="清除">           
        <br /><br />
    </form>
</body>


</html><!--html程式結束-->





<?php
//echo $_SERVER['PHP_SELF'];
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    echo "第" . $number . "桌 <br />";  // <br />是html的換行但php執行完會雕給html在執行，因此會換行
}
if (isset($_GET['type'])) {
    $type = $_GET['type'];
    if($type == "sushi")
    {
        print("※黑鮪魚握壽司1<br />");
        echo "※黑鮪魚握壽司2<br />";
        echo "※炙燒比目魚鰭邊握壽司<br />";
    }
    else if($type == "sashimi")
    {
        echo "※厚切鮭魚肚<br />";
        echo "※綜合特上刺身特大盛<br />";
    }
}                



?>