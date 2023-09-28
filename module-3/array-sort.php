<?php
// sort()  sort arrays in ascending order

// rsort()  sort arrays in descending order

// asort()  sort associative arrays in ascending order, according to the value

// ksort()  sort associative arrays in ascending order, according to the key

// arsort()  sort associative arrays in descending order, according to the value

// krsort()  sort associative arrays in descending order, according to the key

$students = [
    "a" => "hasan",
    "b" => "jamil",
    "c" => "mamun",
    "d" => "khadem",
    "e" => "ismail",
    "f" => "Akkas",
    "g" => "aslam",
    "h" => "Baki",
    "i" => "Zahid",
    "j" => "Abbas",
    "k" => "Abbck",
];

/*
foreach($students as $key => $item){
    echo $key . "\n";
}
*/

//sort($students); //sort arrays in ascending order

//asort($students);

//rsort($students);

//ksort($students);


//arsort($students);

//krsort($students);

natsort($students);
print_r($students);

echo "\n";

$fruits = array("apple", "banana", "cherry");

function test_alter(&$item, $key, $prefix) {
    $item = "$prefix: $item";
}

array_walk($fruits, 'test_alter', 'fruit');
print_r($fruits);

