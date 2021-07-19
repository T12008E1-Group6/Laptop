@extends('layouts.app')

@section('content')
<div class="min-vh-100 mb-3">
  <div class="container">
    <div class="row">
        <div class="col">
            <h6>Order Id: OD210702-0001</h6>
        </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="container bg-light rounded-2 shadow-sm py-3">
              <h4>Delivery Information</h4>
              Receiver: Thanh<br>
              Delivery Type: Standard<br>
              Address: 237 dang thuy tram, p13, binh thanh<br>
              Phone: 0932067777
        </div>
      </div>
      <div class="col">
        <div class="container bg-light rounded-2 shadow-sm py-3">
              <h4>Order Information</h4>
              Order status: Delivered<br>
              Created at: 16:00, Friday, 02 Jul 2021
        </div>
      </div>
    </div>

      <div class="row">
          <div class="col">
              <div class="container bg-light rounded-2 shadow-sm py-3">
                  <h4>Products Information</h4>
                  <div class="row mb-2">
                    <div class="col-1">
                        <img src="{{ asset('uploads/product/Laptop Apple MacBook Air M1 2020.jpg') }}" alt="ProductImage" style="max-height: 90px; max-width: 90px">
                    </div>
                    <div class="col-4" style="font-size: 0.7rem">Laptop Apple MacBook Air M1 2020 8GB/512GB/Space Grey (MGN73SA/A)</div>
                    <div class="col">
                        <div class="btn-group" role="group">
                            <input id="" type="text" class="border border-primary" value="1" style="width: 33px; text-align: center;" disabled/>
                        </div>
                    </div>
                    <div class="col d-flex flex-column align-items-end">
                        <div id="">3,299,000 đ</div>
                        <div style="font-size: 0.7rem">3,299,000 đ/Unit</div>
                    </div>
                    <div class="col">
                        <img src="{{ asset('images/RatingStar.png') }}" style="max-height: 20px">
                    </div>
                    <div class="col-3">
                        <textarea>Users leave their comments here.</textarea>
                    </div>
                </div>   
            </div>
      </div>

    <div class="row">
      <div class="col">
        <div class="container bg-light rounded-2 shadow-sm py-3">
            <h4>Payment method</h4>
            <hr>
            <div class="d-flex justify-content-between">
                <div>Pay by Card</div>
                <div>3,299,000 đ</div>
            </div>
        </div>
      </div>
    </div>
    </div>
</div>
    
    

    
@endsection