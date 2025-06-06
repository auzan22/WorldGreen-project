<?php
session_start();

$page = isset($_GET['page']) ? $_GET['page'] : "home";

function loadPage($page) {
    if ($page === 'home') {
        include 'file_/home.php';
    } else if ($page === 'simulation') {
        include 'file_/simulation.php';
        echo "<p>Page not found.</p>";
    }
}

// Move this line *before* calling `loadPage()`
include '_partials/_template/header.php';

// Call the function correctly
loadPage($page);
?>
