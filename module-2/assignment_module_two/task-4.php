<?php
echo "Task 4 Print fibonacci seris using function \n";
function fibonacci($start, $end){
    $veryOld = $start;
    $old = 1;
    $new = 1;
    
    for ($i=0; $i <$end ; $i++) { 
        echo $veryOld . "\n";
        $old = $new;
        $new = $old+$veryOld;
        $veryOld = $old;
    }
    
}
fibonacci(0,15);

echo "\n";
echo "Task 4 Print fibonacci seris using recursive function \n";

function fibonacciRecursive($old, $new, $end){
    static $start;
    $start = $start ?? 1;

    if ($start>$end) {
        return;
    }
    $start++;

    echo $old . "\n";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacciRecursive($old, $new, $end);

}

fibonacciRecursive(0,1,15);





