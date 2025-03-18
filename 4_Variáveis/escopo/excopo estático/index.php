<?php

function teste(){
    $a = 0;
    $a++;
    echo "$a <br>";
}

teste();
teste(); //sempre vai manter o valor
teste();

function testeStatic(){
    static $a=0;
    $a++;
    echo "$a <br>";
}
testeStatic();
testeStatic(); //vai acrescentar o valor
testeStatic(); //vai acrescentar o valor mais ainda