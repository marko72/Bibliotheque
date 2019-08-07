<?php
session_start();
include "modules/database/connection.php";
include "views/head.php";
include "views/header-navigation.php";
if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch ($page){
        case $page==""||$page=="home":
            include "views/slider.php";
            include "views/new-books.php";
            include "views/hightlight-books.php";
            break;
        case  $page == "login":
            include "views/login.php";
            break;
    }
}else{
    include "views/slider.php";
    include "views/new-books.php";
    include "views/hightlight-books.php";
}
include "views/footer.php";
