<?php

    $arr = [];

    for($i=0; $i<=30; $i++){
    
        array_push($arr,$i);
    }

   //print_r($arr);

   function arraia($a){

    $arr = [];

    for($i=0; $i<count($a); $i++){
    
        if($arr[$i] > 7){
            array_push($arr,$i);
        }
    }
    return $arr;
   }

   $newarr = arraia($a);
echo "<br>"."<br>"."<br>"."<br>";
print_r($newarr);