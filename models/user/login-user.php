<?php 

    function dohvatiKorisnika($email, $sifrovanaLozinka){
        global $conn;

        $upit = "SELECT * FROM user u JOIN role r ON u.id_role=r.id_role WHERE u.email = :email AND u.password = :lozinka";

        $priprema = $conn->prepare($upit);
        $priprema->bindParam(':email', $email);
        $priprema->bindParam(':lozinka', $sifrovanaLozinka);
        $priprema->execute();

        $rezultat = $priprema->fetch();
        return $rezultat;

    }

    function dohvatiSve($nazivTabele){
        global $conn;

        $upit = "SELECT * FROM $nazivTabele";
        $podaci = $conn->query($upit)->fetchAll();
        
        return $podaci;
    }
?>