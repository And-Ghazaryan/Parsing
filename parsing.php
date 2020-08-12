<?php

$url = 'https://www.php.net/';

//$site = file_get_contents($url);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
$site = curl_exec($curl);
//echo $site;

var_dump($site);