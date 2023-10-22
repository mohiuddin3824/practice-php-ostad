<?php

class Painter{
    public $color = "red";

    public function paint(){
        echo "I'm paint ". $this->color;
    }
}

$obj = new Painter();
$obj->paint();

echo "\n";

