<?php

function registerUser($fullName, $email, $password, $role)
{
    global $conn;

    try {
        $insert = $conn->prepare("INSERT INTO user VALUES(null, ?, ?, ?, ?, 0,null)");
        $insert->execute([$fullName, $email, $password, $role]);

        if ($insert) {
            http_response_code(200);
            return true;
        }
    } catch (PDOException $ex) {
        http_response_code(404);
        echo $ex->getMessage();
    }
}

function executeUser($whereString, $value)
{
    global $conn;

    try {

        $tmp = $conn->prepare("SELECT * FROM user WHERE $whereString = ?");
        $tmp->execute([$value]);

        http_response_code(200);
        return $tmp;
    } catch (PDOException $ex) {
        http_response_code(404);
        echo $ex->getMessage();
    }
}