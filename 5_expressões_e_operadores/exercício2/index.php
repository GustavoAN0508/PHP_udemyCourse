<?php
$five = "5";
$twelve = 12;
$operation = $five*$twelve;

echo $operation, "<br>";
echo gettype($operation),"<br>";
echo gettype([]),"<br>";
echo gettype(1.2),"<br>";
echo gettype("testando"),"<br>";