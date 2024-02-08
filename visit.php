<?php 
    include 'lib.php'; //引入lib.php
    $BMI=get_BMI($_POST["weight"],$_POST["length"]);
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
    
    // back to test.php after 5 seconds and please print how many seconds left to back to test.php
    <script>
        var time = 5;
        var timer = setInterval(function(){
            document.clear();
            time--;
            if(time == 0){
                clearInterval(timer);
                window.location = "test.php";
            }
            else{
                document.write("還有"+time+"秒回到主頁");
            }
        },1000);
    </script>          

</body>
</html><!--html程式結束-->