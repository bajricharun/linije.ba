<?php
session_start();
require $paths['database'] . 'query.php';
function returnUsableData($departure)
{
    $conn = connect();
    $departure = htmlspecialchars(trim($departure));
    $stmt1 = "SELECT * FROM `lines` WHERE departure='$departure' OR arrival='$departure' OR stations LIKE '%$departure%' ORDER BY departure_time ASC";
    $results = $conn->query($stmt1);
    return $results;
}