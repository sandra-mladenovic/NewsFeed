<?php
session_start();
require_once '../../config/connection.php';
global $conn;

if(isset($_POST['btnComment'])){
    $comment = $_POST['usercomment'];
    $idUser = $_POST['id_user'];
    $idPost = $_POST['id_post'];
    $dateNow = date("Y-M-D h:i:s");


    $query = "INSERT INTO comment values(null, ?, ?, ?, ?)";
    $insert = $conn->prepare($query);
    $insert->execute([$idUser, $idPost, $comment, $dateNow]);
    if($insert){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    }else{
        echo"error";
    }