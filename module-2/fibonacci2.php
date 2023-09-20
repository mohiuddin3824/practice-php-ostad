<?php



function fibonacci($start, $end){
    $veryOld = $start;
    $old = 1;
    $new = 1;
    
    for ($i=0; $i <=$end ; $i++) { 
        echo $veryOld . "\n";
        $old = $new;
        $new = $old+$veryOld;
        $veryOld = $old;
    }
    
}
fibonacci(0,15);