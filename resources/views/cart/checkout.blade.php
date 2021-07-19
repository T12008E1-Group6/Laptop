@extends('layouts.app')

@section('internalCSS')
<style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    font-size: 16px;
    -webkit-font-smoothing: antialiased;
    height: 100vh;
    width: 100vw;
  }

  form {
    width: 30vw;
    min-width: 500px;
    align-self: center;
    box-shadow: 0px 0px 0px 0.5px rgba(50, 50, 93, 0.1),
      0px 2px 5px 0px rgba(50, 50, 93, 0.1), 0px 1px 1.5px 0px rgba(0, 0, 0, 0.07);
    border-radius: 7px;
    padding: 40px;
  }

  input {
    border-radius: 6px;
    margin-bottom: 6px;
    padding: 12px;
    border: 1px solid rgba(50, 50, 93, 0.1);
    height: 44px;
    font-size: 16px;
    width: 100%;
    background: white;
  }

  .result-message {
    line-height: 22px;
    font-size: 16px;
  }

  .result-message a {
    color: rgb(89, 111, 214);
    font-weight: 600;
    text-decoration: none;
  }

  .hidden {
    display: none;
  }

  #card-error {
    color: rgb(105, 115, 134);
    text-align: left;
    font-size: 13px;
    line-height: 17px;
    margin-top: 12px;
  }

  #card-element {
    border-radius: 4px 4px 0 0 ;
    padding: 12px;
    border: 1px solid rgba(50, 50, 93, 0.1);
    height: 44px;
    width: 100%;
    background: white;
  }

  #payment-request-button {
    margin-bottom: 32px;
  }

  /* Buttons and links */
  button {
    background: #5469d4;
    color: #ffffff;
    font-family: Arial, sans-serif;
    border-radius: 0 0 4px 4px;
    border: 0;
    padding: 12px 16px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    display: block;
    transition: all 0.2s ease;
    box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
    width: 100%;
  }
  button:hover {
    filter: contrast(115%);
  }
  button:disabled {
    opacity: 0.5;
    cursor: default;
  }

  /* spinner/processing state, errors */
  .spinner,
  .spinner:before,
  .spinner:after {
    border-radius: 50%;
  }
  .spinner {
    color: #ffffff;
    font-size: 22px;
    text-indent: -99999px;
    margin: 0px auto;
    position: relative;
    width: 20px;
    height: 20px;
    box-shadow: inset 0 0 0 2px;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
  }
  .spinner:before,
  .spinner:after {
    position: absolute;
    content: "";
  }
  .spinner:before {
    width: 10.4px;
    height: 20.4px;
    background: #5469d4;
    border-radius: 20.4px 0 0 20.4px;
    top: -0.2px;
    left: -0.2px;
    -webkit-transform-origin: 10.4px 10.2px;
    transform-origin: 10.4px 10.2px;
    -webkit-animation: loading 2s infinite ease 1.5s;
    animation: loading 2s infinite ease 1.5s;
  }
  .spinner:after {
    width: 10.4px;
    height: 10.2px;
    background: #5469d4;
    border-radius: 0 10.2px 10.2px 0;
    top: -0.1px;
    left: 10.2px;
    -webkit-transform-origin: 0px 10.2px;
    transform-origin: 0px 10.2px;
    -webkit-animation: loading 2s infinite ease;
    animation: loading 2s infinite ease;
  }

  @-webkit-keyframes loading {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
  @keyframes loading {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }

  @media only screen and (max-width: 600px) {
    form {
      width: 80vw;
    }
  }

</style>
@endsection

@section('content')
<div class="min-vh-100 mb-3">
  <form class="container">
    <div class="row">
      <div class="col">
        <div class="container bg-light rounded-2 shadow-sm py-3">
              <h2>Delivery Information</h2>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Receiver Name...</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Phone Number...</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Delivery address...</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Customer note...</label>
              </div>
        </div>
      </div>
      <div class="col">
        <div class="container bg-light rounded-2 shadow-sm py-3">
          <h2>Cart Information</h2>
          @foreach ($cart->cartItems as $groupItem)
                    @php
                        $itemId = $groupItem['item']['product_id'];
                    @endphp
                    <div class="row mb-2" id="groupItem-{{ $itemId }}">
                        <div class="col-2">
                            <img src="{{ asset("uploads/product/" . $groupItem['item']['product_image']) }}" alt="ProductImage" style="max-height: 80px; max-width: 80px">
                        </div>
                        <div class="col-5" style="font-size: 0.7rem">{{ $groupItem['item']['product_name'] }}</div>
                        <div class="col">
                            <div class="btn-group" role="group">
                                <input id="{{ 'Qty-' . $itemId }}" type="text" class="border border-primary" value="{{ $groupItem['qty'] }}" style="width: 33px; text-align: center;" disabled/>
                            </div>
                        </div>
                        <div class="col-3 d-flex flex-column align-items-end">
                            <div id="subtotal-{{ $itemId }}">{{ $groupItem['subtotalPrice'] }} đ</div>
                            <div style="font-size: 0.7rem">{{ $groupItem['price'] }} đ/Unit</div>
                        </div>
                    </div>
                    
                @endforeach
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-6 m-3">
        <div id="payment-form" class="container bg-light rounded-2 shadow-sm py-3">
          <h2>Checkout</h2>
          <h6>Your Total: {{ $cart->totalPrice }}</h6>
          
          <h6>Please choose one of payment methods below</h6>
          <input type="radio" class="btn-check" name="paymentOptions" id="option1" autocomplete="off" checked>
          <label class="btn btn-outline-success" for="option1">Cash On Delivery</label>
  
          <input type="radio" class="btn-check" name="paymentOptions" id="option2" autocomplete="off">
          <label class="btn btn-outline-success" for="option2">Credit Card</label>
          
          <div id="card-element"><!--Stripe.js injects the Card Element--></div>
          
          
          <button id="submit">
            <div class="spinner hidden" id="spinner"></div>
            <span id="button-text">Confirm Order</span>
          </button>
          <p id="card-error" role="alert"></p>
          <p class="result-message hidden">
            Payment succeeded, see the result in your
            
          </p>
        </div>
      </div>
    </div>
  </form>
</div>
    
    
<script src="https://js.stripe.com/v3/"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
<script src="{{ asset('js/checkout.js') }}" defer></script>
    
@endsection