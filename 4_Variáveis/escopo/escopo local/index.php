<?php
//escopo local é dentro do php

$x = 10;
echo "global $x <br>";
function teste(){
    $x = 5;
    echo "$x <br>";

}
teste();

echo "$x global";
//local não é alterado por global