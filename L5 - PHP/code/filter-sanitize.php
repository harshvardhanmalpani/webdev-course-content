<?php
$v=99;
$name="har4$45..c ♥vardhan";
    $v=-80;
    $c=+50;
    $cc="-50v☻'\"";
    echo filter_var($name,FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES|FILTER_FLAG_STRIP_HIGH);
    exit;
    echo filter_var($name,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
function ab($f){
    $b='';
    for($i=0;$i<strlen($f);$i++)
    {$a=$f[$i];
    if(ctype_alpha($a) || $a===" ") $b.=$a;
    }
    return $b;}
echo filter_var($name,FILTER_CALLBACK,array('options'=>'ab'));
?>