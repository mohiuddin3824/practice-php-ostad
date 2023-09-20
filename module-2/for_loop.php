<?php

/*
for ($x = 1;  $x <= 2; $x++) {

    echo "Table of: {$x} <br>";
    
    for ($i=1; $i <= 10; $i++) { 
        $z = $x * $i;
        echo "$x X $i = $z <br>";
    }

    echo "<br>";
}


for ($z=1; $z <= 10; $z++) { 
    echo 3 . " X " . $z . " = " .$z*3 . "<br>";
}
*/
echo PHP_EOL;

// show divisible by 4
for ($i=0; $i <100 ; $i++) { 
  if ($i % 7 == 0) {
    echo $i . PHP_EOL;
  }
  
}