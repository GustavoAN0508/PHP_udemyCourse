<?php

$x = 9;
$lista = [10, 9.2, "huehue", true, "hoof hooof", 89, "huf", 890.299, 10, false];

while ($x>0){
    $x--;
    if(is_string($lista[$x])){
        echo $lista[$x],"<br>";
    }
}