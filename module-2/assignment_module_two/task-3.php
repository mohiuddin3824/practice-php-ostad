<?php
echo "Task 3, Print fibonacci seris using function with break statement \n";
function fibonacciBreak($start, $end){
    $veryOld = $start;
    $old = 1;
    $new = 1;
    
    for ($i=0; $i <$end ; $i++) { 
        if ($veryOld>100) {
            break;
        }
        echo $veryOld . "\n";
        $old = $new;
        $new = $old+$veryOld;
        $veryOld = $old;
    }
    
}
fibonacciBreak(0,20);