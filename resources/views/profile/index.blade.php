@extends('layouts.main')

@section('title')
    {{__('Profile')}}
@endsection

@section('content')

    <section class="forum">
        <div class="row">
            <div class="col-12">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="text-center text-danger fw-bold fs-6 mt-3 mb-4 fst-italic errMsg">{{$error}}</p>
                    @endforeach
                @endif
                <h2 class="text-center mb-5">{{__('Profile settings')}}</h2>
                <form class="row justify-content-center" action="{{route('profile.update', $user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="mb-3 col-12 col-md-4">
                        <img src="{{asset('storage/' . $user->img)}}" alt="..." class="img-fluid w-25 rounded mx-auto d-block mb-3">
                        <span class="d-flex justify-content-center"><input type="file" class="" name="img"></span>
                    </div>
                    <div class="w-100"></div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="name" class="form-label">{{__('Login')}}</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="{{__('Login')}}"
                               value="{{$user->name}}">
                    </div>
                    <div class="w-100"></div>
{{--                    <div class="mb-3 col-12 col-md-4">--}}
{{--                        <label for="email" class="form-label">{{__('Email')}}</label>--}}
{{--                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"--}}
{{--                               placeholder="введите ваш email" name="email" value="{{$user->email}}" readonly>--}}
{{--                    </div>--}}
{{--                    <div class="w-100"></div>--}}
{{--                    <div class="mb-3 col-12 col-md-4">--}}
{{--                        <select class="form-select mb-3" aria-label="select" name="language">--}}
{{--                            <option selected value="">{{__('Select your language:')}}</option>--}}
{{--                            <option value="1">EN</option>--}}
{{--                            <option value="2">UA</option>--}}
{{--                            <option value="3">RU</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
                    <div class="w-100"></div>
                    <div class="mb-3 col-12 col-md-4 d-flex justify-content-end">
                        <button type="submit" class="f-btn btn btn-secondary" name="btn-reg">{{__('Update')}}</button>
                    </div>
                </form>
                    <div class="row justify-content-center">
                        <div class="mb-3 me-4 col-12 col-md-4">
                            <a href="{{route('profile.email_change.index', $user->id)}}"><button type="submit" class="ms-1 btn btn-sm btn-link">{{__('Change e-mail')}}</button></a>
                        </div>
                        <div class="w-100"></div>
                        <div class="mb-3 me-4 col-12 col-md-4">
                            <a href="{{route('profile.password_change.index', $user->id)}}"> <button type="submit" class="ms-1 btn btn-sm btn-link">{{__('Change password')}}</button></a>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
