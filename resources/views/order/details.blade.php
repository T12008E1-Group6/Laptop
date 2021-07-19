@extends('layouts.QTuser')

@section('internalCSS')
    <style>
        .rating span {
            cursor: pointer;
            font-size: 25px;
            color: black;
            opacity: .5;
            display: inline-block;
        }

        span.ratedStar {
            color: #ff0;
            opacity: 1;
            text-shadow: 0 0 30px #ffc;
        }

        .hidden {
            display: none;
        }

    </style>
@endsection

@section('content')
    <div class="min-vh-100 mb-3">
        <div class="container p-3">
            <div class="row">
                <div class="col">
                    <h4>Order Id: <span id="orderId">{{ $order['id'] }}</span></h4>
                    <h4>User Id: <span id="userId">{{ $order->user->id }}</span></h4>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="container bg-light rounded-2 shadow-sm">
                        <h4>Delivery Information</h4>
                        Receiver: {{ $order['delivery_info']['receiverName'] }}<br>
                        Delivery Type: Standard<br>
                        Address: {{ $order['delivery_info']['address'] }}<br>
                        Phone: {{ $order['delivery_info']['receiverPhoneNumber'] }} <br>
                        Customer Note: {{ $order['delivery_info']['customerNote'] }}
                    </div>
                </div>
                <div class="col">
                    <div class="container bg-light rounded-2 shadow-sm">
                        <h4>Order Information</h4>
                        Order status: {{ $order['status'] }}<br>
                        Created at: {{ $order['created_at'] }}
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <div class="container bg-light rounded-2 shadow-sm">
                        <div class="row mb-3">
                            <div class="col">
                                <h4>Products Information</h4>
                            </div>
                        </div>
                        @foreach ($order->products as $product)
                            <div class="row mb-3 itemWrapper" id="id--{{ $product->product_id }}__itemWrapper">
                                <div class="col">
                                    <img src="{{ asset('uploads/product/' . $product->product_image) }}"
                                        alt="ProductImage" style="max-height: 90px; max-width: 90px">
                                </div>
                                <div class="col-3" style="font-size: 0.8rem">{{ $product->product_name }}</div>
                                <div class="col text-center">
                                    <input type="text" class="border border-primary" value="@php
                                        $itemQty = 0;
                                        foreach ($order['cart_info']['items'] as $item) {
                                            if ($item['id'] == $product->product_id) {
                                                $itemQty = $item['qty'];
                                                break;
                                            }
                                        }
                                        echo $itemQty;
                                    @endphp"
                                        style="width: 33px; text-align: center;" disabled />
                                </div>
                                <div class="col">
                                    <div class="text-end">
                                        {{ number_format($itemQty * $product->product_price, 0, ',', '.') }} đ</div>
                                    <div class="text-end" style="font-size: 0.7rem">
                                        {{ number_format($product->product_price, 0, ',', '.') }} đ/Unit</div>
                                </div>
                                @if ($order['status'] == 'complete' || $order['status'] == 'Complete')
                                    <div class="col-2">
                                        <div class="hidden" id="id--{{ $product->product_id }}__ratingPoint">@php
                                            $ratingPoint = '';
                                                foreach($order->comment_ratings as $comment_rating) {
                                                    if ($comment_rating->product_id == $product->product_id) {
                                                        $ratingPoint = $comment_rating->rating_points;
                                                    }
                                                }
                                            echo $ratingPoint;
                                        @endphp</div>
                                        <div class="rating" id="div-{{ $product->product_id }}__rating">
                                            <span class="@php
                                                if ($ratingPoint >= 1) echo 'ratedStar'
                                            @endphp" id="id--{{ $product->product_id }}__rating__star1" name='1'>★</span>
                                                <span class="@php
                                                if ($ratingPoint >= 2) echo 'ratedStar'
                                            @endphp" id="id--{{ $product->product_id }}__rating__star2" name='2'>★</span>
                                                <span class="@php
                                                if ($ratingPoint >= 3) echo 'ratedStar'
                                            @endphp" id="id--{{ $product->product_id }}__rating__star3" name='3'>★</span>
                                                <span class="@php
                                                if ($ratingPoint >= 4) echo 'ratedStar'
                                            @endphp" id="id--{{ $product->product_id }}__rating__star4" name='4'>★</span>
                                                <span class="@php
                                                if ($ratingPoint == 5) echo 'ratedStar'
                                            @endphp" id="id--{{ $product->product_id }}__rating__star5" name='5'>★</span>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <textarea class="comment" id="id--{{ $product->product_id }}__comment"
                                            placeholder="Leave a comment here..." cols="30" rows="3">@php
                                                $comment = '';
                                                foreach($order->comment_ratings as $comment_rating) {
                                                    if ($comment_rating->product_id == $product->product_id) {
                                                        $comment = $comment_rating->comment_contents;
                                                    }
                                                }
                                                echo $comment;
                                            @endphp</textarea>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="container bg-light rounded-2 shadow-sm">
                        <div class="row">
                            <div class="col">
                                <h4>Payment method</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-between">
                                <div>Pay by <span class="badge badge-info">{{ $order['payment_info']['method'] }}</span>
                                </div>
                                <div>Total: <strong>{{ $order['payment_info']['amount'] }}</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/QT/order-details.js') }}"></script>
@endsection
