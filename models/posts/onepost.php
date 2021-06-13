<?php

function getOnePost($id)
{
    try {
        global $conn;

        $upit = "SELECT * FROM post WHERE id_post = ?";
        $getone = $conn->prepare($upit);
        $result = $getone->execute([$id]);
        return $getone->fetch();
    } catch (PDOException $e) {
        logErrors($e->getMessage());
        echo $e->getMessage();
    }
}