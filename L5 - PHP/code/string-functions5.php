<?php
$a="today is a gooD day ANd i am having fun!!!";
#echo $a[0];
$word="gOod";
$i=stripos($a,$word);
/*if($i===false)
    echo "not found";
else echo "found at $i";
echo stristr($a,$word);
echo strtoupper($a);
echo ucfirst($a);
echo ucwords(strtolower($a));*/
echo substr($a,4)."<br>";
echo substr($a,0)."<br>";
echo substr($a,-2)."<br>";
echo substr($a,-2,5)."<br>";
echo substr($a,2,5)."<br>";
echo substr($a,2,-5)."<br>";
echo substr($a,0,-1)."<br>";
?>