<?php

$percentage = 15;
$total = 500;

$calculate = $percentage / $total;

$final_percentage = $calculate * 100;

$output = $total - $final_percentage;

echo $output . "\n";


//Write a function where you should pass 2 argument and peramitars where first is total price and second is percentage figure, calculate percentage and return final number after diducting percentage;

function cal_percentage($num_amount, $num_total) {
    $count1 = $num_amount / $num_total;
    $count2 = $count1 * 100;
    $count = number_format($count2, 0);
    $output2 = $num_total - $count;
    return "Price: " . number_format($output2, 2);
  }

  echo cal_percentage(15, 500) . "\n";
  echo cal_percentage(9, 600);

