@extends('layouts.main')
@section('content')
    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')
        <div class="col-md-9">
            <h2 class="text-center mb-5 mt-4">{{__('Edit post')}}</h2>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="text-center text-danger fw-bold fs-6 mt-3 mb-4 fst-italic errMsg">{{$error}}</p>
                @endforeach
            @endif
            <form action="{{route('post.update', [$post->id, app()->getLocale()])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{$post->id}}">
                <div class="col mb-4">
                    <input type="text" class="form-control" placeholder="{{__('Post title')}}" aria-label="Post-name" name="title" value="{{$post->title}}">
                </div>
                <div class="col">
                    <label for="editor" class="form-label">{{__('Post content')}}</label>
                    <textarea class="form-control" id="editor" rows="3" name="content">{{$post->content}}</textarea>
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="img_post" name="img">
                    <label class="input-group-text" for="img_post">{{__('Attach')}}</label>
                </div>
                <select class="form-select mb-3" aria-label="select" name="category_id">
                    <option selected>Выберите категорию</option>
                    @foreach($categories as $category)
                        <option {{$category->id == $post->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-secondary" name="btn_edit_post">{{__('Post update')}}</button>
            </form>
        </div>
    </section>
@endsection
