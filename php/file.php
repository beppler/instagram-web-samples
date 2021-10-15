<?php

#$url = "https://www.instagram.com/synapsetechsoci/?__a=1";
#$url = "https://www.instagram.com/synapsetechsoci/channel/?__a=1";
$url = "https://www.instagram.com/synapsetechsoci/feed/?__a=1";

$response = file_get_contents($url);

$json = json_decode($response, true);

$decoded = json_encode($json, JSON_PRETTY_PRINT);

echo $decoded;
