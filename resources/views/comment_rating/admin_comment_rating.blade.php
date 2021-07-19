@extends('layouts.QTuser')
@section('internalCSS')
    <style>
        .rating span {
            cursor: pointer;
            font-size: 15px;
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

        a.status {
            text-decoration: none;
            color: inherit;
        }

        .waiting-check {
            color: darkorange;
        }

        .approved {
            color: darkgreen;
        }

        .rejected {
            color: red;
        }

    </style>
@endsection
@section('content')
    <div class="min-vh-100 mb-3">
        <div class="d-flex justify-content-between mb-3 p-3">
            <h2>Admin manage rating & comment</h2>
            <div>
                <input type="radio" class="btn-check" name="options-outlined" id="1" autocomplete="off"
                    {{ $status == 'all' ? 'checked' : '' }}>
                <label class="btn btn-outline-success" for="1"><a class="status status--all"
                        href="{{ route('admin.comment-ratings', ['status' => 'all']) }}">All</a></label>

                <input type="radio" class="btn-check" name="options-outlined" id="4" autocomplete="off"
                    {{ $status == 'waiting-check' ? 'checked' : '' }}>
                <label class="btn btn-outline-success" for="4"><a class="status status--waiting-check"
                        href="{{ route('admin.comment-ratings', ['status' => 'waiting-check']) }}">Waiting
                        Check</a></label>

                <input type="radio" class="btn-check" name="options-outlined" id="2" autocomplete="off"
                    {{ $status == 'approved' ? 'checked' : '' }}>
                <label class="btn btn-outline-success" for="2"><a class="status status--waitingDelivery"
                        href="{{ route('admin.comment-ratings', ['status' => 'approved']) }}">Approved</a></label>

                <input type="radio" class="btn-check" name="options-outlined" id="3" autocomplete="off"
                    {{ $status == 'rejected' ? 'checked' : '' }}>
                <label class="btn btn-outline-success" for="3"><a class="status status--rejected"
                        href="{{ route('admin.comment-ratings', ['status' => 'rejected']) }}">Rejected</a></label>
            </div>
        </div>

        <div class="container bg-light rounded-2 shadow-sm py-3" style="font-size: 0.75rem">
            <div class="row fw-bold">
                <div class="col">Comment_rating Id</div>
                <div class="col-3">
                    Ralated informations
                </div>
                <div class="col">Created At</div>
                <div class="col">Rating points</div>
                <div class="col-3">Customer Comment</div>
                <div class="col-2">Admin Action</div>
            </div>
            <hr>

            @foreach ($comment_ratings as $comment_rating)
            
                <div class="row my-3">
                    <div class="col">
                        {{ $comment_rating['id'] }}
                    </div>
                    <div class="col-4">
                        <b>Customer Id:</b> {{ $comment_rating['user_id'] }} , <b>name:</b> {{ $comment_rating->user->name }}
                        <br/>
                        <b>Phone Number:</b> {{ $comment_rating->user->phone }}
                        <br/>
                        <i>rate and comment on</i>
                        <br/>
                        <a href="{{ route('orders.show', ['order' => $comment_rating['order_id']]) }}">
                            <b>Order Id:</b> {{ $comment_rating['order_id'] }} <i class="fas fa-sign-in-alt"></i>
                        </a>
                        <br/>
                        <b>Product Id:</b> {{ $comment_rating['product_id'] }}, <b>Name:</b> {{ $comment_rating->product->product_name }}
                        <br/>
                        <b>Created_at: </b> {{ $comment_rating['created_at'] }}
                    </div>
                        
                    <div class="col">
                        <div class="rating" id="id--{{ $comment_rating['order_id'] . "--" . $comment_rating['product_id'] }}__rating">
                            <span class="@php
                                if ($comment_rating['rating_points'] >= 1) echo 'ratedStar'
                            @endphp" id="id--{{ $comment_rating['order_id'] . "--" . $comment_rating['product_id'] }}__rating__star1" name='1'>★</span>
                                <span class="@php
                                if ($comment_rating['rating_points'] >= 2) echo 'ratedStar'
                            @endphp" id="id--{{ $comment_rating['order_id'] . "--" . $comment_rating['product_id'] }}__rating__star2" name='2'>★</span>
                                <span class="@php
                                if ($comment_rating['rating_points'] >= 3) echo 'ratedStar'
                            @endphp" id="id--{{ $comment_rating['order_id'] . "--" . $comment_rating['product_id'] }}__rating__star3" name='3'>★</span>
                                <span class="@php
                                if ($comment_rating['rating_points'] >= 4) echo 'ratedStar'
                            @endphp" id="id--{{ $comment_rating['order_id'] . "--" . $comment_rating['product_id'] }}__rating__star4" name='4'>★</span>
                                <span class="@php
                                if ($comment_rating['rating_points'] == 5) echo 'ratedStar'
                            @endphp" id="id--{{ $comment_rating['order_id'] . "--" . $comment_rating['product_id'] }}__rating__star5" name='5'>★</span>
                        </div>
                    </div>

                    <div class="col-3">
                        <textarea class="comment" id="id--{{ $comment_rating['id'] }}__comment"
                            cols="30" rows="3" readonly>{{ $comment_rating['comment_contents'] }}</textarea>
                    </div>
                    <div class="col-2">
                        <select class="form-select form-select-sm comment_rating__status @php
                            if ($comment_rating['status'] == 'waiting-check') {
                                echo 'waiting-check';
                            } else if ($comment_rating['status'] == 'approved') {
                                echo 'approved';
                            } else {
                                echo 'rejected';
                            }
                        @endphp"
                            id="id--{{ $comment_rating['id'] }}__status">
                            <option class="waiting-check" value="waiting-check" @php
                                if ($comment_rating['status'] == 'waiting-check') {
                                    echo 'selected';
                                }
                            @endphp>waiting-check</option>
                            <option class="approved" value="approved" @php
                                if ($comment_rating['status'] == 'approved') {
                                    echo 'selected';
                                }
                            @endphp>approved</option>
                            <option class="rejected" value="rejected" @php
                                if ($comment_rating['status'] == 'rejected') {
                                    echo 'selected';
                                }
                            @endphp>rejected</option>
                        </select>
                    </div>
                </div>
                <hr>
            @endforeach

            <div class="row pt-3">
                <div class="col d-flex justify-content-center">
                    {{ $comment_ratings->links() }}
                </div>
            </div>

            <div class="row mb-2">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-success" id="confirmChangeStatus" disabled>
                        Confirm changes</button>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('js/QT/admin-comment-ratings.js') }}"></script>
@endsection
