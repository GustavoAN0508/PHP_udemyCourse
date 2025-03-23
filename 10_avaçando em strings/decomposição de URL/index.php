<?php

$url = "https://www.google.com.br";
$arrayUrl = parse_url($url);

print_r($arrayUrl);
echo "<br>";

echo $arrayUrl["host"] . "<br>";

$url2 = "https://www.youtube.com/watch?v=vwdurchi8Kc";
$arrayUrl2 = parse_url($url2);

print_r($arrayUrl2) . "<br>";