<?php

function getAllComments()
{
    try {
        return executeQuery("SELECT * FROM comment");
    } catch (PDOException $e) {
        logErrors($e->getMessage());
        echo $e->getMessage();
    }
}