@extends('layouts.main')

@section('title')
    {{__('Fractions')}}
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="rules text-center mb-5">{{__('Fractions')}}</h2>
                    <p>{{__('The game has a number of countries for which the player can play. At the beginning of the game, they are given out randomly or chosen at will, but we still recommend the first option. Each fraction has two passive skills that are always active. Study them carefully and apply them wisely.')}}</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-4">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/countries/france.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{__('France')}}</h5>
                            <p class="card-text"><u class="fst-italic">{{__('Birth of Napoleon')}}</u>: {{__('Any standard unit can become an artillery commander by reaching the artillery center and using their ability on the next turn.')}}</p>
                            <p><u class="fst-italic">{{__('White flag')}}</u>: {{__('On 40 turn, France is have to transfer all its territories except the Base under German control.')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/countries/germany.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{__('Germany')}}</h5>
                            <p class="card-text"><u class="fst-italic">{{__('Blitzkrieg')}}</u>: {{__('The movement die is rolled 2 times.')}}</p>
                            <p><u class="fst-italic">{{__('Berlin capitulation')}}</u>: {{__('On 45 turn, all German territories except the base become neutral.')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/countries/england.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{__('England')}}</h5>
                            <p class="card-text"><u class="fst-italic">{{__('Apple pie')}}</u>: {{__('All health restore cards gives a maximum of points.')}}</p>
                            <p><u class="fst-italic">{{__('Irish Republican Army')}}</u>: {{__('For the final scoring of territories, 2 districts (12 hexes) are not considered English.')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/countries/italy.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{__('Italy')}}</h5>
                            <p class="card-text"><u class="fst-italic">{{__('Papal whim')}}</u>: {{__('You can declare a Crusade 4 times per game lasting 5 circles.')}}</p>
                            <p><u class="fst-italic">{{__('Mafia share')}}</u>: {{__('All cards for restoring ammunition are less in half, but not less than 1 point.')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
