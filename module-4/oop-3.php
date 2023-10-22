<?php

Interface Mamal{
    public function makeSound();

    public function sleep();
}

abstract class Animal implements Mamal{
    public function makeSound(){

    }

    public function sleep(){

    }
}

class Dog extends Animal{
    public function makeSound(){
        echo "meo meo";
    }

    public function sleep(){

    }
}

$puppy = new Dog();
echo $puppy->makeSound();