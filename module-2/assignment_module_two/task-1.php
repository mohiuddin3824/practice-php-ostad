<?php

// Print all even numbers betwin 1-20 using for loop in a function
echo "=== Even numbers using using for loop in a function == \n";
    function evenOrOdd($start, $end){
        for ($i=$start; $i <= $end ; $i++) { 
            if ( $i % 2 == 0 ) {
                echo $i . "\n";
            }
        }
    }

    evenOrOdd(1, 20);

    echo "\n";

// Print all even numbers betwin 1-20 using while loop without function
echo "=== Even numbers using while loop == \n";

    $x = 1;
    while ($x <= 20) {
        if ( $x % 2 == 0 ) {
            echo $x ."\n";
            
        }
        $x++;
    }

    echo "\n";

// Print all even numbers betwin 1-20 using while loop in a function
    echo "=== Even numbers using while loop in a function == \n";
    function evenOdd($start, $end){
        $g = $start;
        while ($g <= $end) {
            if ($g % 2 == 0) {
                echo $g . "\n";
            }
            $g++;
        }
    }
    evenOdd(1, 20);

    echo "\n";
    

// Print all even numbers betwin 1-20 using do while loop without function
echo "== Even numbers using do while loop == \n";

    $y = 1;
    do {
        if ($y % 2 ==0) {
            echo $y . "\n";
        }
        $y++;
    } while ($y <= 20);


// Print all even numbers betwin 1-20 using do while loop in a function
echo "== Even numbers using do while loop in a function == \n";

function checkEvenOdd($start, $end){
    $z = $start;
    do {
        if ($z % 2 == 0) {
            echo $z . "\n";
        }
        $z++;
    } while ($z <= $end);
}

checkEvenOdd(1, 20);
