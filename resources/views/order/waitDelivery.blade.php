@extends('layouts.app')

@section('content')
    <div class="min-vh-100 mb-3">
        <div class="d-flex justify-content-between mb-3">
            <h2>Customer manage orders</h2>
            <div>
                <input type="radio" class="btn-check" name="options-outlined" id="1" autocomplete="off" checked>
                <label class="btn btn-outline-success" for="1">Waiting payment</label>

                <input type="radio" class="btn-check" name="options-outlined" id="2" autocomplete="off">
                <label class="btn btn-outline-success" for="2">Waiting delivery</label>

                <input type="radio" class="btn-check" name="options-outlined" id="3" autocomplete="off">
                <label class="btn btn-outline-success" for="3">Complete</label>
            </div>
        </div>

        <div class="container bg-light rounded-2 shadow-sm" style="font-size: 0.7rem">
            <div class="row fw-bold">
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
            <div class="row">
                <div class="col-2"><a href="">OD210207-0001 <i class="fas fa-sign-in-alt"></i></a></div>
                <div class="col-2">16:00, Friday, 02 Jul 2021</div>
                <div class="col-5">Laptop Apple MacBook Pro M1 2020 16GB/1TB SSD/Space Grey (Z11C000CJ) and 1 orther product</div>
                <div class="col">49840000</div>
                <div class="col" style="color: orange">Waiting delivery</div>
            </div>
            <div class="row">
                <div class="col-2"><a href="">OD210207-0002 <i class="fas fa-sign-in-alt"></i></a></div>
                <div class="col-2">16:50, Friday, 02 Jul 2021</div>
                <div class="col-5">Laptop Lenovo Legion 5 15IMH05 i7 10750H/8GB/256GB+1TB/120Hz/4GB GTX1650/Win10 (82AU0051VN)</div>
                <div class="col">25990000</div>
                <div class="col" style="color: orange">Waiting delivery</div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
@endsection