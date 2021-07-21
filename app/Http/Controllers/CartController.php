<?php

namespace App\Http\Controllers;

use App\Cart;
use App\product;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $cart;

    public function getAddToCart ($id) {
        $this->cart = new Cart();
        $product = product::select('product_id', 'product_image', 'product_name', 'product_price')
                            ->find($id);
        // DD($product);
        $this->cart->add($product);
        // DD($this->cart);
        Session::put('cart', $this->cart);
        return redirect()->back();
    }

    public function getCart() {
        $this->cart = new Cart();
        $this->cart = Session::get('cart');
        return view('cart.cart', ['cart' => $this->cart]);
    }
    
    public function getCheckout() {
        $this->cart = new Cart();
        $this->cart = Session::get('cart');
        // DD($this->cart);
        return view('cart.checkout', ['cart' => $this->cart]);
    }

    public function getRemoveFromCart($id) {
        $this->cart = new Cart();
        $this->cart = Session::get('cart');
        $this->cart->remove($id);
        Session::put('cart', $this->cart);
        return redirect()->back();
    }

    public function postModifiedCart(Request $request) {
        $this->cart = new Cart();
        try {
            $modifiedCartItems = $request->all();
            $this->cart->cartItems = $modifiedCartItems;
            Session::put('cart', $this->cart);
          
            http_response_code(200);
            return 'successful';
          } catch (Error $e) {
            http_response_code(500);
            return json_encode(['error' => $e->getMessage()]);
          }
    }
}
