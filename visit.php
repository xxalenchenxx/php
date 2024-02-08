<?php $BMI=$_POST["weight"]/($_POST["length"]*$_POST["length"]);
    $BMI=round($BMI,2);
    $str;
    switch($BMI)
        {
            case $BMI<18.5:
                $str= "體重過輕 :( ";
                break;
            case $BMI>=18.5 && $BMI<24:
                $str= "正常範圍 ";
                break;
            case $BMI>=24 && $BMI<27:
                $str= "過重:( ";
                break;
            case $BMI>=27 && $BMI<30:
                $str= "輕度肥胖:( ";
                break;
            case $BMI>=30 && $BMI<35:
                $str= "中度肥胖:(:( ";
                break;
            case $BMI>=35:
                $str= "重度肥胖:(:(:( ";
                break;
        }
    ?>


<!DOCTYPE html>
<html>
<head><title>答案</title></head> <!--網頁標題>-->

<body><!--網頁顯示主體>-->
    <!--<form method="post" action="menu.php">-->
    Your BMI is: <?php echo $BMI."<br /> 狀態:  ".$str;
    ?>
    <br/>
    <a href="test.php">回上一頁</a>         
</body>
</html><!--html程式結束-->