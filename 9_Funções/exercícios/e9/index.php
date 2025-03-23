<?php

function superMarket(){
$itens = ["laticinios","carne","grãos","queijo"];


return implode(",", $itens);
}
echo superMarket();