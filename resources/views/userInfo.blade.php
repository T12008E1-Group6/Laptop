@extends('layouts.app')

@section('content')

    <body>
        <div class="row">
            <div class="col-md-9 title">
                <h1 class="title-link">
                   Thông tin cá nhân
                </h1>
            </div>
        </div>
    <div class="sidebar">
      <a href="/user-orders/all" style="color: red ; font-weight: bold">Đơn hàng</a>
    </div>
    
    <div class="content">
   
    <div class="py-4">
        <!--    Info    -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __("Thông tin cá nhân") }}</div>
                    <div class="card-body">
                        <form action="\userInfo\{{$user->id}}\update" method="POST">
                            @csrf
                            @method('put')
                                    <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ $user->id }}" hidden required autocomplete="name" autofocus>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Họ và tên') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Địa chỉ Email') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
    
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Số điện thoại') }}</label>
    
                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control @error('phone number') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone">
    
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Địa chỉ') }}</label>
    
                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address }}" required autocomplete="address">
    
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    End of Info -->
    </div>
    </div>
    
    </body>
    
@endsection