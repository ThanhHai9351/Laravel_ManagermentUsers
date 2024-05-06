@extends('layouts.client')
@section('image')
<img class="mx-5" style="border-radius: 15px" width="150px" height="90px" src="./images/logo.png" alt="">
@endsection
@section('content')
<div class="mt-3 mb-3 p-3 m-auto w-25" style="border: 1px #cdcdcd solid">
    <h3 class="text-center mb-3 mt-2">Login</h3>
    <form action="">
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" value="" placeholder="enter Email ...">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Pass</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Enter pass ...">
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary" type="submit">Login</button>
        </div>
        <div class="row mt-3">
            <div class="col-md-8">
                <p>Bạn chưa có tài khoản ??</p>
            </div>
            <div class="col-md-4">
                <a href="<?php echo route('register') ?>">Đăng ký ngay</a>
            </div>
        </div>
    </form>
</div>
@endsection