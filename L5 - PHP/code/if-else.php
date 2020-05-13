<?php
$a=4;
$b=-16;
$c=-16;
if(($a<$b) and ($a<$c))
{  echo "a is smaller than b and c.";
 }
else if($b<$a and $b<$c)
{
     echo "b is smaller than c and a both";
}
else if($a==$b and $a<$c)
    echo "a is equal to b and a,b are smaller than c";
else if($a==$c and $a<$b)
    echo "a is equal to c and a,c are smaller than b";
else if($b==$c and $b<$a)
    echo "b is equal to c and b,c are smaller than a";
else
{
    echo "c is the smallest";
}

?>