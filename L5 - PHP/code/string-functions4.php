<?php
$a="hello</b> Ihow <i>are your? I am fine<script>alert()";
echo $a."
";/*
echo $a;
$v=count_chars($a,3);
#echo strlen($v);
#echo str_replace(" ","-",$a);
$v= str_ireplace(array("you","i "),array("Zebra","You "),$a);
#$v= str_replace("You","I",$v);
echo "
<br>$v</br>";
echo str_shuffle("harshvardhan");
$v="harshvardhan malpani";
print_r(str_split($v,3));
echo str_word_count($a);
echo strcasecmp("Hello","hello");*/
echo strip_tags($a);

?>