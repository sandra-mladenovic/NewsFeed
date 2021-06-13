<?php

function getAllNewsDetails()
{
    try {
        return executeQuery("SELECT p.*, c.category as Category,c.icon, pc.* FROM post as p 
                            INNER JOIN post_cat as pc 
                            ON p.id_post=pc.id_post
                            INNER JOIN category as c
                            ON pc.id_category=c.id_category");
    } catch (PDOException $e) {
        // logErrors($e->getMessage());
        echo $e->getMessage();
    }
}


// function getLatestNews()
// {
//     try {
//         return executeQuery("SELECT TOP 1, p.* FROM post as p 
//                             INNER JOIN post_cat as pc 
//                             ON p.id_post=pc.id_post
//                             ORDER BY created_at DESC");
//     } catch (PDOException $e) {
//         logErrors($e->getMessage());
//         echo $e->getMessage();
//     }
// }

// function getAllPostsFromOneCategory($id){
//     try{
//         return executeQuery("SELECT p.*, u.full_name FROM post as p
//                             INNER JOIN user as u
//                             ON u.id_user=p.id_user
//                             INNER JOIN post_cat as ps
//                             ON ps.id_post = p.id_post
//                             WHERE ps.id_category ='".$id."'");
//     }
//     catch(PDOException $e){
//         logErrors($e->getMessage());
//         echo $e->getMessage();
//     }
// }