<?php

function serve($foodTypes="Black Cofee", $numberOfItems="1 Cup"){
    echo " {$numberOfItems}  {$foodTypes} has/have been served!";
}

$ft = "Black Tea";
$ni = "4 Cups";

serve($ft, $ni);