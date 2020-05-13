<?php

//Associative Arrays
$person=array("Fname"=>"Harsh",
             "Lname"=>"Malpani",
             "Gender"=>"Male",
"email"=>"i@harshmalpani.in",
             "0"=>"sdadsad",
             "1"=>"dasdsad");
    
$person['email']="abc@xyz.com";
$person['Email']="abc@xyz.com";
print_r($person);
echo count($person);
echo $person["Gender"];
$a="Fname";
echo $person[$a];
#echo "My first name is {$person['Fname']} and My last name is {$person['Lname']}";
echo "My first name is ".$person['Fname']." and my last name is ".$person['Lname'];

foreach($person as $x=>$y)
{
    echo "$x is $y<br>";
}
?>