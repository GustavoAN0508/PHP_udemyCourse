<?php

function veri($num){
    if ($num % 2 == 0){
        echo "$num é par <br>";
    }
    else if($num %2 != 0){
        echo "$num é impar <br>";
    }
}

veri (1);
veri (2);