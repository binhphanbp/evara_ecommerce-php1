<?php
include_once 'controllers/HomeController.php';
$controller = new HomeController();

include_once 'views/shop/header.php';

if(!isset($_GET['page'])) {
    include_once 'views/shop/home.php';
} else {
    $page = $_GET['page'];
    $controller->$page();
}

include_once 'views/shop/footer.php';