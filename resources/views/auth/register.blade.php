@extends('base_layout')
@section('title', 'Register')
@section('scss')
    @vite(['resources/scss/auth/auth.scss'])
@endsection

@section('content')
    <div class="register-form d-flex align-items-center justify-content-center">
        <form class="form" method="post" action="{{ route('register.auth.post') }}">

            @csrf
            <h2 class="text-danger">Đăng ký</h2>
            @if (!empty($errors))
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif
            <div class="row mb-4 align-items-center">
                <label for="" class="col-3 col-md-3 col-lg-3 col-sm-12">First name</label>
                <input type="text" class="col-9 col-md-9 col-lg-9" name="first_name">
            </div>
            <div class="row mb-4 align-items-center">
                <label for="" class="col-3 col-md-3 col-lg-3 col-sm-12">Last name</label>
                <input type="text" class="col-9 col-md-9 col-lg-9" name="last_name">
            </div>
            <div class="row mb-4 align-items-center">
                <label for="" class="col-3 col-md-3 col-lg-3 col-sm-12">Email</label>
                <input type="text" class="col-9 col-md-9 col-lg-9" name="email" placeholder="example@gmail.com">
            </div>
            <div class="row mb-4 align-items-center">
                <label for="" class="col-3 col-md-3 col-lg-3 col-sm-12">Password</label>
                <input type="password" class="col-9 col-md-9 col-lg-9" name="password">
            </div>

            <div class="row mb-4 justify-content-center ">
                <button class="btn btn-danger" type="submit">Đăng ký</button>
            </div>
            <div class="text-center mb-3">
                <span>Bạn đã có tài khoản?</span>
                <a href="{{ route('login.auth') }}" class="text-primary"> Đăng nhập ngay!</a>
            </div>
        </form>
    </div>
@endsection
