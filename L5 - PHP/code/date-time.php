<?php
$v1=microtime(1);
echo time().'<br>';
echo date("D, dS M Y h:i s")."<br>";/*
echo date("D, dS M Y h:i s",1543550710+86400)."<br>";
echo date(DATE_ATOM).'<br>';
echo date(DATE_COOKIE).'<br>';
echo date(DATE_ISO8601).'<br>';
echo date(DATE_RSS);
echo date(DATE_W3C);
date_default_timezone_set("Asia/Kolkata");

echo date_default_timezone_get();

$f= date_create("2018-12-12");
echo date_format($f,"Y/m/d");
*/$j=0;
for($i=0;$i<800000;$i++){$j++;}
$v2= microtime(1);
echo "Time Taken = ". number_format(($v2-$v1)*1000,2) ."ms";
?>