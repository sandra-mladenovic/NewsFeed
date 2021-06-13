<?php
session_start();
require_once '../../config/connection.php';

global $conn;

$query = "DELETE FROM user WHERE id_user = ?";

$delete = $conn->prepare($query);
$delete->execute([$_GET['id']]);
if($delete){
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
