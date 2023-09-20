<?php

// to get unlimited peramitars and agruments we should use ...$vname
function sum($x, $y, int...$numbers):int {
    $result = 0;
    for ($i=0; $i < count($numbers); $i++) { 
        $result += $numbers[$i];
    }
    return $result;
}

echo sum(1,2,3,58,7,4,6,3,5,4);