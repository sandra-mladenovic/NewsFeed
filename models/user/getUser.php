<?php

function getUser($id)
{
    try {
        global $conn;

        $upit = "SELECT * FROM user WHERE id_user = ?";
        $getone = $conn->prepare($upit);
        $result = $getone->execute([$id]);
        return $getone->fetch();
    } catch (PDOException $e) {
        // logErrors($e->getMessage());
        echo $e->getMessage();
    }
}