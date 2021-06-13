<?php
// session_start();
// require_once '../../config/connection.php';
function getAllPostsForUser($userId){

    global $conn;

    try {
        $upit = $conn->prepare("SELECT p.*, c.category as Category,c.icon, pc.*, pc.id_category as PCCat FROM post as p 
        INNER JOIN post_cat as pc 
        ON p.id_post=pc.id_post
        INNER JOIN category as c
        ON pc.id_category=c.id_category
        WHERE id_user = ?");
       
        $upit->execute([$userId]);
       
        // var_dump($upit);
        $posts = $upit->fetchAll();
        

        return $posts;
    } catch (PDOException $e) {
        // logErrors($e->getMessage());
        echo $e->getMessage();
    }

}