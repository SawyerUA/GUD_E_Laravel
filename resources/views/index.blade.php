@extends('layouts.main')

@section('title')
    GUD-E - настольная стратегия
@endsection

@section('content')
    @include('layouts.include.game_btn')
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="game-about text-center mb-5">Об игре</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="btn-circle">
                        <a href="{{route('rules.index')}}"><i class="fa-solid fa-book-open"></i>
                    </div>
                    <h5 class="text-center center-menu">Правила</a></h5>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="btn-circle">
                        <a href="{{route('units.index')}}"><i class="fa-solid fa-person-rifle"></i>
                    </div>
                    <h5 class="text-center center-menu">Юниты</a></h5>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="btn-circle">
                        <a href="{{route('components.index')}}"><i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <h5 class="text-center center-menu">Компоненты</a></h5>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="btn-circle">
                        <a href="{{route('fractions.index')}}"><i class="fa-solid fa-flag"></i>
                    </div>
                    <h5 class="text-center center-menu">Фракции</a></h5>
                </div>
            </div>
        </div>
    </section>

    <section class="forwhom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="game-about text-center mb-5 color2">Игра для тех</h2>
                </div>
            </div>
            <div class="row md-5">
                <div class="col-md-6 col-sm-12">
                    <h5 class="text-center">Кто любит формат настольных игр</h5>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h5 class="text-center">Кому нравится тактика и стратегия</h5>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h5 class="text-center">Кому слово "союз" не просто звук</h5>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h5 class="text-center">Кто сам определяет длинну партии</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="btn-to">
                        <a href="#" class="btn btn-primary btn-lg">?Скачать?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
