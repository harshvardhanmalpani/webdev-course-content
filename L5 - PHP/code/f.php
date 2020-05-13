<?php
$a=6;
$c=++$a; // c=7 a=7
$b=$a++; //b=7 a=8
echo $c; # post increment print7
echo $b; # post increment print7
echo ++$a; # pre increment a=9, print9
echo $a--; # post decrement print9 a=8
echo --$a; # pre decrement a=7 print7
echo $c;
echo "<br>";
# a is 7
echo --$a . $a-- . $a++ . ++$a;
# a=6 print6
#print6 a=5
#print5 a=6
#a=7 print 7
echo $a;
?>