<?php

$x = 10;
$y =& $x;

echo $x,"<br>", $y;

$x = 15;

echo "<br>$x","<br>", $y;

$y = 60;

echo "<br>$x","<br>", $y;