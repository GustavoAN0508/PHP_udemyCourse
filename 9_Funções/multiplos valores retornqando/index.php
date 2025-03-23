<?php
function altData($nome,$idade){
    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome,$idade];
}
$dados = altData("Gustavo", 21);

print_r($dados);
echo "<br>";
echo "Olá $dados[0], você tem $dados[1]";