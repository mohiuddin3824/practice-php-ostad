<?php

use myClass as GlobalMyClass;

abstract class OurClass{
    function SayHi(){
        echo "Hello";

    }

    abstract function eat();
    
}

class myClass extends OurClass{
    function SayHi(){
        echo "Hello one";

    }
    function eat(){
        echo " i will ead";
    }
}

$mc = new myClass();
$mc->SayHi();
$mc->eat();