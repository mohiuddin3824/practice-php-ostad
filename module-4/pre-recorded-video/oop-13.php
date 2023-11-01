<?php

class DistrictCollection implements IteratorAggregate{
    private $districts;

    function __construct()
    {
        $this->districts = array();
    }
    function add($district){
        array_push($this->districts, $district);
    }

    // function getDistricts(){
    //     return $this->districts;
    // }

    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }
}

$districts = new DistrictCollection;
$districts->add("Dhaka");
$districts->add("Chittagong");
$districts->add("Rajshahi");
$districts->add("Bogura");
$districts->add("Sylhet");

//$_districts = $districts->getDistricts();

//print_r($_districts);

foreach ($districts as $item) {
    echo $item . "\n";
}