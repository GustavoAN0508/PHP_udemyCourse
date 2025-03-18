<?php

$a = (int) "testando";
$b = (int) 12.9;
$c = (int) true;
$d = (int) [1,2,3];

echo is_int($a);
echo is_int($b);
echo is_int($c);
echo is_int($d);