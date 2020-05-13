<?php
$name="harsh♥☻ vardha% * (n'\"";
$email="a^$%&+b  cd@gmail.com♥";
#echo FILTER_VALIDATE_BOOLEAN;
#echo filter_var($name,FILTER_VALIDATE_INT);
#echo filter_var($name,FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW);

function clearit($a)
{
    $b='';
    for($i=0;$i<strlen($a);$i++)
    {
        if(ctype_alpha($a[$i]) || $a[$i]===' ')
        {
            $b.=$a[$i];
        }
    }
    return $b;
}
echo filter_var($name,FILTER_CALLBACK,array("options"=>"clearit"));
?>