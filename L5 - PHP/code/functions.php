<?php
$age=10;
function _aBCde1()
{
    echo "we are inside abcd";
}
#_abcde1(); //calling the function
function printnumbersum($x=70,$y=10)
{echo "sum is ".($x+$y)."<br>";
 if(!function_exists("product"))
 {
    function product($a,$b)
    {
        echo "product is ".($a*$b)."<br>";
        }
    }
# product(56,0);
}

?>