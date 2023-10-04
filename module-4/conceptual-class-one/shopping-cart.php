<?php

class shopping{
    public $itemPrice;
    public $shippingCost;
    public $discount;

    public function myCart(){
        $subtotal = $this->itemPrice + $this->shippingCost - $this->discount;
        return $subtotal;
    }
}

$cart = new shopping();

$cart->itemPrice = 200;
$cart->shippingCost = 40;
$cart->discount = 30;

$subtotal = $cart->myCart();
echo $subtotal;


//print_r($catObj);