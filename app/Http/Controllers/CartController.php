<?php

namespace App\Http\Controllers;

use App\Cart;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function getAddToCart (Request $request, $id) {
        $product = product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart();
        $cart->ExistOldCart($oldCart);
        $cart->add($product);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('products.index');
    }

    public function getCart() {
        if (! Session::has('cart')) {
            return view('cart.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart();
        $cart->ExistOldCart($oldCart);
        return view('cart.cart', ['cart' => $cart]);
    }

    public function getCheckout() {
        if (! Session::has('cart')) {
            return view('cart.cart');
        }
        $cart = Session::get('cart');
        return view('shop.checkout', ['totalPrice' => $cart->totalPrice]);
    }
}
