@extends('layouts.QTuser')

@section('internalCSS')
    <style>
        a.orderStage {
            text-decoration: none;
            color: inherit;
        }

        .waitDelivery {
            color: darkorange;
        }

        .complete {
            color: darkgreen;
        }

    </style>
@endsection
@section('content')
    <div class="min-vh-100 mb-3">
        <div class="d-flex justify-content-between m-4">
            <h4>Admin manage orders</h4>
            <div>
                <input type="radio" class="btn-check" name="options-outlined" id="4" autocomplete="off"
                    {{ $orderStage == 'all' ? 'checked' : '' }}>
                <label class="btn btn-outline-success" for="4"><a class="orderStage orderStage--all"
                        href="{{ route('admin.orders', ['stage' => 'all']) }}">All</a></label>

                <input type="radio" class="btn-check" name="options-outlined" id="2" autocomplete="off"
                    {{ $orderStage == 'waiting-delivery' ? 'checked' : '' }}>
                <label class="btn btn-outline-success" for="2"><a class="orderStage orderStage--waitingDelivery"
                        href="{{ route('admin.orders', ['stage' => 'waiting-delivery']) }}">Waiting delivery</a></label>

                <input type="radio" class="btn-check" name="options-outlined" id="3" autocomplete="off"
                    {{ $orderStage == 'complete' ? 'checked' : '' }}>
                <label class="btn btn-outline-success" for="3"><a class="orderStage orderStage--complete"
                        href="{{ route('admin.orders', ['stage' => 'complete']) }}">Complete</a></label>
            </div>
        </div>

        <div class="container bg-light rounded-2 shadow-sm p-3" style="font-size: 0.8rem">
            <div class="row fw-bold">
                <div class="col">
                    Order Id
                    <div class="fw-normal">(Click to see details)</div>
                </div>
                <div class="col">Created At</div>
                <div class="col-5">Product Names</div>
                <div class="col">Total price</div>
                <div class="col-3">Status</div>
            </div>
            <hr>

            @foreach ($orders as $order)
                <div class="row my-5">
                    <div class="col"><a
                            href="{{ route('orders.show', ['order' => $order['id']]) }}">{{ $order['id'] }} <i
                                class="fas fa-sign-in-alt"></i></a></div>
                    <div class="col">{{ $order['created_at'] }}</div>
                    <div class="col-5">
                        @if ($order['cart_info']['totalQty'] > 1)
                            {{ $order->products[0]->product_name }} <strong>other <span
                                    class="badge badge-info">{{ $order['cart_info']['totalQty'] - 1 }}</span>
                                products</strong>
                        @else
                            {{ $order->products[0]->product_name }}
                        @endif
                    </div>
                    <div class="col">{{ $order['payment_info']['amount'] }}</div>
                    <div class="col-3">
                        <select class="form-select form-select-sm order__status @php
                            if ($order['status'] == 'wait--delivery') {
                                echo 'waitDelivery';
                            } else {
                                echo 'complete';
                            }
                        @endphp" id="id--{{ $order['id'] }}__status">
                            <option class="waitDelivery" value="wait--delivery" @php
                                if ($order['status'] == 'wait--delivery') {
                                    echo 'selected';
                                }
                            @endphp>Waiting delivery</option>
                            <option class="complete" value="complete" @php
                                if ($order['status'] == 'complete' || $order['status'] == 'Complete') {
                                    echo 'selected';
                                }
                            @endphp>Complete</option>
                        </select>
                    </div>
                </div>
            @endforeach

            <div class="row pt-3">
                <div class="col d-flex justify-content-center">
                    {{ $orders->links() }}
                </div>
            </div>

            <div class="row mb-2">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-success" id="confirmChangeOrdersStatus" disabled>
                        Confirm changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/QT/admin-orders.js') }}"></script>
@endsection
