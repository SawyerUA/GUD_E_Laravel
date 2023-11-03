@extends('layouts.main')
@section('content')
    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="container col-md-9">
            <h3 class="text-center">{{$post->title}}</h3>
            <div class="row d-inline-block ms-3 mb-5 col-12">
                <div class="post-text col-12 d-inline-block">
                    <i class="fa-solid fa-user fa-xs"></i>{{$post->user->name}}
                    <i class="fa-solid fa-calendar-days fa-xs ms-3"></i>{{$post->DateCarbon->format('H:i, d F Y')}}
                    @if(auth()->user()->is_admin == 1)
                        <a class="del float-end ms-3">
                            <form action="{{route('post.destroy', [$post->id, app()->getLocale()])}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="{{__('Delete')}}" class="del"><i class="fa-solid fa-trash fa-sm"></i>
                            </form></a>
                    @endif
                    @if(auth()->user()->id == $post->user_id)
                        <a class="edit float-end" href="{{route('post.edit', [$post->id, app()->getLocale()])}}"><i class="fa-solid fa-pencil fa-sm"></i>{{__('Edit')}}</a>

                    @endif
                </div>
                <img src="{{asset('storage/' . $post->img)}}" alt="..." class="img-fluid img-single-post float-start">
                <p>{!!$post->content!!}</p>
            </div>

            @include('layouts.include.comment')
        </div>
    </section>
@endsection
