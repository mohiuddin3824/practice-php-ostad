<?php

$userName = "mohiuddin084";
$password = md5("Mwt@0987654");

//$pass = md5($password);
//echo $pass;

//$hashPass = "79ed0877859de6d520687edbe18fcf3d";

$formUser = "mohiuddin084";
$formPass = "Mwt@0987654rr";
//echo md5($formPass);

if ($formUser == $userName && md5($formPass) == $password) {
    echo "Welcome to dashboard";
}else{
    echo "Username and password mismatch!";
}