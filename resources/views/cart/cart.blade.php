@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    <div class="row"><h2>Your Cart</h2></div>
    @if (Session::has('cart'))
        @foreach ($cart->cartItems as $groupItem)
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset($groupItem['item']->imagePath) }}" alt="ProductImage" style="max-height: 100px; max-width: 100px">
                </div>
                <div class="col-5">{{ $groupItem['item']->title }}</div>
                <div class="col">
                    <div class="btn-group" role="group" style="height: 30px">
                        <button type="button" class="btn btn-outline-primary">-</button>
                        <input type="number" value="{{ $groupItem['qty'] }}" style="width: 30px"/>
                        <button type="button" class="btn btn-outline-primary">+</button>
                    </div>
                </div>
                <div class="col-3 text-center">{{ $groupItem['subtotalPrice'] }}</div>
                <div class="col"><a href="">Xóa</a></div>
            </div>
            
        @endforeach
        <hr>
        <div class="row">
            <div class="col-3">
                <strong>Total: {{ $cart->totalPrice }}</strong>
            </div>
        </div>
        <div class="row d-flex justify-content-right">
            <div class="col-3">
                <a href="{{ route('checkout') }}" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
    <div class="row">
        
            <h2>No Items in Cart</h2>
     
    </div>
    @endif
@endsection