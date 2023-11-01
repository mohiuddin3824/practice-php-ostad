<?php
class Shape{
    
}
class Shapes{
    private $shapes;
    function __construct()
    {
        $this->shapes = array();
    }

    function addShape(Shape $shape){
        array_push($this->shapes, $shape);
    }

    function totalShapes(){
        return count($this->shapes) . "\n";
    }
}

class Racangle extends Shape{
    function heello(){
        echo "hello mohiuddin";
    }
}


class Triangle extends Shape{

}

class Student{

}

$shapeCollection = new Shapes();

$shapeCollection->addShape(new Racangle());
$shapeCollection->addShape(new Triangle());
//$shapeCollection->addShape(new Student());

echo $shapeCollection->totalShapes();
