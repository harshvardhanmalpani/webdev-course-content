<?php
$a=false;
$r=null;
echo $a.$r;
#var_dump($a);
#var_dump($r);
var_dump($a===$r);

$x="hello ";
$y= "how are you?";
$z=$x.$y;
$x.=$y; //$x = $x . $y
echo $x;
?>