<?php

$teste = "wasd";
echo $teste,"<br>";

if(5>2){
    $teste = "dsaw";
    echo $teste,"<br>";
}

function testandoGlobal(){
    global $teste;
    $teste = 50
;
    echo $teste, "<br>";
}
testandoGlobal();

echo $teste; //o valor pode mudar caso a função tenha o valor global