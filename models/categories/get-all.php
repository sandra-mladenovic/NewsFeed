<?php

function getAllCategories()
{
    try {
        return executeQuery("SELECT * FROM category");
    } catch (PDOException $e) {
        logErrors($e->getMessage());
        echo $e->getMessage();
    }
}