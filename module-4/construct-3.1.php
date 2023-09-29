<?php

class company{
    public $cName;
    public $cAddress;
    public $cMobile;

    public function __construct($cNameValue, $cAddressValue, $cMobileValue){
        $this->cName=$cNameValue;
        $this->cAddress=$cAddressValue;
        $this->cMobile=$cMobileValue;
    }

    public function myCompany(){
        echo "My Company name is $this->cName, Address is $this->cAddress, and Contact is $this->cMobile";
    }

    
    /*
    public function myCompany0($cName, $cAddress, $cMobile){
        echo "My Company name is $cName, Address is $cAddress, and Contact is $cMobile";
    }
    */

    

    /*
    public function myCompany1(){
        echo "My Company name is $this->cName, Address is $this->cAddress, and Contact is $this->cMobile";
    }

    public function myCompany2(){
        echo "My Company name is $this->cName, Address is $this->cAddress, and Contact is $this->cMobile";
    }

    */

}

$cObj=new company("MicroWeb Technology", "Farmgate-Dhaka", "01831332732");

$cObj->myCompany();

echo "\n =========== \n";

//$cObj->myCompany0("Habib Enterprice", "Mirpur-Dhaka", "01911-555084");

//$cObj->myCompany1();

//echo "\n ============= \n";

//$cObj->myCompany2();