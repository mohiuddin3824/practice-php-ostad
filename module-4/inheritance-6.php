<?php

class myClass{
    public static function myName(){

        echo "My name is Mohiuddin \n";
    }
}

//$myObj = new myClass();
//$myObj->myName();

//Hot connection
myClass::myName();