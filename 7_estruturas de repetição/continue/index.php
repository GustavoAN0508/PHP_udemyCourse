<?php

$x = 1;
while ($x <= 20){
    $x++;
    if($x % 2 != 0){
        continue; //faz com o código que printe só numeros pares
    }
    echo $x,"<br>";//se colocar o echo antes do if não funciona, duh!
}