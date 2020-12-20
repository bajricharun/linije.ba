<?php
session_start();
require $paths['models'] . 'search.php';
$departure = $_POST['departure'];
$arrival = $_POST['arrival'];

if (isset($departure) and isset($arrival)) {
    $_SESSION['departure'] = $departure;
    $_SESSION['arrival'] = $arrival;
    header("Location: /rezultati");
}

require $paths['screens'] . 'header.php';
require $paths['screens'] . "search.php";