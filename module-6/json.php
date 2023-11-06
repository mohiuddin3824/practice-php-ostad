<?php

$person = [
    "name" => "Mohiuddin",
    "age" => 28,
    "address" => [
        "permanent" => "Lakshmipur",
        "present" => "Dhaka",
    ],
];

$json = json_encode($person);

file_put_contents("data.txt", $json);