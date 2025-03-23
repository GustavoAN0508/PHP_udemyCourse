<?php

$x = -1;
$arr = [10,20,30,40,50,60,70,80,90,100];

 while($x < 9){
    $x++;
    if($x === 2 || $x === 3){
    continue;
    } 
    echo $arr[$x],"<br>";
    
 }