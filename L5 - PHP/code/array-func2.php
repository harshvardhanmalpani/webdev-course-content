<?php
$a = array("abcs","leo","king","tiger","tiger","tiger","leo");
$b=array("mango","leo","tiger","grapes","banana","apple");
//$c=array_combine($b,$a);

//print_r($c);
#print_r(array_count_values($a));
$c=array(
"av"=>"bbbb","b"=>778,"c"=>"qwerty");
$d=array("av1"=>"bbbb","b"=>778,"c"=>"qwerty");
print_r(array_intersect_assoc($c,$d));

#$a=array_fill(4,10,"x");
#print_r(array_values($c));

print_r(array_flip($c));
?>