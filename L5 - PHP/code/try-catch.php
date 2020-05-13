<?php
    function myErrorMessage($e)
    {
        echo  "<b>Error: </B>".$e->getMessage().'<br>Thrown at line - '.$e->getLine()."<br>".'File - '.$e->getFile()."<br>";
    }
set_exception_handler("myErrorMessage");
/*
function positive($n)
{
    if($n>0)
    {
        throw new myException("Value must be negative");
        throw new Exception("Zero can not be positive or negative");
    }
    if($n==0)
        throw new Exception("Zero can not be positive or negative");
    return $n * -1;
}

try{
echo positive("a");
    }
catch(myException $e){
    echo $e->myErrorMessage();
}
catch(Exception $e){
    echo $e->getMessage();
}
finally{

}
*/
throw new Exception("dsfsdfdfsdfve");
echo "happy day here";
?>