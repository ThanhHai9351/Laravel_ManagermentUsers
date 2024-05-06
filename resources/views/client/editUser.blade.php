@extends('layouts.client')
@section('image')
<img class="mx-5" style="border-radius: 15px" width="150px" height="90px" src="./../../images/logo.png" alt="">
@endsection
@section('content')
<h3 class=" mx-3 mb-3 mt-2">Edit User</h3>
<div class="m-5 p-3" style="border: 1px #cdcdcd solid">
    <form action="<?php echo route('user.handleEdit', ['id' => $user->ID]) ?>" method="POST" class="row">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{$user->ID}}" name="id">
        <div class="mb-3 row col-md-6">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$user->Name}}" name="name"
                    placeholder="enter Name ...">
            </div>
        </div>
        <div class="mb-3 row col-md-6">
            <label for="" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="" name="phone" value="{{$user->Phone}}"
                    placeholder="Enter Phone ...">
            </div>
        </div>
        <div class="mb-3 row col-md-6">
            <label for="" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="" value="{{$user->Email}}" name="email"
                    placeholder="Enter Email ...">
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-warning" type="submit">Update</button>
        </div>
    </form>
</div>
@endsection