<?php

function getOneCategory($id)
{
    try {
        global $conn;

        $upit = "SELECT * FROM category WHERE id_category = ?";
        $getone = $conn->prepare($upit);
        $result = $getone->execute([$id]);
        return $getone->fetch();
    } catch (PDOException $e) {
        logErrors($e->getMessage());
        echo $e->getMessage();
    }
}