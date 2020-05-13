<?php
$a=array("dell","hp","apple","asus","toshiba","motorola","google");
#$f=array_rand($a,3);
#print_r($f);
if(in_array("google",$a))
{
    echo "yes exists";
}
else echo "nope";
shuffle($a);
print_r($a);
shuffle($a);
print_r($a);
shuffle($a);
print_r($a);
?>