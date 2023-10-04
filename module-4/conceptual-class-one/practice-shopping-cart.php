<?php

class myCart{
    public $sutotalPrice;
    public $shippingPrice;
    public $discountPrice;

    public function __construct($priceValue, $shippingValue, $discountValue){
        $this->sutotalPrice = $priceValue;
        $this->shippingPrice = $shippingValue;
        $this->discountPrice = $discountValue;
    }

    public function cartValue(){
        $payable = $this->sutotalPrice + $this->shippingPrice - $this->discountPrice;
        return $payable;
    }
}

$cart = new myCart(200, 25, 15);

echo $cart->cartValue();






    

