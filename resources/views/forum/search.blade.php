@extends('layouts.main')
@section('content')

    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="container col-md-9">
            <h3 class="text-center">Найденые записи</h3>
            <div class="row posts">
                @foreach($posts as $post)
                <div class="post-text col-12">
                    <h5><a class="link" href="{{route('post.show', $post->id)}}">{{$post->title}}</a></h5>
                    <i class="fa-solid fa-user fa-xs"> {{$post->user_id}}</i>
                    <i class="fa-solid fa-eye fa-xs" id="views"> {{$post->views}}</i>
                    <i class="fa-solid fa-calendar-days fa-xs"> {{$post->created_at}}</i>
                </div>
                @endforeach
            </div>
            <div class="col-md-9 mt-5 d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        </div>
    </section>
@endsection
