@extends('layouts.app')

@section('content')
    <div class="min-vh-100 mb-3">
        <div class="d-flex justify-content-between mb-3 p-3">
            <h2>Admin manage rating & comment</h2>
            <div>
                <input type="radio" class="btn-check" name="options-outlined" id="1" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="1">Waiting check</label>

                <input type="radio" class="btn-check" name="options-outlined" id="2" autocomplete="off">
                <label class="btn btn-outline-primary" for="2">Accepted</label>

                <input type="radio" class="btn-check" name="options-outlined" id="3" autocomplete="off">
                <label class="btn btn-outline-primary" for="3">Rejected</label>
            </div>
        </div>

        <div class="container bg-light rounded-2 shadow-sm py-3" style="font-size: 0.75rem">
            <div class="row fw-bold">
                <div class="col">Comment Id</div>
                <div class="col">Order Id</div>
                <div class="col">Customer Id</div>
                <div class="col">Product Id</div>
                <div class="col">Created At</div>
                <div class="col">Rating points</div>
                <div class="col-3">Customer Comment</div>
                <div class="col">Action</div>
            </div>
            <hr>
            <div class="row mb-2">
                <div class="col"><a href="">1 <i class="fas fa-sign-in-alt"></i></a></div>
                <div class="col"><a href="">OD01</a></div>
                <div class="col"><a href="">User001</a></div>
                <div class="col"><a href="">Laptop001</a></div>
                <div class="col">16:00, Friday, 02 Jul 2021</div>
                <div class="col">
                    <img src="{{ asset('images/RatingStar.png') }}" style="max-height: 20px">
                </div>
                <div class="col-3">
                    <textarea class="form-control">Users comments 1...</textarea>
                </div>
                <div class="col" style="color: orange">
                    <select class="form-select form-select-sm">
                        <option value="1">Waiting</option>
                        <option value="2">Accept</option>
                        <option value="3">Reject</option>
                    </select>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col"><a href="">2 <i class="fas fa-sign-in-alt"></i></a></div>
                <div class="col"><a href="">OD02</a></div>
                <div class="col"><a href="">User002</a></div>
                <div class="col"><a href="">Laptop002</a></div>
                <div class="col">17:00, Friday, 02 Jul 2021</div>
                <div class="col">
                    <img src="{{ asset('images/RatingStar.png') }}" style="max-height: 20px">
                </div>
                <div class="col-3">
                    <textarea class="form-control">Users comments 2...</textarea>
                </div>
                <div class="col" style="color: orange">
                    <select class="form-select form-select-sm">
                        <option value="1">Waiting</option>
                        <option value="2">Accept</option>
                        <option value="3">Reject</option>
                    </select>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col"><a href="">3 <i class="fas fa-sign-in-alt"></i></a></div>
                <div class="col"><a href="">OD01</a></div>
                <div class="col"><a href="">User001</a></div>
                <div class="col"><a href="">Laptop005</a></div>
                <div class="col">16:10, Friday, 02 Jul 2021</div>
                <div class="col">
                    <img src="{{ asset('images/RatingStar.png') }}" style="max-height: 20px">
                </div>
                <div class="col-3">
                    <textarea class="form-control">Users comments 3...</textarea>
                </div>
                <div class="col" style="color: orange">
                    <select class="form-select form-select-sm">
                        <option value="1">Waiting</option>
                        <option value="2">Accept</option>
                        <option value="3">Reject</option>
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