<?php

class car{
    public $name;
    public $model;
    public $color;

    public function __construct($nameValue, $modelValue, $colorValue){
        $this->name=$nameValue;
        $this->model=$modelValue;
        $this->color=$colorValue;
    }

    public function MyCar(){
        echo "My car's name is $this->name, and Model is $this->model, and color is $this->color ";
    }
}

$objCar = new car("Hanif", "Mh0342", "Silver");

$objCar->MyCar();