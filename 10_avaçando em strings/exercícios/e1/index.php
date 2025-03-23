<?php

$sales = [
    "carro" => 10000,
    "casa" => 80000,
    "pote" => 5,
    "caneca" => 2,
    "revista" => 15];
function vendas($sales){
    $itensCaros = [];

    foreach ($sales as $itens => $preço){
        if($preço > 10){
            array_push($itensCaros, $itens);
        }
    }
    return $itensCaros;
    }

$arr = vendas($sales);

print_r($arr);