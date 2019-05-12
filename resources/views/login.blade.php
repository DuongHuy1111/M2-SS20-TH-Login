@extends('layouts.master')
@section('content')
    <div class="title m-b-md">Đăng Nhập</div>
    @if(Session::has('login-fail'))
        <div class="login-fail">
            <p class="text-danger">{{Session::get('login-fail')}}</p>
        </div>
    @endif

    @if(Session::has('not-login'))
        <div class="not-login">
            <p class="text-danger">{{Session::get('not-login')}}</p>
        </div>
        @endif


    <div class="form-login">
        <form class="text-left" method="post" action="{{route('user.login')}}">
            @csrf
            <div class="form-group">
                <label for="inputUserName">Tên người dùng</label>
                <input type="text" class="form-control" name="inputUsername" placeholder="Enter username" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="inputPassword" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary">Đăng Nhập</button>
        </form>
    </div>
    @endsection