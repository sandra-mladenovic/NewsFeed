<?php 

define("postOffset", 6);

function dohvatiZaPaginaciju()
{
    try{
        global $conn;
        $result = $conn->query("SELECT COUNT(*) as broj FROM post")->fetch();

        $broj = $result->broj;

        return ceil($broj / postOffset);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}
function dohvatiZaPaginacijuPoKategoriji($id){
    try{
        global $conn;
        $result=$conn->query("SELECT COUNT(*) as brojPostova FROM post as p
                        INNER JOIN post_cat as pc
                        ON p.id_post = pc.id_post
                        INNER JOIN category as c
                        ON c.id_category = pc.id_category
                        WHERE pc.id_category = ".$id)->fetch();
        $brojPostova = $result->brojPostova;
        return ceil($brojPostova / postOffset);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}
function sviPostoviPoKategoriji($limit, $id){
    try{
        global $conn;
        $select = $conn->query("SELECT p.*, u.full_name FROM post as p
        INNER JOIN user as u
        ON u.id_user=p.id_user
        INNER JOIN post_cat as ps
        ON ps.id_post = p.id_post
        WHERE ps.id_category = :id LIMIT :limit, :postOffset");

        $limit = $limit *postOffset;

        $select -> bindParam(":limit", $limit, PDO::PARAM_INT);
        $select->bindParam(":id", $id);

        $offset = postOffset;
        $select->bindParam(":postOffset", $offset, PDO::PARAM_INT);
        $select->execute();
        return $select->fetchAll();
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}