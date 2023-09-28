<?php
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
    "n" => 32,
];

if(in_array("32", $students, true)){
    echo "data found";
}else{
    echo "data not found";
}


//key_exists();
//array_search();

$arr1 = array("apple", "banana");
$arr2 = array("cherry", "date");
$merged = array_merge($arr1, $arr2);
print_r($merged);

