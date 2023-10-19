@extends('layouts.main')
@section('content')
    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="container col-md-9">
            <h3 class="text-center">{{$post->title}}</h3>
            <div class="row d-inline-block ms-3">
                <div class="post-text col-12">
                    <i class="fa-solid fa-user fa-xs"> {{$post->user_id}}</i>
                    <i class="fa-solid fa-calendar-days fa-xs"> {{$post->created_at}}</i>
                </div>
                <img src="" alt="..." class="img-fluid img-single-post float-start">
                <p>{{$post->content}}</p>
            </div>
        </div>
    </section>
@endsection