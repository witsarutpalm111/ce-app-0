<?php

$hostname = "localhost";
$user = "root";
$pass ="";
$dbName ="id11140592_cessrufixshop";
$connect = mysqli_connect($hostname,$user,$pass,$dbName) or die ("ไม่สามารถติดต่อฐานข้อมูลได้ นะจ้ะ");
mysqli_set_charset($connect,"utf8");
?>