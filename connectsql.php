<?php
$servername = "127.0.0.1:8081"; // MySQL 服务器地址
$username = "root"; // MySQL 用户名
$password = ""; // MySQL 密码
$con=mysqli_connect($servername, $username, $password);

if(!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
