<?php

//1+4+ 9+16 + .......+n
//Find sum & average of this series

$n = 30;
$sum = 1;
for ($i=1; $i<= $n; $i++){
$sum += $i*($i+1)/2; 

}
echo "Sum of given series upto $n numbers is : ".$sum;