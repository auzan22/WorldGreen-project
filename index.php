<?php
session_start();
$page = isset($_GET['page']) ? $_GET['page'] :"home";
function loadPage($page){
    if ($page === 'home') {
        include 'file_/landingpage.php';

    } else if ($page === 'login') {
        include 'file_/login.php';

    } else if ($page === 'register') {
        include 'file_/register.php';

    } else if ($page === 'productsX') {
        include 'file_/productsX.php';
    }
}

include '_partials/_template/header.php';
loadPage(page: $page);
?>
