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
                    <a href="{{route('rules.index', app()->getLocale())}}"><img src="{{asset('img/arrow_left.png')}}"></a>
                </div>

                <div class="row col-10">
                    <h5 class="text-center mb-3 mt-3">{{__('Game phases')}}</h5>
                    <p>{{__('The game consists of phases. Each phase ends with the person who starting the game. One phase equal the one year. Each player, in order of his turn, takes the following actions:')}}</p>
                    <ol class="ms-4">
                        <li><strong>{{__('Find out what awaits you today')}}</strong>: {{__('draw one card from the «Daily events» card deck for every unit before it starts movement and announce it. For all units, fulfill the conditions that are written on the card. After completion, discard the card.')}}</p></li>

                        <li><p><strong>{{__('In search of glory')}}</strong>: {{__('if desired, draw one card from the «Tasks» card deck and announce it. Keep the card with your unit until him will promoted or if you decide to discard the card. Once the conditions are met, discard the card.')}}</p>
                            <p><strong>{{__('Note:')}}</strong> {{__('There can be no more than')}} <strong>{{__('one')}}</strong> {{__('«Tasks» card')}}<strong> {{__('on one basic unit')}}</strong>. {{__('You can not to take the «Tasks» card for non-basic units.')}}</p></li>

                        <li><p><strong>{{__('Is it worth')}}</strong>: {{__('if there are enough hexes between your and an enemy unit, you can optionally start a battle with it (see below). If you want to avoid combat, you can simply do the number of steps that rolled on the die.')}}</p></li>

                        <li><p>{{__('Repeat all steps for all your units.')}}</p>
                            <p><strong>{{__('Note:')}}</strong> {{__('You can use only')}} <strong>{{__('one die')}}</strong> {{__('for movement.')}} {{__('Each unit can move only once at its turn.')}}</p></li>
                    </ol>
                    <p>{{__('In one turn you can shoot and move.')}} {{__('But there can not be more')}} <strong>{{__('than one')}}</strong> {{__('unit on the hex.')}}</p>

                    <h5 class="text-center mb-3 mt-3">{{__('Fighting system')}}</h5>

                    <p>{{__('It is important to know that each unit has its own rules of engagement (see below). It should be remembered that you can only shoot at an enemy if he is standing on the same line with your one. After you will deal the damage to the enemy, the «armor» parameter will decrease first. When the «armor» parametr will reach zero, the «health» parameter will decrease next. You are obliged to strictly follow these instructions, and also not to forget possible buffs or debuffs that could be written on certain cards before you start the battle.')}}</p>
                    <ol class="ms-4">
                        <li><p>{{__('Before you shoot, make sure that there is a sufficient number of hexes between your and the enemy unit (it is different for each type of unit);')}}</p></li>

                        <li><p>{{__('You can engage in close combat if both units (yours and enemy one) are on adjacent hexes from each other;')}}</p></li>

                        <li><p>{{__('Before knife stabbing or shooting, you must roll one or two dice respectively, which will show the amount of damage and accuracy;')}}</p></li>

                        <li><p>{{__('An accuracy die is rolled when the difference between the units')}} <strong>{{__('is greater,')}}</strong> {{__('than 4 hexes inclusive;')}}</p>
                            <p><strong>{{__('Note:')}}</strong> {{__('In knife stabbing, accuracy dice is not rolled.')}}</p></li>

                        <li><p>{{__('In the battle damage will deal as much as the amount of damage rolled on the dice. In the case of a die roll for accuracy, damage is subtracted with the difference;')}}</p>
                            <p><strong>{{__('Example:')}}</strong> {{__('If on the damage die rolls 5 and on the accuracy die rolls 6, then the damage will dealt in full.')}} {{__('If on the damage die rolls 5 and on the accuracy die rolls 4, then the difference that is missing to the maximum value of the second die is subtracted. That is: 5 damage minus 2 accuracy, we get 3 units of damage.')}}</p></li>

                        <li><p>{{__('In knife stabbing, both players roll the damage dice. Who roll the highest number wins. The losing unit dies. If the dice values is equal, the battle ends;')}}</p></li>

                        <li><p>{{__('The grenade (see below) is thrown only three hexes and can deal full damage;')}}</p></li>

                        <li><p>{{__('Strategic points such as the «Bunker» and «Field Headquarters» have a buff that allows you to receive an armor bonus in the event of a firefight there. That is, the enemy\'s damage will be reduced (see below);')}}</p></li>

                        <li><p>{{__('Natural objects have buffs or debuffs that gives different effects to the unit which standing or passing through them (see below).')}}</p></li>
                    </ol>
                    <p><strong>{{__('Note:')}}</strong> <strong><u>{{__('It is impossible')}}</u></strong> {{__('to make a shot, to throw a grenade, or to melee with knife in one turn. You need to choose one thing. Whenever damage is dealt, the «armor» parameter is always decrease first, and only then the «health» parameter.')}}</p>

                    <nav class="pt-5">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules.index', app()->getLocale())}}" tabindex="-1" aria-disabled="true">{{__('Previous')}}</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules.index', app()->getLocale())}}">1</a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link " href="#">2</a>
                            </li>
                            <li class="page-item" aria-current="page">
                                <a class="page-link " href="{{route('rules3.index', app()->getLocale())}}">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules4.index', app()->getLocale())}}">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules5.index', app()->getLocale())}}">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules3.index', app()->getLocale())}}">{{__('Next')}}</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-1 d-none d-md-block float-end align-self-center">
                    <a href="{{route('rules3.index', app()->getLocale())}}"><img src="{{asset('img/arrow_right.png')}}"></a>
                </div>
            </div>
        </div>
    </section>
@endsection
