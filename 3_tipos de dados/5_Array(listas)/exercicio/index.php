<?php

$carro = ["carburadô" => "mcwillians", 
"motor" => "vrum vrum", 
"rodas" => "mcqueen"];

print_r($carro);
$marca = $carro["carburadô"];
$som = $carro["motor"];
echo "<br>A MARCA É $marca E O SOM QUE FAZ É $som";