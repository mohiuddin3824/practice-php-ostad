<?php

class MathCalculator{
    //private $number; // in static method we can not use $this->.... method
    static $number;
    
    public static function fibonacchi($numbers){
        
        self::$number = $numbers;
        for ($i=0; $i <= $numbers; $i++) { 
            echo $i . "\n";
        }
    }

    public static function doSomething($some){
        echo $some;
    }

    public function factorial($some){
        self::doSomething($some);
        //$this->doSomething(); it can be used
    }
}

$math = new MathCalculator();

//$math->fibonacchi(9);

MathCalculator::fibonacchi(50);

$math->factorial("do something");