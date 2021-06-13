<?php
session_start();
require_once '../../config/connection.php';
header("Content-Type: application/json");

global $conn;

try{
    $query = "DELETE FROM post WHERE id_post = ?";

$delete = $conn->prepare($query);
$delete->execute([$_GET['postId']]);

if($delete){
    $upit = $conn->prepare("SELECT p.*, c.category as Category,c.icon, pc.*, pc.id_category as PCCat FROM post as p 
        INNER JOIN post_cat as pc 
        ON p.id_post=pc.id_post
        INNER JOIN category as c
        ON pc.id_category=c.id_category
        WHERE id_user = ?");
       
        $upit->execute([$_GET['userId']]);
        
        $posts = $upit->fetchAll();
        

        echo json_encode($posts);
        
}
}catch(Exception $e){
    logErrors($e->getMessage());
}