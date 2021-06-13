<?php
session_start();
ob_start(); //Da bi se dozvolio header_location u sredini strane
require_once "config/connection.php";

if (isset($_GET['page']) && ($_GET['page'] == "admin") && (isset($_SESSION['user']) && ($_SESSION['user']->id_role == 1))) {
    require_once 'views/admin/fixed/head.php';
    require_once "views/admin/fixed/sidebar.php";
    switch ($_GET['ap']) {
        case 'home':
            include "views/admin/pages/home.php";
            break;
        case 'posts' :
            if (isset($_GET['ida'])) {
                include "views/admin/pages/single_my_post_admin.php";
                break;
            }else{
                include "views/admin/pages/posts.php";
                break;
            }
        case 'comments' :
            if (isset($_GET['id'])) {
                include "views/admin/pages/single_comment.php";
                break;
            }else{
                include "views/admin/pages/comments.php";
                break;
            }
        case 'users' :
            if (isset($_GET['id'])) {
                include "views/admin/pages/single_user.php";
                break;
            }else{
                include "views/admin/pages/users.php";
                break;
            }
        case 'categories' : 
            if (isset($_GET['id'])) {
                include "views/admin/pages/single_category.php";
                break;
            }else{
                include "views/admin/pages/categories.php";
                break;
            }
        case 'insertUser':
            include "views/admin/pages/insertUser.php";
            break;
        case 'insertCategory':
            include "views/admin/pages/insertCategory.php";
            break;
        case 'insertPost':
            include "views/admin/pages/insertPost.php";
            break;
    }
    require_once 'views/admin/fixed/footer.php';
}
else if (isset($_GET['page'])) {
    require_once 'views/fixed/head.php';
    require_once 'views/fixed/navigation.php';
    $page = $_GET['page'];

    switch ($page) {
        case 'home':
            require_once 'views/pages/home.php';
            break;
        case 'single_news':
            require_once 'views/partials/single_news.php';
            break;
        case 'login':
            require_once 'views/pages/login.php';
            break;
        case 'contact':
            require_once 'views/pages/contact.php';
            break;
        case 'my_posts':
            if (isset($_GET['id'])) {
                include "views/pages/single_my_post.php";
                break;
            }else{
                require_once 'views/pages/my_posts.php';
                break;
            }
        case 'post' :
            if (isset($_GET['id'])) {
                include "views/pages/single_post_news.php";
                break;
            }else{
                require_once 'views/pages/home.php';
                break;
            }
    }
    require_once 'views/fixed/footer.php';
} else {
    require_once 'views/fixed/head.php';
    require_once 'views/fixed/navigation.php';
    require_once 'views/pages/home.php';
    require_once 'views/fixed/footer.php';
}


