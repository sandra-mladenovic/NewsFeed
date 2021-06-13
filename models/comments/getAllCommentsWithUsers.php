<?php

function getAllCommentsWithUsers()
{
    try {
        return executeQuery("SELECT * FROM comment c inner join user u on c.id_user = u.id_user where c.id_post = ".$_GET['id']);
    } catch (PDOException $e) {
        logErrors($e->getMessage());
        echo $e->getMessage();
    }
}