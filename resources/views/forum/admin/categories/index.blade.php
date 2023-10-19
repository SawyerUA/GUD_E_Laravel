@extends('layouts.main')
@section('content')

    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="col-md-9 ps-5 table-content">
            <h2 class="text-center mb-5 mt-4">Управление категориями</h2>
            <p class="text-center text-danger fw-bold fs-6 mt-3 mb-4 fst-italic errMsg"></p>
            <div class="row">
                <div class="col-1 fw-bold">ID</div>
                <div class="col-7 fw-bold">Навзвание</div>
                <div class="col-4 fw-bold">Управление</div>
            </div>
            @foreach($categories as $key=>$category)
                <div class="row">
                    <div class="col-1">{{$key+1}}</div>
                    <div class="col-7">{{$category->category}}</div>
                    <div class="col-2"><a class="edit" href="{{route('category.edit', $category->id)}}"><i class="fa-solid fa-pencil fa-sm"></i>Ред.</a></div>
                    <div class="col-2"><a class="del">
                        <form action="{{route('category.destroy', $category->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Удалить" class="del"><i class="fa-solid fa-trash fa-sm"></i>
                        </form></a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
