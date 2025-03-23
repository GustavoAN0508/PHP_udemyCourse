<?php

$vel = 90;
$limite = 40;

if ($vel<$limite){
    echo "Velocidade do motorista correta";
}
else if ($vel==$limite){
    echo "velocidade limítrofe, reduza.";
}
else if($vel>$limite){
    echo "acima da velocidade estipulada";
}