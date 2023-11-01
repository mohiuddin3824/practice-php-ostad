
<?php

class Fund{
    private $fund;

    public function __construct($initialFund = 0 ){
        $this->fund = $initialFund;
    }

    public function addFund($money){
        $this->fund += $money;
        $this->diductFund(0);
    }

    public function diductFund($money){
        $this->fund -= $money;
    }

    public function getTotal(){
        echo "Total Fund is {$this->fund} \n";
    }
}

$object = new Fund(100);
//$object->fund = 75;
$object->getTotal();

$object->addFund(20);
$object->diductFund(6);
$object->getTotal();

 