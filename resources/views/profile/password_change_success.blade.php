@extends('layouts.main')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center"><h6>{{ __('Your password changed successful!') }}</h6></div>

                    <div class="card-body">
                        <p class="text-center">{{__('Press the button below if you want to come back to profile settings.')}}</p>
                        <div class="row mb-0">
                            <div class="col-md-12 d-flex justify-content-center">
                                <a href="{{route('profile.edit', $user->id)}}"><button type="submit" class="btn btn-primary">{{ __('Back to settings') }}</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
