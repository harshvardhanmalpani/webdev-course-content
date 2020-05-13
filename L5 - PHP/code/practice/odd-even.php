<?php
$x=90;/*
if($x%2) //9%2 = 1
    echo "$x is odd";
else echo "$x is even";
if($x%2==0) //((9%2)==0) = (1==0) = false
    echo "$x is even";
else echo "$x is odd";*/
$odd=0;
if($x%2) $odd=1;
if($odd)echo"$x is odd";
else echo "$x is even";
?>