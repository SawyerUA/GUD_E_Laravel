@extends('layouts.main')
@section('content')

    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="col-md-9">
            <h2 class="text-center mb-5 mt-4">Добавление категории</h2>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="text-center text-danger fw-bold fs-6 mt-3 mb-4 fst-italic errMsg">{{$error}}</p>
                @endforeach
            @endif
            <form action="{{route('category.store')}}" method="post">
                @csrf
                <div class="col mb-4">
                    <input type="text" class="form-control" placeholder="Название категории" aria-label="category-name"
                           name="category" value="">
                </div>
                <button type="submit" class="btn btn-secondary" name="btn-create-category">Создать категорию</button>
            </form>
        </div>
    </section>
@endsection
