@extends('layouts.master')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <h1>Checkout</h1>
            <h4>Your Total: {{ $totalPrice }}</h4>
            <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="mb-3">
                    <label for="card-holder-name" class="form-label">card holder name</label>
                    <input type="text" class="form-control" id="card-holder-name" name="card-holder-name" required>
                </div>
                <div class="mb-3">
                    <label for="credit-card-number" class="form-label">credit card number</label>
                    <input type="text" class="form-control" id="credit-card-number" name="credit-card-number" required>
                </div>
                <div class="mb-3">
                    <label for="expiration-month" class="form-label">expiration month</label>
                    <input type="text" class="form-control" id="expiration-month" name="expiration-month" required>
                </div>
                <div class="mb-3">
                    <label for="expiration-year" class="form-label">expiration year</label>
                    <input type="text" class="form-control" id="expiration-year" name="expiration-year" required>
                </div>
                <div class="mb-3">
                    <label for="CVC" class="form-label">CVC</label>
                    <input type="text" class="form-control" id="CVC" name="CVC" required>
                </div>

                <a href="" class="btn btn-success">Buy now</a>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/checkout.js') }}"></script>

@endsection