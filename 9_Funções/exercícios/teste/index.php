<?php
function countVowels($str){
    $numStr = array_count_values(str_split($a));
    $vowelCount = 0;
    for($i = 0; $i <= $a; $i++){
        if($a[$i]=="a"&&"e"&&"i"&&"o"&&"u"&&"A"&&"E"&&"I"&&"O"&&"U"){
            $vowelCount++;
        }
    }
return $vowelCount;
}