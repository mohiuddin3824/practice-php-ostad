<?php
$students = [
    "class one" => [
        "jamal" => [
            "age" => 6,
            "roll no" => 8,
            "height" => "3 fit 3 inch",
            "father" => "kamrul hasan",
        ],
        "hasan" => [
            "age" => 7,
            "roll no" => 9,
            "height" => "3 fit 4 inch",
            "father" => "haydar hasan",
        ],
        "kamal" => [
            "age" => 7,
            "roll no" => 10,
            "height" => "3 fit 5 inch",
            "father" => "hasan bhuiyan",
        ]
    ],
    "class two" => [
        "jannat" => [
            "age" => 6,
            "roll no" => 11,
            "height" => "3 fit 3 inch",
            "father" => "zia hasan",
        ],
        "tanvir" => [
            "age" => 7,
            "roll no" => 12,
            "height" => "4 fit 4 inch",
            "father" => "tareq hasan",
        ],
        "sabiha" => [
            "age" => 7,
            "roll no" => 13,
            "height" => "4 fit 5 inch",
            "father" => "rashel bhuiyan",
        ]
    ],
];

//print_r($students);
//var_dump($students);

//echo $students["class one"]["jamal"]["age"];

//printf("%s", $students["class one"]["jamal"]["age"]);

// foreach ($students as $key => $value) {
//     echo $key ." => ". $value;
// }

$data = [
    "name"=> "Mohiuddin",
    "age" => 6,
    "roll no" => 8,
    "height" => "3 fit 3 inch",
    "father" => "kamrul hasan",
    
];

//echo join(', ', $data);

$data2 = json_encode($data);

echo $data2;

$data3 = json_decode($data2, true);

print_r( $data3);