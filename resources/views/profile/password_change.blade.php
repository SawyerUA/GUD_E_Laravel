@extends('layouts.main')

@section('content')

    <div class="container">
        <h4 class="text-center mt-5 mb-5">{{__('Do you really want to change password?')}}</h4>
        @if($errors->any())
            @foreach($errors->all() as $error)
        <p class="text-center text-danger fw-bold fs-6 mt-3 mb-4 fst-italic errMsg">{{$error}}</p>
            @endforeach
        @endif
        <form class="row justify-content-center" method="post" action="{{route('profile.password_update.update', $user->id)}}">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{$user->id}}">

            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="old_password" class="form-label">{{__('Your old password')}}</label>
                <input type="password" class="form-control" id="old_password" name="old_password">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="password" class="form-label">{{__('Your new Password')}}</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="password_confirmation" class="form-label">{{__('Repeat your new Password')}}</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <div class="w-100"></div>
            <div class="mb-5 col-12 col-md-4 d-flex justify-content-end">
                <button type="submit" class="f-btn btn btn-secondary" name="btn-upd">{{__('Update')}}</button>
            </div>
        </form>

        <div class="row justify-content-center">
            <div class="accordion accordion-flush mb-3 reset_pass" id="reset_pass">
                <div class="accordion-item">
                    <h6 class="accordion-header" id="reset_pass">
                        <button class="reset_pass accordion-button collapsed fw-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">{{__('What should i do if i forgot my password, but i want to change it!')}}</button>
                    </h6>
                    <form method="post" action="{{route('profile.password_reset.patch', $user->id)}}" id="collapse1" class="accordion-collapse collapse" aria-labelledby="reset_pass" data-bs-parent="#reset_pass">
                        @csrf
                        <input type="hidden" name="password" value="{{$user->password}}">
                        <label for="email" class="form-label mt-3">{{__('Email')}}</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="введите ваш email" name="email" value="{{$user->email}}" readonly>
                        <div id="emailHelp" class="form-text mb-3">{{__('You will get an email with a new password in case you chose reset your old one')}}</div>
                        <a href="{{route('profile.password_reset.patch', $user->id)}}"> <button type="submit" class="ms-1 btn btn-sm btn-link">{{__('Reset password')}}</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
