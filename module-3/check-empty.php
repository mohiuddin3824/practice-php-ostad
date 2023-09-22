<?php

$name = 0;

if (isset($name)) {
    echo "value is set!";
}else{
    echo "value is not set!";
}

echo "\n";

if (empty($name)) {
    echo "name is empty";
}else{
    echo "value is not set!";
}

echo "\n";

if (isset($name) && is_numeric($name) || $name != '') {
    echo "name is set and it is not empty";
}else{
    echo "name is either set or it's empty";
}