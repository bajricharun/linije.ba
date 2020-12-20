<?php
require $paths['database'] . 'query.php';
$conn = connect();
function returnUsableData($departure, $arrival)
{
    $departure = htmlspecialchars(trim($departure));
    $arrival = htmlspecialchars(trim($arrival));
    $stmt1 = prepared_query($GLOBALS['conn'], "SELECT * FROM `lines` WHERE departure=? AND arrival=? ORDER BY departure_time ASC", [$departure, $arrival], "ss");
    $results = $stmt1->get_result();
    return $results;
}