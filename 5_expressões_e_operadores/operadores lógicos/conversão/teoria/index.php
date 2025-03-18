<?php

$a = (int) 12;

echo $a, "<br>";
echo $a + 10, "<br>";

if($a === 12){
    echo "foi convertido","<br>";
}

$b = (float) "1.1";

if( $b === 1.1){
    echo "também foi convertido";
}