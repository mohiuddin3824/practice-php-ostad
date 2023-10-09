<?php

class Father{
    public function __construct(){
        echo "This is Father construction \n";
        echo "This is Father's second construction \n";
    }
}


class Son extends Father{
    public function __construct(){
        //parent::__construct();
        echo "This is Son construction "; 
    }
}

//new Father();
echo "\n";
new Son();