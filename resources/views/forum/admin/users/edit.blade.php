@extends('layouts.main')
@section('content')
    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="col-md-9">
            <h2 class="text-center mb-5 mt-4">{{__('User update')}}</h2>

            <p class="text-center text-danger fw-bold fs-6 mt-3 mb-4 fst-italic"></p>

            <form action="{{route('user.update', [$user->id, app()->getLocale()])}}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{$user->id}}">
                <div class="col mb-4">
                    <label for="user" class="form-label">{{__('User login')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('User name')}}" name="name" value="{{$user->name}}">
                </div>
                <select class="form-select mb-3" aria-label="select" name="is_admin">
                    @foreach($roles as $id => $role)
                    <option value="{{$id}}" {{$id == $user->is_admin ? ' selected' : ''}}>{{$role}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-secondary mt-3" name="btn-edit-user">{{__('User update')}}</button>
            </form>
        </div>
    </section>
@endsection
