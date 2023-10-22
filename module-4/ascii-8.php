<?php

echo ord('H') . "\n";
echo ord('A') . "\n";
echo ord('H') . "\n";
echo chr(12) . "\n";

$string = "Hello world";

for ($i=0; $i <strlen($string) ; $i++) { 
    echo ord($string[$i]) . " ";
}

echo "\n";

$numbers = [72, 101, 108, 108, 111, 32, 119, 111, 114, 108, 100, ];

foreach ($numbers as $numn) {
    echo chr($numn);
}

