<?php
session_start();
header("Content-Type: application/json");

    try {
        
        $query = "SELECT p.*, c.category as Category,c.icon, pc.* FROM post as p 
        INNER JOIN post_cat as pc 
        ON p.id_post=pc.id_post
        INNER JOIN category as c
        ON pc.id_category=c.id_category
        WHERE id_user = ". $_SESSION['user']->id_user;

        include "../../config/connection.php";

        if(isset($_GET['searchValue'])){
            $query .= " AND ( p.title LIKE '%" . $_GET['searchValue'] . "%' OR p.description LIKE '%" . $_GET['searchValue'] . "%' )";
        }

        if(isset($_GET['catValue'])){
            $query .= " AND  c.category = '". $_GET['catValue'] ."'";
        }
        // echo json_encode($query);
        if(isset($_GET['sortValue'])){
            if($_GET['sortValue'] == 0){
                $query .= " ORDER BY p.created_at Desc  ";
            }else if($_GET['sortValue'] == 1){
                $query .= " ORDER BY p.created_at ASC ";
            }else if($_GET['sortValue'] == 2){
                $query .= " ORDER BY p.view Desc ";
            }
        }
        // echo json_encode($query);
        echo json_encode(executeQuery($query));
    } catch (PDOException $e) {
        // logErrors($e->getMessage());
        echo json_encode($e->getMessage());
    }
