<?php

$hostname = "localhost";
$user = "root";
$pass ="";
$dbName ="ce-app";
$connect = mysqli_connect($hostname,$user,$pass,$dbName) or die ("ไม่สามารถติดต่อฐานข้อมูลได้ นะจ้ะ");
mysqli_set_charset($connect,"utf8");
?>