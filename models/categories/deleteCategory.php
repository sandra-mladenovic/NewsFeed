<?php
session_start();
require_once '../../config/connection.php';

try{
global $conn;

$query = "DELETE FROM category WHERE id_category = ?";

$delete = $conn->prepare($query);
$delete->execute([$_GET['id']]);
if($delete){
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
}
catch(Exception $e){
    logErrors($e->getMessage());
    echo $e->getMessage();
}
