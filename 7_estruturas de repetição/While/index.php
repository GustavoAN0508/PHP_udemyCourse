<?php
//definição do contador
$x = 10;

//início do código/definição de estrutura
while ($x>0){
    //corpo do loop
    $x--; //incremento
    echo $x,"<br>";
}

echo "código <br><br>";

$y = 10;

while ($y>0){
    $y--;
    if($y%2 != 0){
        echo $y, "<br>";
    }
}
echo "número impares";