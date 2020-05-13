<?php
echo time()."<br>";
$v1= strtotime("2000-02-14");
$v2=  strtotime("-4 days",$v1);
echo date("D d M hi",$v2);
#echo $v1-$v2;
?>