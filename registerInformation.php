<?php
$uname=$_POST["uname"];
$upass=$_POST["upass"];
$uemail=$_POST["uemail"];
$uphone=$_POST["uphone"];

echo "<h1>註冊資訊</h1>";
echo "<b>您的帳號: </b>".$uname." </br>";
echo "<b>您的密碼: </b>".$upass." </br>";
echo "<b>您的Email: </b>".$uemail."</br>";
echo "<b>您的電話: </b>".$uphone."</br>";
?>