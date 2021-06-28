@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($laptops->chunk(4) as $laptopChunk)
        <div class="row">
            @foreach ($laptopChunk as $laptop)
                <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset("uploads/product/$laptop->product_image") }}" class="card-img-top" alt="laptopImage">
                        <div class="card-body">
                            <h5 class="card-title">{{ $laptop->product_name }}</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="price">{{ $laptop->product_price }} đ</div>
                                <a href="{{ route('cart.addToCart', ['id' => $laptop->product_id]) }}" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>    
    @endforeach
</div>

@endsection