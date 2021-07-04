@extends('layouts.app')

@section('content')
    <div class="min-vh-100 mb-3">
        <div class="d-flex justify-content-between mb-3 p-3">
            <h2>Admin manage orders</h2>
            <div>
                <input type="radio" class="btn-check" name="options-outlined" id="1" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="1">Waiting payment</label>

                <input type="radio" class="btn-check" name="options-outlined" id="2" autocomplete="off">
                <label class="btn btn-outline-primary" for="2">Waiting delivery</label>

                <input type="radio" class="btn-check" name="options-outlined" id="3" autocomplete="off">
                <label class="btn btn-outline-primary" for="3">Complete</label>
            </div>
        </div>

        <div class="container bg-light rounded-2 shadow-sm py-3" style="font-size: 0.75rem">
            <div class="row fw-bold">
                <div class="col-2">
                    Order Id
                    <div class="fw-normal">(Click to see details)</div>
                </div>
                <div class="col">Customer Id</div>
                <div class="col">Created At</div>
                <div class="col-5">Product Names</div>
                <div class="col">Total price</div>
                <div class="col-2">Status</div>
            </div>
            <hr>
            <div class="row mb-2">
                <div class="col-2"><a href="">OD210207-0001 <i class="fas fa-sign-in-alt"></i></a></div>
                <div class="col">customer01</div>
                <div class="col">16:00, Friday, 02 Jul 2021</div>
                <div class="col-5">Laptop Apple MacBook Pro M1 2020 16GB/1TB SSD/Space Grey (Z11C000CJ) and 1 orther product</div>
                <div class="col">49,840,000 đ</div>
                <div class="col-2" style="color: orange">
                    <select class="form-select form-select-sm">
                        <option value="1">Waiting payment</option>
                        <option value="2">Waiting delivery</option>
                        <option value="3">Delivered</option>
                        <option value="4">Cancelled</option>
                    </select>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-2"><a href="">OD210207-0002 <i class="fas fa-sign-in-alt"></i></a></div>
                <div class="col">customer02</div>
                <div class="col">16:50, Friday, 02 Jul 2021</div>
                <div class="col-5">Laptop Lenovo Legion 5 15IMH05 i7 10750H/8GB/256GB+1TB/120Hz/4GB GTX1650/Win10 (82AU0051VN)</div>
                <div class="col">25,990,000 đ</div>
                <div class="col-2" style="color: orange">
                    <select class="form-select form-select-sm">
                        <option value="1">Waiting payment</option>
                        <option value="2">Waiting delivery</option>
                        <option value="3">Delivered</option>
                        <option value="4">Cancelled</option>
                    </select>
                </div>
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

            <div class="row mb-2">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-success">Confirm changes</button>
                </div>
            </div>

        </div>
    </div>
@endsection