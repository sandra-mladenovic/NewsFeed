<?php
session_start();
require_once '../../config/connection.php';
// header("Content-Type: application/json");


global $conn;

$title = $_POST['title'];
$photo = $_FILES['photo'];
$description = $_POST['description'];
$content = $_POST['content'];
$id_post = $_POST['id_post'];

$photoName = $photo['name'];
$photoTmp = $photo['tmp_name'];

$uploadDir = "assets/img/";

$filePath = $uploadDir.$photoName;

// $result = move_uploaded_file($photoTmp, "/assets/img/".$photoName);

// if(!$result){
    
//     echo json_encode($photoName);
//     // header("Location: ../../index.php?page=home");
// }else{
    $query = "UPDATE post set title = ? , description = ? , content = ? where id_post = ?";

    $insert = $conn->prepare($query);
    $insert->execute([$title, $description, $content, $id_post]);
    if($insert){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        
        
    }else{
        echo json_encode("neuspesno vezivna");
    }
    
// }


