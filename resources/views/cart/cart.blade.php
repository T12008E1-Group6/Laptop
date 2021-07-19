@extends('layouts.app')

@section('content')
    <div class="container bg-light rounded-2 shadow-sm min-vh-100 mb-3">
        <h2>Your Cart</h2>
        <div class="container">
            @if ($cart->totalQty > 0)
                @foreach ($cart->cartItems as $groupItem)
                    @php
                        $itemId = $groupItem['item']['product_id'];
                    @endphp
                    <div class="row mb-2" id="groupItem-{{ $itemId }}">
                        <div class="col-2">
                            <img src="{{ asset("uploads/product/" . $groupItem['item']['product_image']) }}" alt="ProductImage" style="max-height: 100px; max-width: 100px">
                        </div>
                        <div class="col-5">{{ $groupItem['item']['product_name'] }}</div>
                        <div class="col">
                            <div class="btn-group" role="group">
                                <button id="{{ 'minusQty-' . $itemId }}" type="button" class="btn btn-outline-primary minusQty">-</button>
                                <input id="{{ 'Qty-' . $itemId }}" type="text" class="border border-primary" value="{{ $groupItem['qty'] }}" style="width: 33px; text-align: center;" readonly/>
                                <button id="{{ 'plusQty-' . $itemId }}" type="button" class="btn btn-outline-primary plusQty">+</button>
                            </div>
                        </div>
                        <div class="col-2 d-flex flex-column align-items-end">
                            <div id="subtotal-{{ $itemId }}">{{ $groupItem['subtotalPrice'] }} đ</div>
                            <div style="font-size: 0.7rem">{{ $groupItem['price'] }} đ/Unit</div>
                        </div>
                        <div class="col"><a href="{{ route('cart.removeFromCart', ['id' => $itemId]) }}"
                            style="font-size: 1.5rem"
                            ><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                    
                @endforeach
                <hr>
                <div class="row d-flex justify-content-end">
                    <div class="col-3">
                        Total: <strong id="totalPrice">{{ $cart->totalPrice }}</strong> đ
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
    </div>
   
    <script>
        var cart = <?php echo json_encode($cart) ?>;

        document.querySelectorAll('.minusQty').forEach((minus) => {
            var qtyInput = minus.nextSibling.nextSibling;
            var inputId = minus.getAttribute('id');
            var id = inputId.slice(inputId.indexOf('-') + 1);
            var subtotal = document.getElementById('subtotal-' + id);
            var totalPrice = document.getElementById('totalPrice');
            minus.addEventListener('click', () => {
                if (qtyInput.value > 1) {
                    qtyInput.value--;
                    cart.cartItems[id]['qty']--;
                    cart.cartItems[id]['subtotalPrice'] -= cart.cartItems[id]['price'];
                    subtotal.textContent = cart.cartItems[id]['subtotalPrice'];
                    cart.totalQty--;
                    cart.totalPrice -= cart.cartItems[id]['price'];
                    totalPrice.textContent = cart.totalPrice;
                } else if (qtyInput.value == 1) {
                    if(confirm('Do you want to remove this item = ' + id + '?')) {
                        document.getElementById('groupItem-' + id).remove();
                        cart.totalQty--;
                        cart.totalPrice -= cart.cartItems[id]['price'];
                        delete cart.cartItems[id];
                    };

                }
                // console.log(minus.nextSibling.nextSibling);
            })
        })

        document.querySelectorAll('.minusQty').forEach((minus) => {
            var qtyInput = minus.nextSibling.nextSibling;
            var inputId = minus.getAttribute('id');
            var id = inputId.slice(inputId.indexOf('-') + 1);
            var subtotal = document.getElementById('subtotal-' + id);
            var totalPrice = document.getElementById('totalPrice');
            minus.addEventListener('click', () => {
                if (qtyInput.value > 1) {
                    qtyInput.value--;
                    cart.cartItems[id]['qty']--;
                    cart.cartItems[id]['subtotalPrice'] -= cart.cartItems[id]['price'];
                    subtotal.textContent = cart.cartItems[id]['subtotalPrice'];
                    cart.totalQty--;
                    cart.totalPrice -= cart.cartItems[id]['price'];
                    totalPrice.textContent = cart.totalPrice;
                } else if (qtyInput.value == 1) {
                    if(confirm('Do you want to remove this item = ' + id + '?')) {
                        document.getElementById('groupItem-' + id).remove();
                        cart.totalQty--;
                        cart.totalPrice -= cart.cartItems[id]['price'];
                        delete cart.cartItems[id];
                    };

                }
                // console.log(minus.nextSibling.nextSibling);
            })
        })


        function saveCart() {
            cartJSON = JSON.stringify(cart);
            document.cookie = "modifiedCart=" + cartJSON;
        }
    </script>
@endsection