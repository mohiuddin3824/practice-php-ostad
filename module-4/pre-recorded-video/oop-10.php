<?php

interface BaseAnimal{
    
    function isAlive();
    function canEat($param1, $param2);
    function Breed();
}

class Animal implements BaseAnimal{
    function isAlive(){

    }

    function canEat($param1, $param2){

    }

    function Breed(){
        
    }

}

interface BaseHuman extends BaseAnimal{
    function canTalk();
}

class Human implements BaseHuman{
    function isAlive(){
        
    }

    function canEat($param1, $param2){

    }

    function Breed(){
        
    }

    function canTalk(){

    }
}

$human = new Human();

echo $human instanceof BaseAnimal;