<?php
for($i=0;$i<10;$i++)
{
    echo "$i <br>";
    if($i==4)
    {
        echo "exiting now";
        exit ("exit worked");
    }if($i==8)
    {
        die("exiting now from die");
    }
    
}
?>