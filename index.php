<?php
// easy routing system
$request = $_SERVER['REQUEST_URI'];
$urlRes = '/rezultati';
require('./config/routes.php');
switch ($request) {
    case '/':
        require __DIR__ . '/controllers/index.php';
        break;
    case '':
        require __DIR__ . '/controllers/index.php';
        break;
    case '/pretrazi':
        require __DIR__ . '/controllers/search.php';
        break;
    case '/rezultati':
        require __DIR__ . '/controllers/results.php';
        break;
    case '/kontakt':
        require __DIR__ . '/controllers/contact.php';
        break;
    case '/prava':
        require __DIR__ . '/controllers/terms.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/controllers/404.php';
        break;
}