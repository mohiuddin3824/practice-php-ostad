<?php

class Planet{
    static function echoName(){
        echo static::getName(); //Early binding
        //echo static::getName(); //let binding
    }

    static function getName(){
        return "Planet";
    }
}

class Earth extends Planet{
    static function echoName()
    {
        echo "Earth";
    }
}

Planet::echoName();
//Earth::echoName();