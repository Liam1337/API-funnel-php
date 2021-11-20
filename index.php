<?php
error_reporting(E_ERROR | E_PARSE);

    include 'api_keys.php';

    $key = $_GET['apiKey'];
    if (empty($key)) {
       echo "{\"error\":\"yes\",\"data\":\"API-Key was not given!\"}";
        exit;
    }
    if (!in_array($key, $Keys)) {
         echo "{\"error\":\"yes\",\"data\":\"API-Key is not valid!\"}";
        exit;
    }
    $host = $_GET['host'];
    if (empty($host)) {
        echo "{\"error\":\"yes\",\"data\":\"Missing Host\"}";
        exit;
    }
    if (!in_array($key, $bannedKeys)) {
    echo "{\"error\":\"yes\",\"data\":\"Your API-Key is banned! Please contact the support\"}";
    exit;
     }
     
    $url = "http://ip-api.com/json/".$host; // Change the URL to use your API
    $response = file_get_contents($url);
    echo $response;
?>