<?php
function connect()
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $host = '127.0.0.1';
        $user = 'root';
        $pass = 'harun123';
        $db = 'linijeBa';
        $charset = 'utf-8';
        $conn = new mysqli($host, $user, $pass, $db);
        $conn->set_charset($charset);
    } catch (\mysqli_sql_exception $e) {
        throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
    } finally {
        unset($host, $db, $user, $pass, $charset);
    }
    return $conn;
}
function prepared_query($mysqli, $sql, $params, $types = "")
{
    $types = $types ?: str_repeat("s", count($params));
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    return $stmt;
}

/*
*$stmt = prepared_query($mysqli, "SELECT * FROM user WHERE id=?", [$id]);
$user = $stmt->get_result()->fetch_assoc();
*/