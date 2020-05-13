<?php
    $a=array(4,5,6,7);
$b= array("name"=>"Abcd",
         "age"=>50,
         "gender"=>"Male");
echo current($a).'<br>';
echo next($a)."<br>";
echo prev($a)."<br>";
echo current($a)."<br>";
echo end($a)."<br>";
echo current($a)."<br>";
echo next($a)."<br>";
echo prev($a)."<br>";
echo reset($a)."<br>";

print_r(each($a));
?>