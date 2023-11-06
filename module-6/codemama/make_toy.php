<?php

/*
Problem Statement
Suppose, you work in a toy car workshop, and your job is to build toy cars from a collection of parts. Each toy car needs 4 wheels, 1 car body, and 2 figures of people to be placed inside. Write a program which will calculate how many complete toy cars can be made, given the total number of wheels, car bodies and figures available.

*/

$wheels = 43;
$car_body = 18;
$figure = 20;

$max_car_from_wheel = floor($wheels / 4);
$max_car_from_body = floor($car_body / 1);
$max_car_from_figure = floor($figure / 2);

print min($max_car_from_wheel, $max_car_from_body, $max_car_from_figure);