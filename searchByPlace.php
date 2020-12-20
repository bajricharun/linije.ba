<?php
require './config/routes.php';
require $paths['models'] . 'SBP.php';
$dep = $_POST['place'];
$_SESSION['departure'] = $dep;
$usableData = returnUsableData($dep);
require $paths['screens'] . 'header.php';
require $paths['screens'] . 'results.php';