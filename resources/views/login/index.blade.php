@extends('layouts.master')

@section('content')
<h2>Login</h2>
<hr>

@if(session()->has('msg'))
    <div class="alert alert-success">{{session()->get('msg')}}</div>
@endif
<div class="card">
    <div class="card-header">
    Login
    </div>
    <div class="card-body">
        <form action="{{ route('user.login') }}" method="post">

        @csrf
            <div class="col-md-6 mb-3">
                <label for="email">Email:</label>
                <input type="text" name="email"class="form-control {{ $errors->has('email')? 'is-invalid' : ''}}" id="email" placeholder="Your email" value="{{ old('email') }}">
                <div class="invalid-feedback">
                    {{$errors->first('email')}}
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="password">Password:</label>
                <input type="password" name="password"class="form-control {{ $errors->has('password')? 'is-invalid' : ''}}" id="password" placeholder="Password">
                <div class="invalid-feedback">
                    {{$errors->first('password')}}
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <input type="submit" class ="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection