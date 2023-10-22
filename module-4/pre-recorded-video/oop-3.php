<?php

class Human{
    public $name;
    public $age;

    function __construct($nameValue, $age = 0){
        $this->name = $nameValue;
        $this->age = $age;
        
    }
    function sayHi(){
        
        echo "Salam \n";
        $this->sayName();
    }

    function sayName(){
        if ($this->age) {
            echo "My name is {$this->name}, and I am {$this->age} Year/s old \n";
        }else{
            echo "My name is {$this->name}, and I do not know how old i am! \n";
        }
    }
}

$human = new Human("Mohiuddin", 28);
$human2 = new Human("Ariba", 1);
$human3 = new Human("Salma");
$human->sayHi();
$human2->sayHi();
$human3->sayHi();