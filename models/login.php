<?php
    session_start();
    if(isset($_POST['btnLogin'])){
        include "../config/connection.php";
        include "../models/user/login-user.php";

        try{
            $email = $_POST['tbEmail'];
            $password = $_POST['tbPassword'];
            $errors = [];
            $rePassword = '/^[a-z0-9]{8,}$/';
            // provera
            if ($email) {
                 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      array_push($errors, 'Email is not valid!'); 
                 }
            } else { 
                array_push($errors, 'Email field cannot be empty!'); 
            } if ($password) { 
                if (!preg_match($rePassword, $password)) { 
                    array_push($errors, 'Incorrect password!'); 
                } 
            } else {
                array_push($errors, 'Password field cannot be empty!'); 
            }

            if (count($errors) > 0) {
                 $_SESSION['errors'] = $errors; 
                 header("Location: ../index.php?page=login");
            } else {
            $mdPass = md5($password);
            $rezLogovanja = dohvatiKorisnika($email, $mdPass);

            // var_dump($rezLogovanja);
            if($rezLogovanja){
                $_SESSION['user'] = $rezLogovanja;

                if($rezLogovanja->naziv == "admin"){
                    header("Location: ../index.php?page=admin");
                }
                else{
                    header("Location: ../index.php?page=home");
                }
            }
            }
        }
        catch(PDOException $exception){
            http_response_code(500);
        }
        
    }
    else{
        header('Location: ../index.php');
    }
?>