<?php

$a = 10;
$b = 5;
function testeEscopo(){
    $a = 4;
    $a++;
    global $b;
    static $c = 0;
    $b++;
    $c++;
    echo "escopo local de a:  $a <br>";
    echo "b global no local: $b <br>";
    echo "static de C: $c <br>";
}

echo "escopo global de a: $a <br>";
testeEscopo();