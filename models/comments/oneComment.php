<?php

function getOneComment($id)
{global $conn;
    try {
        $query = "SELECT * FROM comment WHERE id_comment = ?";
        $insert = $conn->prepare($query);
        $result = $insert->execute([$id]);
        if($insert){
            return $insert->fetch();
        }
    } catch (PDOException $e) {
        logErrors($e->getMessage());
        echo $e->getMessage();
    }
}