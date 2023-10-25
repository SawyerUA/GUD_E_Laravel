@extends('layouts.main')
@section('content')

    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="container col-md-9">
            <h3 class="text-center">Статьи из категории: <span class="fst-italic f"><u>{{$category->category}}</u></span></h3>

            @foreach($posts as $post)
                @if($post->category_id == $category->id)
                    <div class="row posts">
                        <div class="post-text col-12">
                            <h5><a class="link" href="{{route('post.show', $post->id)}}"> {{$post->title}}</a></h5>
                            <i class="fa-solid fa-user fa-xs"> {{$post->name}}</i>
                            <i class="fa-solid fa-eye fa-xs" id="views"> 123{{$post->views}}</i>
                            <i class="fa-solid fa-calendar-days fa-xs"> {{$post->created_at}}</i>
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="col-md-9 mt-5 d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        </div>
    </section>
@endsection
