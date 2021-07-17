@extends('layouts.QTuser')

@section('internalCSS')
    <style>
        a.orderStage {
            text-decoration: none;
            color: inherit;
        }
    </style>
@endsection
@section('content')
    <div class="min-vh-100 mb-3">
        <div class="d-flex justify-content-between m-4">
            <h4>Your orders</h4>
            <div>
                <input type="radio" class="btn-check" name="options-outlined" id="4" autocomplete="off" {{ ($orderStage == 'all') ? 'checked' : '' }}>
                <label class="btn btn-outline-success" for="4"><a class="orderStage orderStage--all" href="{{ route('user.orders', ['stage' => 'all']) }}" >All</a></label>

                <input type="radio" class="btn-check" name="options-outlined" id="2" autocomplete="off" {{ ($orderStage == 'waiting-delivery') ? 'checked' : '' }}>
                <label class="btn btn-outline-success" for="2"><a class="orderStage orderStage--waitingDelivery" href="{{ route('user.orders', ['stage' => 'waiting-delivery']) }}">Waiting delivery</a></label>

                <input type="radio" class="btn-check" name="options-outlined" id="3" autocomplete="off" {{ ($orderStage == 'complete') ? 'checked' : '' }}>
                <label class="btn btn-outline-success" for="3"><a class="orderStage orderStage--complete" href="{{ route('user.orders', ['stage' => 'complete']) }}" >Complete</a></label>
            </div>
        </div>

        <div class="container bg-light rounded-2 shadow-sm" style="font-size: 0.7rem">
            <div class="row fw-bold" style="font-size: 1rem">
                <div class="col-2">
                    Order Id
                    <div class="fw-normal">(Click to see details)</div>
                </div>
                <div class="col-2">Created At</div>
                <div class="col-5">Product Names</div>
                <div class="col">Total price</div>
                <div class="col">Status</div>
            </div>
            <hr>
            
            @foreach ($userOrders as $order)
                <div class="row mt-3">
                    <div class="col-2"><a href="{{ route('orders.show', ['order' => $order['id']]) }}">{{ $order['id'] }} <i class="fas fa-sign-in-alt"></i></a></div>
                    <div class="col-2">{{ $order['created_at'] }}</div>
                    <div class="col-5">
                        @if ($order['cart_info']['totalQty'] > 1)
                            {{ $order->products[0]->product_name }} <strong>other <span class="badge badge-info">{{ $order['cart_info']['totalQty'] - 1 }}</span> products</strong>
                        @else
                            {{ $order->products[0]->product_name }}
                        @endif
                    </div>
                    <div class="col">{{ $order['payment_info']['amount'] }}</div>
                    @if ($order['status'] == 'wait--delivery')
                        <div class="col" style="color: darkorange">{{ $order['status'] }}</div>
                    @else
                        <div class="col" style="color: darkgreen">{{ $order['status'] }}</div>
                    @endif
                </div>
            @endforeach
            
            <div class="row pt-3">
                <div class="col d-flex justify-content-center">
                   {{ $userOrders -> links() }}
                </div>
            </div>
        </div>
    </div>
@endsection