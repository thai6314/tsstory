@extends('base_layout')
@section('title', 'Login')
@section('scss')
    @vite(['resources/scss/auth/auth.scss'])
@endsection

@section('content')
    <div class="login-form d-flex align-items-center justify-content-center">
        <div class="form">
            <h2 class="text-danger">Đăng nhập</h2>
            <div class="row mb-4 align-items-center">
                <label for="" class="col-3 col-md-3 col-lg-3 col-sm-12">Email</label>
                <input type="text" class="col-9 col-md-9 col-lg-9" placeholder="example@gmail.com">
            </div>
            <div class="row mb-4 align-items-center">
                <label for="" class="col-3 col-md-3 col-lg-3 col-sm-12">Password</label>
                <input type="password" class="col-9 col-md-9 col-lg-9">
            </div>
            <div class="row mb-4 justify-content-center ">
                <button class="btn btn-danger">Login</button>
            </div>
            <div class="text-center mb-3">
                <span>Bạn chưa có tài khoản?</span>
                <a href="{{ route('register.auth.get') }}" class="text-primary"> Đăng ký ngay!</a>
            </div>
        </div>
    </div>
@endsection
