<?php 

$idade = 21;

echo "eu tenho $idade anos\n"; //primeiro valor de escape (só funciiona se tiver um header)
echo "eu tenho {$idade} anos";  //ambos os casos fazem a mesma coisa, interpolação