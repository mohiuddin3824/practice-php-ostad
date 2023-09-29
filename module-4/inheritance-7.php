<?php

class myClass{
    
    public static $name = "Mohiuddin";
    public static function myName(){

        echo self::$name;
    }
}

$myObj = new myClass();
$myObj->myName();

