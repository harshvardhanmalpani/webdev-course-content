<?php
    class student{
        var $name;
        public $marks;
        protected $height;
        private $address="i am blank";
        function set_name($new)
        {
            $this->name=$new;
            echo "value set to $new";
        }
        private function get_name()
        {
            return $this->name;
        }
        function getxx()
        {
            return $this->get_name();
        }
        
        function setget_address($v)
        {
            $this->address=$v;
           
        }
        function output_address()
        {
             return $this->address.'<br>';
        }
        function __construct($a="")
        {
            $this->set_name($a);
            #echo "Constructor was called<br>";
            $this->address="sdsd";
            $this->height="sdsd";
        }
    }
/*
$a = new student("AMAN");
$shubham = new student("SHUBHAM");
#$a->set_name("Aman ABC");
#$shubham->set_name("Shubham");

#echo $a->height;
echo $shubham->getxx();
*/
?>