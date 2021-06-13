<?php 

header('Content-Type: applicaton/json');

require_once "../../config/connection.php";
require_once "get-all.php";

try{
    $n = getAllNewsDetails();
    echo json_encode($n);
    http_response_code(204);
}
catch(PDOException $e){
    echo json_encode(['error'=>'Baza vraca:' .$e->getMessage()]);
    // upisGresakaUFajl($e->getMessage());
    http_response_code(500);
}