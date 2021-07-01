@extends('layouts.app')

@section('content')
    <h2>Your Cart</h2>
    <div class="container min-vh-100">
        @if ($cart->totalQty > 0)
            @foreach ($cart->cartItems as $groupItem)
                <div class="row mb-2">
                    <div class="col-2">
                        <img src="{{ asset("uploads/product/" . $groupItem['item']->product_image) }}" alt="ProductImage" style="max-height: 100px; max-width: 100px">
                    </div>
                    <div class="col-5">{{ $groupItem['item']->product_name }}</div>
                    <div class="col">
                        <div class="btn-group" role="group" style="height: 30px">
                            <button type="button" class="btn btn-outline-primary">-</button>
                            <input type="number" value="{{ $groupItem['qty'] }}" style="width: 30px"/>
                            <button type="button" class="btn btn-outline-primary">+</button>
                        </div>
                    </div>
                    <div class="col-2 text-center">{{ $groupItem['subtotalPrice'] }}</div>
                    <div class="col"><a href="{{ route('cart.removeFromCart', ['id' => $groupItem['item']->product_id]) }}"
                        style="font-size: 1.5rem"
                        ><i class="fas fa-trash-alt"></i></a></div>
                </div>
                
            @endforeach
            <hr>
            <div class="row d-flex justify-content-end">
                <div class="col-3">
                    <strong>Total: {{ $cart->totalPrice }}</strong>
                </div>
            </div>
            <div class="row d-flex justify-content-end">
                <div class="col-3">
                    <a href="{{ route('checkout') }}" class="btn btn-success">Checkout</a>
                </div>
            </div>
        @else
            <div class="row">
                    <h2>No Items in Cart</h2>
            </div>
        @endif
    </div>
@endsection