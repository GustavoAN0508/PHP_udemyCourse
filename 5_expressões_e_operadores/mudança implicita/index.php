<?php

echo 5/2;
echo "<br>";

if(is_float(5/2)){
    echo "é float <br>";

}

echo 2 . 3,"<br>"; //isso não é float, é concatenação

if(is_string(2 . 3)){
    echo "é string <br>";

}

$nome = "matheus";
$sobrenome = "battisti";
$nomeCompleto = $nome ." ". $sobrenome; //uma forma de concatenar strings

echo $nomeCompleto, "<br>";