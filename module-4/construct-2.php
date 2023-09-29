<?php

// class constructor non peramised
class mwts1{
    public function __construct(){
        echo "Hello I am construction";
    }
}

new mwts1();

echo "\n";

//peramitarised construction
class mwts{
    public function __construct($name){
        echo $name;
    }
}

new mwts("Hello I am construction");