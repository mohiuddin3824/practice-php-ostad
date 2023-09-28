<?php
$data1 = [1,2,44,55,88,78,59,54,63];
$data2 = [63,54,78,96,53,21,78,58,4];

$data3 = array_intersect($data1, $data2);

print_r($data3);