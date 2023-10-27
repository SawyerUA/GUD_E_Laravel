@extends('layouts.main')

@section('content')

    <div class="container reg-form">
        <h2 class="text-center mt-5">{{__('Authorization')}}</h2>
        @if($errors->any())
            @foreach($errors->all() as $error)
        <p class="text-center text-danger fw-bold fs-6 mt-3 mb-4 fst-italic errMsg">{{$error}}</p>
            @endforeach
        @endif
        <form class="row justify-content-center" method="post" action="{{route('login', app()->getLocale())}}">
            @csrf
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="email-inp" class="form-label">{{__('Email')}}</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="{{__('enter your email')}}" name="email" value="{{ old('email') }}">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="pass-inp1" class="form-label">{{__('Password')}}</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="w-100"></div>
            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">{{__('Remember me')}}</label>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-12 col-md-4">
                <button type="submit" class="f-btn btn btn-secondary" name="btn-log">{{__('Log in')}}</button>
                @if (Route::has('password.request'))
                    <a class="pf" href="{{ route('password.request', app()->getLocale()) }}">{{__('Forgot password?')}}</a>
                @endif
                <a href="{{route('register', app()->getLocale())}}">{{__('Registration')}}</a>
            </div>
        </form>
    </div>
@endsection
