@extends('layouts.main')
@section('content')

    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="col-md-9">
            <div class="col-md-9">
                <h2 class="text-center mb-5 mt-4">Добавление статьи</h2>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="text-center text-danger fw-bold fs-6 mt-3 mb-4 fst-italic errMsg">{{$error}}</p>
                    @endforeach
                @endif
                <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col mb-4">
                        <input type="text" class="form-control" placeholder="Название статьи" aria-label="Post-name"
                               name="title" value="">
                    </div>
                    <div class="col">
                        <label for="content" class="form-label">Содержимое статьи</label>
                        <textarea class="form-control" id="content" rows="3" name="content"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="img_post" name="img">
                        <label class="input-group-text" for="img_post">Прикрепить</label>
                    </div>
                    <select class="form-select mb-3" aria-label="select" name="category_id">
                        <option selected>Выберите категорию:</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-secondary" name="btn-create-post">Создать статью</button>
                </form>
            </div>
        </div>
    </section>
@endsection