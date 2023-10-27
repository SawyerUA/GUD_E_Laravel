@extends('layouts.main')
@section('content')

    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="col-md-9 ps-5 table-content">
            <h2 class="text-center mb-5 mt-4">{{__('Users management')}}</h2>
            <div class="row">
                <div class="col-1 fw-bold">ID</div>
                <div class="col-2 fw-bold">{{__('Login')}}</div>
                <div class="col-3 fw-bold">{{__('Email')}}</div>
                <div class="col-2 fw-bold">{{__('Role')}}</div>
                <div class="col-4 fw-bold">{{__('Administration')}}</div>
            </div>
            @foreach($users as $user)
                <div class="row">
                    <div class="col-1">{{$user->id}}</div>
                    <div class="col-2">{{$user->name}}</div>
                    <div class="col-3">{{$user->email}}</div>
                    @if($user->is_admin == 1)
                        <div class="col-2">{{__('Admin')}}</div>
                    @else
                        <div class="col-2">{{__('User')}}</div>
                    @endif
                    <div class="col-2"><a class="edit" href="{{route('user.edit', [$user->id, app()->getLocale()])}}"><i class="fa-solid fa-pencil fa-sm"></i>{{__('Edit')}}</a></div>
                    <div class="col-2"><a class="del">
                            <form action="{{route('user.destroy', [$user->id, app()->getLocale()])}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="{{__('Delete')}}" class="del"><i class="fa-solid fa-trash fa-sm"></i>
                            </form></a>
                    </div>
                </div>
            @endforeach
            <div class="col-md-9 mt-5 d-flex justify-content-center">
                {{$users->links()}}
            </div>
        </div>
    </section>
@endsection
