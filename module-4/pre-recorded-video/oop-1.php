<?php

class Human{
    public $name;
    function sayHi(){
        echo "Salam \n";
    }
}

class Cat{
    function sayHi(){
        echo "Meow Meow \n";
    }
}

class Dog{
    function sayHi(){
        echo "Wof Wof \n";
    }
}

$hu = new Human();
$hu->sayHi();
$hu->name = "mohiuddin"; // set method
echo $hu->name; // get method

//$ca = new Cat();
//$do = new Dog();

//$ca->sayHi();
//$do->sayHi();