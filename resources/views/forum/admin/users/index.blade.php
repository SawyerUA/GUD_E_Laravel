@extends('layouts.main')
@section('content')

    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="col-md-9 ps-5 table-content">
            <h2 class="text-center mb-5 mt-4">Управление пользователями</h2>
            <div class="row">
                <div class="col-1 fw-bold">ID</div>
                <div class="col-2 fw-bold">Логин</div>
                <div class="col-3 fw-bold">email</div>
                <div class="col-2 fw-bold">Роль</div>
                <div class="col-4 fw-bold">Управление</div>
            </div>
            @foreach($users as $user)
                <div class="row">
                    <div class="col-1">{{$user->id}}</div>
                    <div class="col-2">{{$user->name}}</div>
                    <div class="col-3">{{$user->email}}</div>
                    @if($user->is_admin == 1)
                        <div class="col-2">Админ</div>
                    @else
                        <div class="col-2">Юзер</div>
                    @endif
                    <div class="col-2"><a class="edit" href="{{route('user.edit', $user->id)}}"><i class="fa-solid fa-pencil fa-sm"></i>Ред.</a></div>
                    <div class="col-2"><a class="del">
                            <form action="{{route('user.destroy', $user->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Удалить" class="del"><i class="fa-solid fa-trash fa-sm"></i>
                            </form></a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-9 mt-5 d-flex justify-content-center">
            {{$users->links()}}
        </div>
    </section>
@endsection
