<?php

//This is called class method
class Human{
    public $name;
    function sayHi(){
        echo "Salam \n";
        $this->sayName();
    }

    function sayName(){
        echo "My name is {$this->name} \n";
    }
}

$human = new Human(); // This is called object
$human2 = new Human();

$human->name = "Mohiuddin"; //set method

$human2->name = "Ariba"; //set method

$human->sayHi();

$human2->sayHi();

// By one class you can call several objects
