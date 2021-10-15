<?php

#$url = "https://www.instagram.com/synapsetechsoci/?__a=1";
#$url = "https://www.instagram.com/synapsetechsoci/channel/?__a=1";
$url = "https://www.instagram.com/synapsetechsoci/feed/?__a=1";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
#curl_setopt($curl, CURLOPT_VERBOSE, true);
$response = curl_exec($curl);

$json = json_decode($response, true);

$decoded = json_encode($json, JSON_PRETTY_PRINT);

echo $decoded;
