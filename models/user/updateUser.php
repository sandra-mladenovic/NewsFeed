<?php
session_start();
require_once '../../config/connection.php';

global $conn;

$fullName = $_POST['updateFullName'];
$email = $_POST['updateEmail'];
$id = $_POST['id_user'];


$query = "UPDATE user set full_name = ? , email = ?  where id_user = ?";

$insert = $conn->prepare($query);
$insert->execute([$fullName, $email, $id]);
if($insert){
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    
    
}else{
    echo json_encode("An error happend!");
}
    
// }


