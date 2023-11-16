@extends('layouts.main')

@section('title')
    GUD-E - {{__('board strategy')}}
@endsection

@section('content')
    <section class="to-play">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-black">GUD-E</h1>
                    @include('layouts.include.game_btn')
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="game-about text-center mb-5">{{__('About the game')}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="btn-circle">
                        <a href="{{route('rules.index', app()->getLocale())}}"><i class="fa-solid fa-book-open"></i>
                    </div>
                    <h5 class="text-center center-menu">{{__('Rules')}}</a></h5>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="btn-circle">
                        <a href="{{route('units.index', app()->getLocale())}}"><i class="fa-solid fa-person-rifle"></i>
                    </div>
                    <h5 class="text-center center-menu">{{__('Units')}}</a></h5>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="btn-circle">
                        <a href="{{route('components.index', app()->getLocale())}}"><i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <h5 class="text-center center-menu">{{__('Components')}}</a></h5>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="btn-circle">
                        <a href="{{route('fractions.index', app()->getLocale())}}"><i class="fa-solid fa-flag"></i>
                    </div>
                    <h5 class="text-center center-menu">{{__('Fractions')}}</a></h5>
                </div>
            </div>
        </div>
    </section>

    <section class="forwhom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="game-about text-center mb-5 color2">{{__('The game for')}}</h2>
                </div>
            </div>
            <div class="row md-5">
                <div class="col-md-6 col-sm-12">
                    <h5 class="text-center">{{__('Those who love board games')}}</h5>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h5 class="text-center">{{__('Those who like tactic and strategy')}}</h5>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h5 class="text-center">{{__('Those for whom the word "union" is not just a sound')}}</h5>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h5 class="text-center">{{__('Those who determine the game length themselves ')}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @include('layouts.include.game_btn')
                </div>
            </div>
        </div>
    </section>
@endsection
