@extends('layouts.client')
@section('image')
<img class="mx-5" style="border-radius: 15px" width="150px" height="90px" src="./images/logo.png" alt="">
@endsection
@section('content')
<div>
    <h3 class="p-3">Dánh sách Users</h3>
    <a class="btn btn-primary mx-3" href="<?php echo route('user.create') ?>">Create User</a>
    <table class="table table-hover m-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Function</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->ID}}</th>
                <td>{{$user->Name}}</td>
                <td>{{$user->Phone}}</td>
                <td>{{$user->Email}}</td>
                <td>
                    <a class="btn btn-warning" href="{{ route('user.edit', ['id' => $user->ID]) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('user.delete', ['id' => $user->ID]) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection