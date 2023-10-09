<?php

class shoppingCart{
    public $productPrice;
    public $shippingCost;
    public $discountPrice;

    public function __construct($priceValue, $shippingValue, $discountValue) {
        $this->productPrice = $priceValue;
        $this->shippingCost = $shippingValue;
        $this->discountPrice = $discountValue;
    }

    public function calculator(){
        $subTotal = $this->productPrice + $this->shippingCost - $this->discountPrice;
        return $subTotal;
    }
}

$cartObj = new shoppingCart(200, 70, 15);


echo $cartObj->calculator();
//print_r($cartObj);