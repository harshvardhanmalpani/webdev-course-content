<?php
include("classes.php");
/*
$shubham = new student("SHUBHAM");
#$a->set_name("Aman ABC");
#$shubham->set_name("Shubham");

#echo $a->height;
echo $shubham->getxx();*/

class exstudent extends student{
    function __construct($name){
        parent::set_name($name);
    }
    function set_name($a){
        $this->name=$a;
        echo "inherited but overloaded function<br>";
    }

        function setgive_height($v)
        {
            $this->height=$v;
            return $this->height;
        }
        function setgive_address($v)
        {
            $this->address=$v;
            
        }  
    function get_address()
    {
        return $this->address."<br>";
    }
}
$a = new exstudent("AMAN");
#echo $a->givemename();
$a->setgive_height("5 feet");
$a->setgive_address("5/6 sector, noida");
echo $a->get_address();
echo "parent function:".$a->output_address();
$a->setget_address("5/d sector, noida");
echo $a->get_address();
echo "parent function:".$a->output_address();
print_r($a);

?>