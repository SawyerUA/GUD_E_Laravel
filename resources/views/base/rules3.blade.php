@extends('layouts.main')

@section('title')
    {{__('Rules')}}
@endsection

@section('content')

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="rules text-center mb-5">{{__('Rules')}}</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-1 d-none d-md-block align-self-center">
                    <a href="{{route('rules2.index', app()->getLocale())}}"><img src="{{asset('img/arrow_left.png')}}"></a>
                </div>

                <div class="row col-10">
                    <h5 class="text-center mb-3 mt-3">{{__('Unit\'s indicators and their classification')}}</h5>
                    <p>{{__('There are several types of units in the game, which are divided into different types of forces, and also have their own special capabilities. There are seven of them in total: rifleman, stormtrooper, scout, sniper, machine gunner, pilot and artillery commander.')}}</p>
                        <p><strong>{{__('Note:')}}</strong> {{__('The basic units are the first 4 units that are given to you at the start of the game (rifleman, scout, machine gunner, sniper). They are marked with a star. It is worth noting that if you received a unit during the promoted, that is, you called it onto the field, then it is not basic and is indicated by a number for simplified orientation.')}}</p>
                    <p class="text-center fst-italic fs-6 mb-5">{{__('In order not to describe here what is already on the site, we suggest simply following the link by clicking on the circle. Yes, yes, right on the icon, or on the inscription with its name.')}}</p>
                    <div class="col-12 mb-5">
                        <div class="btn-circle">
                            <a href="{{route('units.index', app()->getLocale())}}"><i class="fa-solid fa-person-rifle"></i>
                        </div>
                        <h5 class="text-center center-menu">{{__('Units')}}</a></h5>
                    </div>

                    <h5 class="text-center mb-3 mt-3">{{__('Texture objects, strategic points and their hidden bonuses')}}</h5>
                    <p>{{__('The map shows several textures that have different buffs and debuffs. Conventionally, they can be divided into: «Strategic» and «Natural». In order to take advantage of the effects of the former, you must «capture» them, that is, place your unit on a hex with this object. In each such object, except of the airfield and the artillery center, cards with buffs or debuffs are hidden. To get the effects from the second, you just need to stand on them.')}}</p>
                    <p class="text-center fst-italic fs-6 mb-5">{{__('In order not to describe here what is already on the site, we suggest simply following the link by clicking on the circle. Yes, yes, right on the icon, or on the inscription with its name.')}}</p>
                    <div class="col-12 mb-5">
                        <div class="btn-circle">
                            <a href="{{route('components.index', app()->getLocale())}}"><i class="fa-solid fa-boxes-stacked"></i>
                        </div>
                        <h5 class="text-center center-menu">{{__('Components')}}</a></h5>
                    </div>

                    <h5 class="text-center mb-3 mt-3">{{__('Fractions and their features')}}</h5>
                    <p>{{__('The game has a number of countries for which the player can play. At the start of the game, they are given out randomly or chosen at will, but we still recommend the first option. Each fraction has two features that are always active. Study them carefully and apply them wisely.')}}</p>
                    <p class="text-center fst-italic fs-6 mb-5">{{__('In order not to describe here what is already on the site, we suggest simply following the link by clicking on the circle. Yes, yes, right on the icon, or on the inscription with its name.')}}</p>
                    <div class="col-12 mb-5">
                        <div class="btn-circle">
                            <a href="{{route('fractions.index', app()->getLocale())}}"><i class="fa-solid fa-flag"></i>
                        </div>
                        <h5 class="text-center center-menu">{{__('Fractions')}}</a></h5>
                    </div>
                    <p><strong>{{__('Note:')}}</strong> {{__('You may think that the features of some fractions may violate the rules. Just know that their features completely ignore all the rules and other cards, being undeniable.')}}</p>


                    <nav class="pt-5">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules2.index', app()->getLocale())}}" tabindex="-1" aria-disabled="true">{{__('Previous')}}</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules.index', app()->getLocale())}}">1</a>
                            </li>
                            <li class="page-item" aria-current="page">
                                <a class="page-link " href="{{route('rules2.index', app()->getLocale())}}">2</a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules4.index', app()->getLocale())}}">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules5.index', app()->getLocale())}}">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules4.index', app()->getLocale())}}">{{__('Next')}}</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-1 d-none d-md-block float-end align-self-center">
                    <a href="{{route('rules4.index', app()->getLocale())}}"><img src="{{asset('img/arrow_right.png')}}"></a>
                </div>
            </div>
        </div>
    </section>
@endsection
