<?php
$a="





 hello
hi
i am good      ";echo strlen($a);
#"\r\n"
/*
echo strlen($a);
echo $a."<br>

";
$b=str_replace(array("\r\n","\r","\n","\t")," ",$a);
echo $b;
echo strlen($b);*/
$b= trim($a);
echo $b .'-'.strlen($b);
?>