<?php
/**
 * API for handling words
 *
 * @author Marco Ris <info@risdesign.ch>
 *
 */

//  get variables
$apiKey = $_GET['apiKey'];
$lang = $_GET['lang'];
$category = $_GET['category'];
$version = $_GET['version'];

// if apikey is set and right
if ($apiKey && $apiKey == 'abc') {
    // Set UTF-8
    header("Content-Type: text/html; charset=utf-8");
    
    // Allow external access to the file (Smartphone App)
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST");
    header("Access-Control-Allow-Headers: *");
    if ($category && $category == 'niceWords') {
        if ($lang && $lang == 'de') {
            $json = file_get_contents("nicewords/de.json");
            echo $json;
        } else {
            echo "Nice words";
        }
    }
} else {
    // no permission to access
    echo "<h1>Forbidden</h1>You don't have permission to access on this server.";
}
