<?php
session_start();

if(!isset($_POST['registerBtn'])){
    http_response_code(404);
}else{
    $fullName = $_POST['regFullName'];
    $password = md5($_POST['regPassword']);
    $email = $_POST['regEmail'];
    $role = 2;

    try {

        include "../../config/connection.php";
        include "functions.php";

        $result = executeUser('full_name', $fullName);

        if($result && $result->rowCount() == 1){
            http_response_code(403);
            exit;
        }else{
            $insert = registerUser($fullName, $email, $password, $role);

            if($insert){
                header('Location: ../../index.php?page=admin&ap=users');
            }else{
                echo "Insert couldnt be executed!";
                exit;
            }
        }
        
    }catch(PDOException $ex){
        echo $ex->getMessage();
    }
}
