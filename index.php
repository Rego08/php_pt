<?php
require_once 'config.php';

$page = $_GET['page'] ?? 'home';

include 'includes/header.php';

switch($page) {
    case 'kontakt':
        include 'pages/kontakt.php';
        break;
    case 'kalkulaator':
        include 'pages/kalkulaator.php';
        break;
    case 'ostukorv':
        include 'pages/ostukorv.php';
        break;
    default:
        include 'pages/home.php';
}

include 'includes/footer.php';
