<?php
session_start();
require_once '../../config/connection.php';

global $conn;

try{
    $query = "DELETE FROM comment WHERE id_comment = ?";

$delete = $conn->prepare($query);
$delete->execute([$_GET['id']]);
if($delete){
    include "getAllCommentsWithUsers.php";
    $comments = getAllCommentsWithUsers();
    echo json_encode($comments);
        
}
}catch(Exception $e){
    logErrors($e->getMessage());
}
