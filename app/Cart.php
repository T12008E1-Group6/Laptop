<?php

namespace App;

class Cart
{
    public $cartItems = []; //An associative array stores many groups of an specific item
    public $totalQty = 0;
    public $totalPrice = 0; 
    
    public function ExistOldCart(Cart $oldCart = null) {
        if($oldCart) {
            $this->cartItems = $oldCart->cartItems;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add(Product $pickingItem) { //param as assoc array
        $itemId = $pickingItem->id;
        $groupItem = [
            'qty' => 1,
            'price' => $pickingItem->price,
            'item' => $pickingItem,
            'subtotalPrice' => $pickingItem->price
        ];

        if (array_key_exists($itemId, $this->cartItems)) {
            $this->cartItems[$itemId]['qty']++;
            $this->cartItems[$itemId]['subtotalPrice'] += $this->cartItems[$itemId]['price'];
        } else {
            $this->cartItems += [$itemId => $groupItem];
            
        }
        $this->totalQty++;
        $this->totalPrice += $pickingItem->price;

    }
}