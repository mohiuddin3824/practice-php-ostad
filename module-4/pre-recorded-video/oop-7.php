<?php

abstract class ClassOne{
    final function sayHi(){
        echo "Hello three";
    }
}

class ClassTwo extends ClassOne{
    function sayHi(){
        echo "Hello two";
    }
}

$obj = new ClassTwo();
$obj->sayHi();