<?php
session_start();
$departure = $_SESSION['departure'];
$arrival = $_SESSION['arrival'];
session_destroy();
session_start();
$_SESSION['departure'] = $departure;
$_SESSION['arrival'] = $arrival;
ob_start();

require $paths['models'] . 'search.php';
$usableData = returnUsableData($departure, $arrival);

require $paths['screens'] . 'header.php';
require $paths['screens'] . 'results.php';