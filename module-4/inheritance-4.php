<?php
/*
class Father{

   final public function wealth100(){
        for ($i=0; $i <= 100 ; $i++) { 
            echo $i . "\n";
        }
    }

}

class Son extends Father{
    
    public function wealth100(){
        for ($i=0; $i <= 80 ; $i++) { 
            echo $i . "\n";
        }
   }
   
}

$objFather=new Father();

$objSon=new Son();
$objSon->wealth100();

*/

abstract class Father{

    public function wealth100(){
        for ($i=0; $i <= 100 ; $i++) { 
            echo $i . "\n";
        }
    }

}

class Son extends Father{
    
    public function wealth100(){
        for ($i=0; $i <= 80 ; $i++) { 
            echo $i . "\n";
        }
   }
   
}

//$objFather=new Father(); // Abstracted method can not be called! 

$objSon=new Son();
$objSon->wealth100();

