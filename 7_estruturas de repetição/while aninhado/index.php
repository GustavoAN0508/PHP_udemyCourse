<?php

$x = 1;

//pricipal
while ($x <= 10){
    $y = $x;
    echo "teste $x<br>";
    $x++;
    //secundário
    while ($y > 0){
        $y--;
        echo $y," - ";
    }
}