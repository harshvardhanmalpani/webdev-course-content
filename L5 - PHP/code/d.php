<?php
$a=false;
echo getType($a).'<br>';
$a=0;
echo getType($a).'<br>';
$a=intval("werewr1");
echo $a;
echo getType($a).'<br>';
$a='w';
echo getType($a).'<br>';
$a="adas asd a";
echo getType($a).'<br>';
$a=1200;
echo $a;
echo getType($a).'<br>';
$a=1.2e3; //1.2 x e3
// 10^3 = 10x10x10 = 1000
echo intval($a);
echo getType($a).'<br>';
?>