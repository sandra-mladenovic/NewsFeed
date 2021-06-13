<?php
session_start();
require_once '../../config/connection.php';
global $conn;

$category = $_POST['category'];
$icon = $_POST['icon'];

$query = "INSERT INTO category values(null, ?, ?, null, null)";
$insert = $conn->prepare($query);
$insert->execute([$category, $icon]);
if($insert){
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}else{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}