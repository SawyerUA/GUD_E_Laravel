@extends('layouts.main')
@section('content')

    <section class="forum">
        <!-- Подключение сайдбара странцы форума -->
        @include('layouts.include.sidebar')

        <div class="col-md-9 ps-5 table-content">
            <h2 class="text-center mb-5 mt-4">{{__('Posts management')}}</h2>
            <p class="text-center text-danger fw-bold fs-6 mt-3 mb-4 fst-italic errMsg"></p>
            <div class="row">
                <div class="col-1 fw-bold">ID</div>
                <div class="col-7 fw-bold">{{__('Title')}}</div>
                <div class="col-4 fw-bold">{{__('Administration')}}</div>
            </div>
            @foreach($posts as $post)
                <div class="row">
                    <div class="col-1">{{$post->id}}</div>
                    <div class="col-7"><a class="link" href="{{route('post.show', [$post->id, app()->getLocale()])}}">{{mb_strlen($post->title) <= 35 ? $post->title : substr($post->title, 0, 35) . '...'}}</a> </div>
                    <div class="col-2"><a class="edit" href="{{route('post.edit', [$post->id, app()->getLocale()])}}"><i class="fa-solid fa-pencil fa-sm"></i>{{__('Edit')}}</a></div>
                    <div class="col-2"><a class="del">
                        <form action="{{route('post.destroy', [$post->id, app()->getLocale()])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="{{__('Delete')}}" class="del"><i class="fa-solid fa-trash fa-sm"></i>
                        </form></a>
                    </div>
                </div>
            @endforeach
            <div class="col-md-9 mt-5 d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        </div>
    </section>
@endsection
