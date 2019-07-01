<?php 
require './../DB_ce-app/User.php';
session_start();
if(isset($_GET['id_receive'])){
    $id_receive = $_GET['id_receive'];
}

$receive = "SELECT Receive_ID FROM `com` WHERE Receive_ID = '$id_receive'";
?>