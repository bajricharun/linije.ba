<?php
require('./config/routes.php');
require $paths['database'] . 'query.php';
$conn = connect();
$conn->query('SET NAMES utf8');
$id = $_GET['id'];
$sql = "SELECT * FROM `lines` WHERE id='$id'";
$query = $conn->query($sql);
if ($query) {
    $cmsData = $query->fetch_assoc();
} else {
    echo "error";
}
$company = $cmsData['company'];
$stations = $cmsData['stations'];
$regime = $cmsData['regime'];

echo "$stations|$regime|$company";