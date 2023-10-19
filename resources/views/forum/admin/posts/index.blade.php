@extends('layouts.main')
@section('content')

    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="col-md-9 ps-5 table-content">
            <h2 class="text-center mb-5 mt-4">Управление статьями</h2>
            <p class="text-center text-danger fw-bold fs-6 mt-3 mb-4 fst-italic errMsg"></p>
            <div class="row">
                <div class="col-1 fw-bold">ID</div>
                <div class="col-7 fw-bold">Навзвание</div>
                <div class="col-4 fw-bold">Управление</div>
            </div>
            @foreach($posts as $post)
                <div class="row">
                    <div class="col-1">{{$post->id}}</div>
                    <div class="col-7"><a class="link" href="{{route('post.show', $post->id)}}">{{$post->title}}</a> </div>
                    <div class="col-2"><a class="edit" href="{{route('post.edit', $post->id)}}"><i class="fa-solid fa-pencil fa-sm"></i>Ред.</a></div>
                    <div class="col-2"><a class="del">
                        <form action="{{route('post.destroy', $post->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Удалить" class="del"><i class="fa-solid fa-trash fa-sm"></i>
                        </form></a>
                    </div>
                </div>
            @endforeach
            <div class="col-md-9 mt-5 d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        </div>
    </section>
@endsection
