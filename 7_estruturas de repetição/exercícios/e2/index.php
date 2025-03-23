<?php
$x = 2;

while ($x <= 30){
    $x += 2;
    echo $x, "<br>";
    if ($x === 24){
        break;
    }
}