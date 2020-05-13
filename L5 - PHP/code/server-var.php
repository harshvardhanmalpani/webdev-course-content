<?php
$GLOBALS['x']=9;
$GLOBALS['y']=19;
function abc()
{
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
abc();
echo $GLOBALS['z'];
#print_r($_SERVER);

echo __FILE__ ."<br>";
echo __LINE__ ."<br>";
echo __DIR__ ."<br>";
?>