<?php

class ParentClass{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
        $this->SayHi();
    }
    public function SayHi(){
        echo "this is parent class of {$this->name} \n";
    }
}

class ChildClass extends ParentClass{
    public function SayHi(){
        parent::SayHi();
        echo "this is child Class \n";
    }
}

$object = new ChildClass("Mohiuddin");


