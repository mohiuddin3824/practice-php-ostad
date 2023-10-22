<?php 
//Practice 
class Human{
    public $name;
    public function __construct($nameValue) {
        $this->name = $nameValue;
    }

    function sayHi(){
        echo "Salam, ";
        $this->sayName();
    }

    function sayName(){
        echo "My name is {$this->name} \n";
    }


}

$obj = new Human("Mohiuddin");

$obj2 = new Human("Salman");
$obj->sayHi();
$obj2->sayHi();