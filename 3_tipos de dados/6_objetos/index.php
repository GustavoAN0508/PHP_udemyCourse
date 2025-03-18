<?php

class Pessoa{

    function falar(){
        echo "Olá pessoa";
    }
}

$eu = new Pessoa();
$eu->nome = "gustavo";

echo $eu->nome, "<br>";
$eu->falar();