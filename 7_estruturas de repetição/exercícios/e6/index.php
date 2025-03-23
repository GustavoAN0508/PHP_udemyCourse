<?php
$lista = [];
for($i=9; $i<20;$i++){
    array_push($lista, $i+1);
}
for($j=0;$j<=10;$j++){
    if($lista[$j]%2 == 0){
        echo $lista[$j],"<br>";
    }
}