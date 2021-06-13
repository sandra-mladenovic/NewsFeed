<?php

function getLoggedUsers()
{
    global $conn;

    $tmp = $conn->prepare("SELECT count(*) as num from user where active = 1");
    $tmp->execute();

    if ($tmp) {
        return $tmp->fetch();
    } else {
        return false;
    }
}

function getLog()
{

    $file = file(ABSOLUTE_PATH . "/data/log.txt");

    $yesterday = time() - 84600;
    $my_posts = 0;
    $home = 0;
    $contact = 0;
    $admin = 0;
    $login = 0;
    foreach ($file as $f) {

        $page = explode(" ", $f)[0];
        $date = explode(" ", $f)[1];
        // echo $page . " " . $date . '</br>';

        if ((strpos($page, 'page=my_posts') != false) && (date($date) > date($yesterday))) {

            $my_posts++;
        }

        if ((strpos($page, 'page=home') != false) && (date($date) > date($yesterday))) {

            $home++;
        }

        if ((strpos($page, 'page=contact') != false) && (date($date) > date($yesterday))) {

            $contact++;
        }

        if ((strpos($page, 'page=admin') != false) && (date($date) < date($yesterday))) {

            $admin++;
        }

       
    }

    return ["my_post" => $my_posts, "home" => $home, "contact" => $contact, "admin" => $admin, "login" => $login,
     "total" => $my_posts+$home+$contact+$admin+$login];
}

function getLogTotal()
{

    $file = file(ABSOLUTE_PATH . "/data/log.txt");

    $my_posts = 0;
    $home = 0;
    $contact = 0;
    $admin = 0;
    $login = 0;
    foreach ($file as $f) {

        $page = explode(" ", $f)[0];
        $date = explode(" ", $f)[1];
        // echo $page . " " . $date . '</br>';

        if ((strpos($page, 'page=my_posts') != false)) {

            $my_posts++;
        }

        if ((strpos($page, 'page=home') != false)) {

            $home++;
        }

        if ((strpos($page, 'page=contact') != false)) {

            $contact++;
        }

        if ((strpos($page, 'page=admin') != false)) {

            $admin++;
        }

       
    }

    return ["my_postTotal" => $my_posts, "homeTotal" => $home, "contactTotal" => $contact, "adminTotal" => $admin, "loginTotal" => $login,
     "totalTotal" => $my_posts+$home+$contact+$admin+$login];
}
