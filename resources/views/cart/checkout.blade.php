@extends('layouts.QTuser')

@section('internalCSS')
<style>
  /* Variables */
#payment-form *{
  box-sizing: border-box;
}


#payment-form {
  width: 30vw;
  min-width: 500px;
  align-self: center;
  box-shadow: 0px 0px 0px 0.5px rgba(50, 50, 93, 0.1),
    0px 2px 5px 0px rgba(50, 50, 93, 0.1), 0px 1px 1.5px 0px rgba(0, 0, 0, 0.07);
  border-radius: 7px;
  padding: 40px;
}

#payment-form input {
  border-radius: 6px;
  margin-bottom: 6px;
  padding: 12px;
  border: 1px solid rgba(50, 50, 93, 0.1);
  height: 44px;
  font-size: 16px;
  width: 100%;
  background: white;
}

#payment-form .result-message {
  line-height: 22px;
  font-size: 16px;
}

#payment-form .result-message a {
  color: rgb(89, 111, 214);
  font-weight: 600;
  text-decoration: none;
}

.hidden {
  display: none;
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
#payment-form button {
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
#payment-form button:hover {
  filter: contrast(115%);
}
#payment-form button:disabled {
  opacity: 0.5;
  cursor: default;
}

/* spinner/processing state, errors */
#payment-form .spinner,
#payment-form .spinner:before,
#payment-form .spinner:after {
  border-radius: 50%;
}
#payment-form .spinner {
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
#payment-form .spinner:before,
#payment-form .spinner:after {
  position: absolute;
  content: "";
}
#payment-form .spinner:before {
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
#payment-form .spinner:after {
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
  #payment-form form {
    width: 80vw;
  }
}

</style>
@endsection

@section('content')
<div class="min-vh-100">
  <div class="container mt-3">
    <div class="row">
      <div class="col">
        <div class="container bg-light rounded-2 shadow-sm py-3">
              <h3>Delivery Information</h3>
              <div class="form-floating mb-3">
                <input type="text" class="form-control deliveryInfo" id="deliveryInfo__receiverName" placeholder="name@example.com" required>
                <label for="delivery__receiverName">Receiver Name...</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control deliveryInfo" id="deliveryInfo__receiverPhoneNumber" placeholder="phone" required>
                <label for="delivery__receiverPhoneNumber">Phone Number...</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control deliveryInfo" id="deliveryInfo__address" placeholder="address" required>
                <label for="delivery__address">Delivery address...</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control deliveryInfo" id="deliveryInfo__customerNote" placeholder="note">
                <label for="delivery__customerNote">Customer note...</label>
              </div>
        </div>
      </div>
      <div class="col">
        <div class="container bg-light rounded-2 shadow-sm py-3">
          <div class="row">
            <h3>Cart Information</h3>
            <div class="container">
              @if ($cart->sum_qty() > 0)
                    @foreach ($cart->cartItems as $itemId => $groupItem)
                        <div class="cart_groupItem row mb-2" id="{{ $itemId }}__groupItem">
                            <div class="col-2">
                                <img src="{{ asset("uploads/product/" . $groupItem['item']['product_image']) }}" 
                                        class="groupItem__item__product_image"
                                        id="{{ $itemId }}__groupItem__item__product_image"
                                        alt="ProductImage" 
                                        style="max-height: 60px; max-width: 60px">
                            </div>
                            <div class="col-6 groupItem__item__product_name"
                                    id="{{ $itemId }}__groupItem__item__product_name"
                                    style="font-size: 0.7rem">
                                {{ $groupItem['item']['product_name'] }}
                            </div>
                            <div class="col">
                                    <input  type="number" 
                                            class="border border-secondary groupItem__qty" 
                                            id="{{ $itemId }}__groupItem__qty"
                                            value="{{ $groupItem['qty'] }}" 
                                            style="width: 33px; text-align: center;" 
                                            disabled/>
                            </div>
                            <div class="col-2 d-flex flex-column align-items-end">
                                <div style="font-size: 0.8rem">
                                        <span class="groupItemSubtotal" 
                                                id="{{ $itemId }}__groupItemSubtotal">
                                            {{ number_format($cart->sum_itemPrice($itemId), 0, ",", ".") }} <u>đ</u>
                                        </span>
                                </div>
                                <div style="font-size: 0.7rem">
                                        <span class="groupItem__item__product_price" 
                                                id="{{ $itemId }}__groupItem__item__product_price">
                                            {{ number_format($groupItem['item']['product_price'], 0, ",", ".") }}  đ/Unit
                                        </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <hr>
              @else
                  <div class="row">
                          <h3>No Items in Cart</h3>
                  </div>
              @endif
            </div>  
          </div>
          
          <div class="row">
            <div class="container">
              <div class="row">
                <div class="col">
                    <h3>Checkout</h3>
                    Total: <strong id="cartTotalPrice">{{ number_format($cart->sum_amount(), 0, ",", ".") }} <u>đ</u></strong>
                    <h6>Please choose one of payment methods below</h6>
                    <input type="radio" class="btn-check" name="paymentOptions" id="radio__paymentMethod__cash" autocomplete="off">
                    <label class="btn btn-outline-success paymentMethodChoice" for="paymentMethod__cash" id="label__paymentMethod__cash">Cash On Delivery</label>

                    <input type="radio" class="btn-check" name="paymentOptions" id="radio__paymentMethod__card" autocomplete="off" checked>
                    <label class="btn btn-success paymentMethodChoice" for="paymentMethod__card" id="label__paymentMethod__card">Credit Card</label>
                    <br>
                    <div id="cardPayment__wraper">
                      <form id="payment-form">
                        {{-- @csrf --}}
                        <div id="card-element"><!--Stripe.js injects the Card Element--></div>
                        <button id="submit">
                          <div class="spinner hidden" id="spinner"></div>
                          <span id="button-text">Place an order and Pay now</span>
                        </button>
                        <p id="card-error" class="alert alert-danger hidden" role="alert"></p>
                        <p class="result-message hidden alert alert-success">
                          Order and Payment succeeded!
                          <br>
                          You can review it in <a href="">Your order management</a>
                        </p>

                      </form>
                      <div class="btn-group">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                          Test Card Numbers with any ExpDate, CVC and Postal code
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickable">
                          <li><a class="dropdown-item">Payment succeeds - 4242 4242 4242 4242</a></li>
                          <li><a class="dropdown-item">Authentication required - 4000 0025 0000 3155</a></li>
                          <li><a class="dropdown-item">Payment is declined - 4000 0000 0000 9995</a></li>
                        </ul>
                      </div>
                    </div>
                    <button class="btn btn-primary hidden" id="placeOrder">Place an order >></button>
                    <p class="orderComplete-message hidden alert alert-success">
                      Order succeeded!
                      <br>
                      You can review it in <a href="">Your order management</a>
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
    
<script src="https://js.stripe.com/v3/"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
<script src="{{ asset('js/QT/checkout.js') }}" defer></script>
    
@endsection


