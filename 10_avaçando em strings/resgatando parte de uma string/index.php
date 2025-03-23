<?php

$str = "O rato roeu a roupa do rei de roma";
$corta = substr($str, 5, 8); //ele vai contar 8 charateres a partir do 5
echo $str . "<br>";
echo $corta . "<br>";

$corteContínuo = substr ($str, 7);
echo $corteContínuo;