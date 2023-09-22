<?php

$students = [
    "jamila" => 'Age: 24, address: chittagong, mobile: 01831332732',
    "jamal" => 'Age: 24, address: Dhaka, Mobile: 01911555084',
    "kamal" => 'Age: 24, address: Dhaka, Mobile: 01911555084',
    "hasan" => 'Age: 24, address: Dhaka, Mobile: 01911555084',
];

//echo $students['jamal'] . "\n";

foreach ($students as $key => $value) {
    echo $key ." => ". $value . "\n";
}// foreach loop is dedicated for associative array

echo "hello one";