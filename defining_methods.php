<?php 

class Basket {
    public $itemTotal;
    public $shippingCost;
    public $subTotal;
    public $discount;

    public function calculateSubTotal() {
        $subTotal= $this->itemTotal + $this->shippingCost;
        return $subTotal;
    }
}

$basket = new Basket();
$basket->itemTotal = 3000;
$basket->shippingCost = 2000;
$basket->discount = 50;

$subTotal = $basket->calculateSubTotal();
echo var_dump($subTotal);

print_r(var_dump($basket));