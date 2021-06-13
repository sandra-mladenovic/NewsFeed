<?php

require_once "config.php";

try {
    $conn = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE . ";charset=utf8", USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
function getAllFromTable($table, $conn) {
    $sql = "SELECT * FROM $table;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
   }
   
function executeQuery($query)
{
    global $conn;
    return $conn->query($query)->fetchAll();
}
function executeQueryOneRow($query)
{
    global $conn;
    return $conn->query($query)->fetch();
}


function logErrors($error) { 
    $open = fopen(ERRORS_FILE, "a"); 
    $write = $error . "\t" . date("d.m.Y H:i:s") . "\n"; 
    fwrite($open, $write); 
    fclose($open); }
    

   
