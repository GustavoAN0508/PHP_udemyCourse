<?php

$str = "O rato roeu a roupa do rei de roma";
$findOut = strpos($str,"rei");

echo $findOut . "<br>";

$str2 = "roeu";
$findOut2 = strpos($str, $str2);
echo $findOut2 . "<br>";

$str3 = "encontrar agulha no palheiro cheio de agulha";
$findIn = strrpos($str3, "agulha"); //se importa somente com a última ocorrência
echo $findIn . "<br>";

$str4 = "Três pratos de trigo para três tigres tristes";
$trigo = strstr($str4, "trigo");
echo $trigo . "<br>";