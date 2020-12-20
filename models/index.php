<?php

function getLocation()
{
    $ip = $_SERVER['REMOTE_ADDR'];
    $json = file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $ip);
    $json = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $ip));
    return $json;
}