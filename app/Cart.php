<?php

namespace App;

use Illuminate\Support\Facades\Session;

class Cart
{
    public $cartItems = []; //An associative array stores many groups of an specific item
    public $totalQty = 0;
    public $totalPrice = 0;
    
    public function __construct()
    {
        if(Session::has('cart')) {
            $oldCart = Session::get('cart');
            $this->cartItems = $oldCart->cartItems;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    public function add(Product $pickingItem) { //param as assoc array
        $itemId = $pickingItem->product_id;
        $groupItem = [
            'qty' => 1,
            'price' => $pickingItem->product_price,
            'item' => json_decode(json_encode($pickingItem), TRUE),
            'subtotalPrice' => $pickingItem->product_price
        ];

        if (array_key_exists($itemId, $this->cartItems)) {
            $this->cartItems[$itemId]['qty']++;
            $this->cartItems[$itemId]['subtotalPrice'] += $this->cartItems[$itemId]['price'];
        } else {
            $this->cartItems += [$itemId => $groupItem];
            
        }
        $this->totalQty++;
        $this->totalPrice += $pickingItem->product_price;

    }

    public function remove($itemId) {
        $groupItem = $this->cartItems[$itemId];
        $this->totalQty -= $groupItem['qty'];
        $this->totalPrice -= $groupItem['subtotalPrice'];
        unset($this->cartItems[$itemId]);
    }
}