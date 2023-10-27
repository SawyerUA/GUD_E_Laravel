@extends('layouts.main')
@section('content')
    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="container col-md-9">
            <h3 class="text-center">{{$post->title}}</h3>
            <div class="row d-inline-block ms-3">
                <div class="post-text col-12">
                    @foreach($users as $user)
                        @if($post->user_id == $user->id)
                    <i class="fa-solid fa-user fa-xs"></i>{{$user->name}}
                        @endif
                    @endforeach
                    <i class="fa-solid fa-calendar-days fa-xs ms-3"></i>{{$post->created_at}}
                </div>
                <img src="{{$post->img}}" alt="..." class="img-fluid img-single-post float-start">
                <p>{{$post->content}}</p>
            </div>
        </div>
    </section>
@endsection
