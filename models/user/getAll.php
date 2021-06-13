<?php

function getAllUsers()
{
    try {
        return executeQuery("SELECT * FROM user");
    } catch (PDOException $e) {
        logErrors($e->getMessage());
        echo $e->getMessage();
    }
}