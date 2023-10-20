@extends('layouts.main')

@section('content')

    <div class="container reg-form">
        <h2 class="text-center">Авторизация</h2>
        <p class="text-center text-danger fw-bold fs-6 mt-3 mb-4 fst-italic errMsg"></p>
        <form class="row justify-content-center" method="post" action="{{route('login')}}">
            @csrf
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="email-inp" class="form-label">Ваш email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="введите ваш email" name="email" value="{{ old('email') }}">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="pass-inp1" class="form-label">Ваш пароль</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="w-100"></div>
            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Запомнить меня</label>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-12 col-md-4">
                <button type="submit" class="f-btn btn btn-secondary" name="btn-log">Войти</button>
                @if (Route::has('password.request'))
                    <a class="pf" href="{{ route('password.request') }}">Забыли пароль?</a>
                @endif
                <a href="{{route('register')}}">Зарегистрироваться</a>
            </div>
        </form>
    </div>
@endsection
