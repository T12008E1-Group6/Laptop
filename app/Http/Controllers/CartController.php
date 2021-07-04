<?php

namespace App\Http\Controllers;

use App\Cart;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $cart;

    public function getAddToCart ($id) {
        if($this->cart == null) $this->cart = new Cart();
        $product = product::find($id);
        // DD($product);
        $this->cart->add($product);
        // DD($this->cart);
        Session::put('cart', $this->cart);
        return redirect()->back();
    }

    public function getCart() {
        if($this->cart == null) {
            $this->cart = new Cart();
            Session::put('cart', $this->cart);
        }
        // DD($this->cart);
        return view('cart.cart', ['cart' => $this->cart]);
    }
    
    public function getCheckout() {
        if (isset($_COOKIE['modifiedCart'])) {
            $modifiedCart = (object) json_decode($_COOKIE['modifiedCart'], TRUE);
            Session::put('cart', $modifiedCart);
            setcookie('modifiedCart',"", time() - 3600); //delete this cookie
        }
        $this->cart = Session::get('cart');
        return view('cart.checkout', ['cart' => $this->cart]);
    }

    public function getRemoveFromCart($id) {
        $this->cart = Session::get('cart');
        $this->cart->remove($id);
        Session::put('cart', $this->cart);
        return redirect()->back();
    }

}
