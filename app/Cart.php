<?php

namespace App;

use Illuminate\Support\Facades\Session;

class Cart
{
    public $cartItems = []; //An associative array stores many groups of an specific item
    
    public function __construct()
    {
        if(Session::has('cart')) {
            $oldCart = Session::get('cart');
            $this->cartItems = $oldCart->cartItems;
        }
    }
    public function add(product $pickingItem) { //param as assoc array
        $itemId = $pickingItem->product_id;
        $groupItem = [
            'qty' => 1,
            'item' => json_decode(json_encode($pickingItem), TRUE),
        ];

        if (array_key_exists($itemId, $this->cartItems)) {
            $this->cartItems[$itemId]['qty']++;
        } else {
            $this->cartItems += [$itemId => $groupItem];            
        }
    }

    public function remove($itemId) {
        unset($this->cartItems[$itemId]);
    }

    public function sum_qty() {
        $totalQty = 0;
        foreach ($this->cartItems as $groupItem) {
            $totalQty += $groupItem['qty'];
        }
        return $totalQty;
    }

    public function sum_itemPrice ($itemId) {
        return $this->cartItems[$itemId]['qty'] * $this->cartItems[$itemId]['item']['product_price'];
    }

    public function sum_amount() {
        $totalAmount = 0;
        foreach ($this->cartItems as $itemId => $groupItem) {
            $totalAmount += $this->sum_itemPrice($itemId);
        }
        return $totalAmount;
    }


}