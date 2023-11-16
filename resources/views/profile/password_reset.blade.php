@extends('layouts.main')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center"><h6>{{ __('Your password was reset!') }}</h6></div>

                    <div class="card-body">
                        <p class="text-center">{{__('Please check your email address. There you should get an email with your new password')}}</p>
                        <div class="row mb-0">
                            <div class="col-md-12 d-flex justify-content-center">
                                <a href="{{route('profile.index', $user->id)}}"><button type="submit" class="btn btn-primary">{{ __('Back to settings') }}</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
