<?php
//Array

$fruits= array("Apple","Mango","Orange","banana","Orange","","");
$fruits[]="oo";
#var_dump($fruits);

#echo $fruits;
/*print_r($fruits);
echo $fruits[1];
echo $fruits[0];
echo $fruits[6];
*/
$fruits[0]="Grapes";
print_r($fruits);
#echo "I love $fruits[0]"."<br>I hate ".$fruits[3];
echo count($fruits);
foreach($fruits as $j)
{
    echo "$j <br>";
}
?>