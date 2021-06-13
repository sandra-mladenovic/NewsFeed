<?php
session_start();
require_once '../../config/connection.php';

global $conn;

try{
    $query = "DELETE FROM post WHERE id_post = ?";

$delete = $conn->prepare($query);
$delete->execute([$_GET['id']]);
if($delete){
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
}catch(Exception $e){
    logErrors($e->getMessage());
}
