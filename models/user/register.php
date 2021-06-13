<?php
session_start();

if(!isset($_POST['registerBtn'])){
    http_response_code(404);
}else{
    $fullName = $_POST['regFullName'];
    $password = md5($_POST['regPassword']);
    $email = $_POST['regEmail'];
    $confirmPass = $_POST['regConfirmPassword'];
    $role = 2;

    $errors = [];
    $reName = '/^[A-Z][a-z]{2,15}\s[A-Z][a-z]{2,15}$/'; 
    $rePassword = '/^[a-z0-9]{8,}$/';

    if ($fullName) { 
        if (!preg_match($reName, $fullName)){
          array_push($errors, 'Full name is not in correct format!'); 
        } 
    } else { 
        array_push($errors, 'Full name field cannot be empty!'); 
    }
    

    if ($email) { 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){ 
            array_push($errors, 'Email is not in correct format!');
        } 
    } else { 
        array_push($errors, 'Email field cannot be empty!'); 
    }
    


    if ($password) {
         if (!preg_match($rePassword, $password)) { 
             array_push($errors, 'Password must contain at least 8 characters!');
        } 
    } else { 
        array_push($errors, 'Password field cannot be empty!'); 
    } if ($confirmPass !== $password) {
         array_push($errors, "Passwords are not matching!");
        
    }

    if (count($errors) > 0) { 
        $data = $errors;
         $code = 422;
         header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {

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
                $userid = $conn->lastInsertId();
                $query = executeUser('id_user',$userid);

                if($query){
                    $user = $query->fetch();
                    $_SESSION['user'] = $user;

                    header("Location: ../../index.php");
                }
            }else{
                echo "Query couldnt be executed!";
                exit;
            }
        }
    }catch(PDOException $ex){
        logErrors($e->getMessage());
        echo $ex->getMessage();
    }
}
}