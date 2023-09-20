<?php

function learnRecursive($counter, $end, $stepping){
    if ($counter > $end) {
        return;
    }
    echo $counter . "\n";
    $counter+=$stepping;
    learnRecursive($counter, $end, $stepping);
}

learnRecursive(1, 20, 2);

echo "\n";
function recursive($start, $ends, $step){
    if($start>$ends){
        return;
    }
    echo $start . "\n";
    $start+=$step;
    recursive($start, $ends, $step);
}
recursive(1,10, 2);