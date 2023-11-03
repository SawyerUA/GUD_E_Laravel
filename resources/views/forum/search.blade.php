@extends('layouts.main')
@section('content')

    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="container col-md-9">
            <h3 class="text-center">{{__('Found posts')}}</h3>
            <div class="row posts">
                @foreach($posts as $post)
                <div class="post-text col-12">
                    <h5><a class="link" href="{{route('post.show', [$post->id, app()->getLocale()])}}">{{mb_strlen($post->title) <= 35 ? $post->title : substr($post->title, 0, 35) . '...'}}</a></h5>
                    <i class="fa-solid fa-user fa-xs"></i>{{$post->name}}
                    <i class="fa-solid fa-eye fa-xs ms-3" id="views"></i>{{$post->views}}
                    <i class="fa-solid fa-calendar-days fa-xs ms-3"></i>{{$post->DateCarbon->format('H:i, d F Y')}}
                </div>
                @endforeach
            </div>
            <div class="col-md-9 mt-5 d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        </div>
    </section>
@endsection
