<?php

interface Animal{
    public function makeSound();
}

class Cat implements Animal{
    public function makeSound(){
        echo " Mew Mew ";
    }
}

class Dog implements Animal{
    public function makeSound()
    {
        echo " Wof Wof ";
    }
}

class Bird implements Animal{
    public function makeSound()
    {
        echo " kichir michir ";
    }
}

$cat = new Cat();
$dog = new Dog();
$bird = new Bird();

$animals = [$cat, $dog, $bird];

foreach ($animals as $animal) {
    $animal->makeSound();
}

//$obj = new Cat();
//echo $obj->makeSound();