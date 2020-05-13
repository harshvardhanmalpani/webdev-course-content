<?php
#print first n number and their sum
$n=10;$sum=0;
for($i=1;$i<=$n;$i++)
{
    $sum=$sum+$i;
    echo $i.'-';
    #echo "sum is $sum <br>";
}
#$sum=($n*($n+1))/2;
echo "sum is $sum";
// n*(n+1) /2
?>