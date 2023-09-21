<?php

$data = [
    "Jamal",
    "kamal",
    "hasan",
];

//echo $data[0];
//array_pop($data); //Delete the last element of an array

$data[]= "kamrul"; //function inserts one or more elements to the end of an array
array_push($data, "jannat", "jahan"); //function inserts one or more elements to the end of an array

array_shift($data); //function removes the first element from an array, and returns the value of the removed element.

array_unshift($data, "Ayan"); //function inserts new elements to an array. The new array values will be inserted in the beginning of the array.

$n = count($data);

for ($i=0; $i < $n; $i++) { 
    echo $data[$i] . "\n";
}



