<?php

class AllStudents implements IteratorAggregate{
    private $students;

    function __construct()
    {
        $this->students = array();
    }

    function add($student){
        array_push($this->students, $student);
    }

    function getIterator(): Traversable
    {
        return new ArrayIterator($this->students);
    }

}

$students = new AllStudents;

$students->add("Salman");
$students->add("Hamid");
$students->add("Kamal");

foreach ($students as $value) {
    echo $value . "\n";
}