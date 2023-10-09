<?php

class Follwer{
    public $name;
    public $email;
    public $follwers;
}

$fObj = new Follwer();

$fObj->name = "jumla";
$fObj->email = "Mohiuddin@gmail.com";
$fObj->follwers = 2500;

print_r( $fObj );

class User
{
    // Create Properties
    public $name;
    public $username;
    public $followerCount;
}

//Creating an object or Instantiating an object
$princeObject = new User();

//Assigning values to properties
$princeObject->name          = "Prince";
$princeObject->username      = '@prince';
$princeObject->followerCount = 1000;

//Printing the object
print_r( $princeObject );