<?php

//Object method in php

//Use variable in class and make object
class mwt{
    public $name = "MicroWeb Technology LTD";
}

$obj =new mwt();
echo $obj->name;

echo "\n";

//Use function in class method and make object
class mwt2{
    public function addTwo($num1, $num2){
        echo $num1+$num2;
    }
}

$obj2 =new mwt2();
$obj2->addTwo(5,10);

echo "\n";

// How to use class property in same class's
class mwt3{
    public $names = "MicroWeb Technology LTD";
    public function myDemo(){
        echo $this->names;
    }
}

$obj3 = new mwt3();
$obj3->myDemo();