<?php 

header("Content-Type: application/json");
if(isset($_POST['strana'])){

    $strana = $_POST['strana'];
    include '../../config/connection.php';
    
}