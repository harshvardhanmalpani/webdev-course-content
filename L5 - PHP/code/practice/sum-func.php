<?php
include("../functions.php");
if(function_exists("printnumbersum"))
    echo "yes function is present";
   else echo "no function is not present";
printnumbersum(10,20);
product(10,10);
printnumbersum(11,20);
printnumbersum(14,20);
printnumbersum(10,244);

$v="printnumbersum";
$v(44,44);
if(function_exists("product"))
    echo "yes function is present";
   else echo "no function is not present";

printtable(19);
?>