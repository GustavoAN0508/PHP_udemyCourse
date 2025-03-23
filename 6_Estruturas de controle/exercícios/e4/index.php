<?php
    
    $noNum1 = "a";
    $Num1 = 60;
    $noNum2 = "b";
    $Num2 = 101;    
    if (is_int($noNum1) || is_float($noNum1)){
        $noNum1 *=2;
        if($noNum1 >100){
            echo "é um número maior que 100<br>";
        }
 
    }
    if (is_int($Num1) || is_float($Num1)){
        $Num1 *=2;
        if($Num1 >100){
            echo "é um número maior que 100<br>";
        }
 
    }
    if (is_int($noNum2) || is_float($noNum2)){
        $noNum2 *=2;
        if($noNum2 >100){
            echo "é um número maior que 100<br>";
        }
 
    }
    if (is_int($Num2) || is_float($Num2)){
        $Num2 *=2;
        if($Num2 >100){
            echo "é um número maior que 100<br>    ";
        }
 
    }