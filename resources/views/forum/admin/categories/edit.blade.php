@extends('layouts.main')
@section('content')
    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="col-md-9">
            <h2 class="text-center mb-5 mt-4">Редактирование категории</h2>
            <p class="text-center text-danger fw-bold fs-6 mt-3 mb-4 fst-italic errMsg"></p>
            <form action="{{route('category.update', $category->id)}}" method="post">
                @csrf
                @method('patch')
                <input type="hidden" name="id" value="">
                <div class="col mb-4">
                    <input type="text" class="form-control" placeholder="Название категории" aria-label="category-name" name="category" value="{{$category->category}}">
                </div>
                <button type="submit" class="btn btn-secondary" name="btn-edit-category">Обновить категорию</button>
            </form>
        </div>
    </section>
@endsection
