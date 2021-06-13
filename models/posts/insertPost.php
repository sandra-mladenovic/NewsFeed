<?php
session_start();
require_once '../../config/connection.php';
header("Content-Type: application/json");

global $conn;

$title = $_POST['title'];
$photo = $_FILES['photo'];
$description = $_POST['description'];
$content = $_POST['content'];
$idUser = $_POST['id_user'];
$catId = $_POST['categories'];

$photoName = $photo['name'];
$photoTmp = $photo['tmp_name'];

$uploadDir = "assets/img/";

$filePath = $uploadDir.$photoName;

$result = move_uploaded_file($photoTmp, "/assets/img/".$photoName);

// if(!$result){
    
//     echo json_encode($photoName);
//     // header("Location: ../../index.php?page=home");
// }else{
    $query = "INSERT INTO post values(null, ?, ?, ?, 0, ?, null, null, ?)";

    $insert = $conn->prepare($query);
    $insert->execute([$title, $description, $content, $photoName, $idUser]);
    if($insert){
        $postId = $conn->lastInsertId();
        $insertCat = "INSERT INTO post_cat values(null, ?, ?)";
        $insertPC = $conn->prepare($insertCat);
        $insertPC->execute([$postId, $catId]);
        if($insertPC){
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }else{
            echo json_encode("neuspesno vezivna");
        }
        
    }else{
        
    }
    
// }

