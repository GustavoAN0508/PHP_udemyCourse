<?php

$str1 = "iahudhsiadhiahiuhdia";
$str2 = "huehue";

echo strlen($str1) . "<br>";
echo strlen($str2) . "<br>";

$len1 = strlen($str1);
$len2 = strlen($str2);

if($len1 > $len2){
    echo "str1 maior que str2";
}