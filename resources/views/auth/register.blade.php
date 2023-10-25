@extends('layouts.main')

@section('content')

    <div class="container reg-form">
        <h2 class="text-center">Регистрация</h2>
        @if($errors->any())
            @foreach($errors->all() as $error)
        <p class="text-center text-danger fw-bold fs-6 mt-3 mb-4 fst-italic errMsg">{{$error}}</p>
            @endforeach
        @endif
        <div class="w-100"></div>
        <form class="row justify-content-center" method="post" action="{{route('register')}}">
            @csrf

            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="name" class="form-label">Ваш логин</label>
                <input type="text" class="form-control" id="name" placeholder="введите ваш логин" name="name" value="{{old('name')}}">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="email-inp" class="form-label">Ваш email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="введите ваш email" name="email" value="{{old('email')}}">
                <div id="emailHelp" class="form-text">Ваш имейл не будет использован для спама</div>
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="password" class="form-label">Ваш пароль</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="password_confirmation" class="form-label">Повторите ваш пароль</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <button type="submit" class="f-btn btn btn-secondary" name="btn-reg">Регистрация</button>
            </div>
        </form>
    </div>
@endsection
