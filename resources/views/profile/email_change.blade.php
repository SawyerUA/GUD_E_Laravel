@extends('layouts.main')

@section('content')

    <div class="container">
        <h4 class="text-center mt-5 mb-5">{{__('Do you really want to change email?')}}</h4>
        @if($errors->any())
            @foreach($errors->all() as $error)
        <p class="text-center text-danger fw-bold fs-6 mt-3 mb-4 fst-italic errMsg">{{$error}}</p>
            @endforeach
        @endif
        <form class="row justify-content-center" method="post" action="{{route('profile.email_update.update', $user->id)}}">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{$user->id}}">

            <div class="mb-3 col-12 col-md-4">
                <label for="old_email" class="form-label">{{__('Your old email')}}</label>
                <input type="email" class="form-control" id="old_email" aria-describedby="emailHelp" placeholder="введите ваш email" name="old_email" value="{{$user->email}}" readonly>
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="email" class="form-label">{{__('Your new email')}}</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="введите ваш email" name="email" value="{{old('email')}}">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="password" class="form-label">{{__('Password')}}</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="{{__('Please type your password to verify yourself')}}">
            </div>
            <div class="w-100"></div>
            <div class="mb-5 col-12 col-md-4 d-flex justify-content-end">
                <button type="submit" class="f-btn btn btn-secondary" name="btn-upd">{{__('Update')}}</button>
            </div>
        </form>
    </div>
@endsection
