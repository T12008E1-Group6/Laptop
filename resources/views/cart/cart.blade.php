@extends('layouts.QTuser')

@section('title')
    Shopping Cart
@endsection

@section('internalCSS')
    <style>
        .hidden {
            display: none;
        }

    </style>
@endsection

@section('content')
    <div class="container min-vh-100 mb-3">
        <h2>Your Cart</h2>
        <div class="container bg-light rounded-2 shadow-sm" id="cart">
            @if ($cart->sum_qty() > 0)
                @foreach ($cart->cartItems as $itemId => $groupItem)
                    <div class="row mb-2" id="{{ $itemId }}__groupItem">
                        <div class="col-2">
                            <img src="{{ asset('uploads/product/' . $groupItem['item']['product_image']) }}"
                                class="groupItem__item__product_image"
                                id="{{ $itemId }}__groupItem__item__product_image" alt="ProductImage"
                                style="max-height: 100px; max-width: 100px">
                        </div>
                        <div class="col-5 groupItem__item__product_name"
                            id="{{ $itemId }}__groupItem__item__product_name">
                            {{ $groupItem['item']['product_name'] }}
                        </div>
                        <div class="col">
                            <div class="btn-group" role="group">
                                <button id="{{ $itemId }}__btnAdjustQty--minus" type="button"
                                    class="btn btn-outline-primary btnAdjustQty btnAdjustQty--minus">-</button>
                                <input type="number" class="border border-primary groupItem__qty"
                                    id="{{ $itemId }}__groupItem__qty" value="{{ $groupItem['qty'] }}"
                                    style="width: 33px; text-align: center;" readonly />
                                <button id="{{ $itemId }}__btnAdjustQty--plus" type="button"
                                    class="btn btn-outline-primary btnAdjustQty btnAdjustQty--plus">+</button>
                            </div>
                        </div>
                        <div class="col-2 d-flex flex-column align-items-end">
                            <div>
                                <span class="groupItemSubtotal" id="{{ $itemId }}__groupItemSubtotal">
                                    {{ number_format($cart->sum_itemPrice($itemId), 0, ',', '.') }} <u>đ</u>
                                </span>
                            </div>
                            <div style="font-size: 0.7rem">
                                <span class="groupItem__item__product_price"
                                    id="{{ $itemId }}__groupItem__item__product_price">
                                    {{ number_format($groupItem['item']['product_price'], 0, ',', '.') }} đ/Unit
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <button class="groupItem--remove" id="{{ $itemId }}__groupItem--remove"
                                style="font-size: 1.5rem"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>

                @endforeach
                <hr>
                <div class="row d-flex justify-content-end">
                    <div class="col-3">
                        Total:
                        <strong id="cartTotalPrice">{{ number_format($cart->sum_amount(), 0, ',', '.') }}
                            <u>đ</u></strong>
                    </div>
                </div>
                <div class="row d-flex justify-content-end">
                    <div class="col-3">
                        <a href="{{ route('checkout') }}" class="btn btn-success" id="checkoutBtn">Checkout</a>
                        <h2 class="emptyCart hidden alert alert-warning">No Items in Cart</h2>
                    </div>
                </div>
            @else
                <div class="row">
                    <h2>No Items in Cart</h2>
                </div>
            @endif
        </div>
    </div>

    <script type="module">
        import Cart from '{{ asset('js/QT/Cart.js') }}';
        var cart = new Cart(<?php echo json_encode($cart); ?>);
        // console.log(cart);

        document.querySelectorAll('.btnAdjustQty').forEach((btnAdjustQty) => {
            var targetId = btnAdjustQty.getAttribute('id');
            var itemId = targetId.slice(0, targetId.indexOf('__')); //get the itemId from HTML element id.
            btnAdjustQty.addEventListener('click', () => {
                if (btnAdjustQty.classList.contains('btnAdjustQty--minus')) {
                    if (cart.cartItems[itemId].qty > 1) {
                        cart.minus_itemQty(itemId).render_itemSubtotal(itemId);
                    } else {
                        cart.minus_itemQty(itemId);
                    }
                } else {
                    cart.plus_itemQty(itemId).render_itemSubtotal(itemId);
                }
                cart.render_cartTotalQty().render_cartTotalPrice();
            });
        })

        document.querySelectorAll('.groupItem--remove').forEach(btnRemove => {
            var targetId = btnRemove.getAttribute('id');
            var itemId = targetId.slice(0, targetId.indexOf('__'));
            btnRemove.addEventListener('click', () => {
                cart.remove(itemId).render_cartTotalQty().render_cartTotalPrice();

            })
        })

        window.onbeforeunload = function() {
            cart.save();
        }
    </script>
@endsection
