<?php 
header('Content-Type: applicaton/json');

if(isset($_GET['id'])){
    require_once "../../config/connection.php";
}