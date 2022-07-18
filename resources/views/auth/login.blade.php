@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-mb-2">
                <h2>Login</h2>
                @if(session('success'))
                    <div class="alert alert-success">{{ session("success") }}</div>
                @elseif(session('fail'))
                    <div class="alert alert-danger">{{ session("fail") }}</div>
                @endif
                    <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control {{ ($errors->has('email')) ? 'is-invalid' : '' }}" id="email" placeholder="example@mail.com" name="email">
                        <span class="invalid-feedback">
                            {{$errors->first('email')}}
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control {{ ($errors)->has('password') ? 'is-invalid' : '' }}" id="password" placeholder="****" name="password">
                        <span class="invalid-feedback">
                            {{$errors->first('password')}}
                        </span>
                    </div>

                    <button class="btn btn-info">Sign In</button>
                    <p class="btn btn-link"><a href="{{ route('register_view') }}">Create Account</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection
