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
                    <a href="{{route('rules3.index', app()->getLocale())}}"><img src="{{asset('img/arrow_left.png')}}"></a>
                </div>

                <div class="row col-10">
                    <h5 class="text-center mb-3">{{__('What are points and what about them?')}}</h5>
                    <p>{{__('Should to recal about the points that were mentioned earlier. As stated, you can win the game if at the end you have more points than your opponents. They can be obtained in different ways. But you can also lose them. It is very important to keep track of their number and, if desired, write them down on time to facilitate calculations and fair play.')}}</p>
                        <p><strong>{{__('What you can get points for:')}}</strong></p>
                    <ol class="ms-4">
                        <li><p>{{__('The easiest and fastest way to score points is to capture enemy or neutral territories. For each captured district, you get 1 point.')}}</p></li>
                        <li><p>{{__('It will be a little more expensive to capture districts with a strategic point. For such areas you get 2 points.')}}</p>
                        <p><strong>{{__('Note:')}}</strong> {{__('To capture the «district» immediately, you need to place a flag of your color on the central hex.')}}</p></li>

                        <li><p>{{__('The next simple method is to mark the completion of tasks. For each completed task, you receive 1 point. In the same place where it is written about a double reward, you get 2 points accordingly.')}}</p></li>
                        <li><p>{{__('And the last possible option would be to kill an enemy units. For one killed, you will get 1 point.')}}</p></li>
                    </ol>
                    <p><strong>{{__('What you can lose points for:')}}</strong></p>
                    <ol class="ms-4">
                        <li><p>{{__('If your district was captured, you lose 1 point.')}}</p></li>
                        <li><p>{{__('If you reset tasks, you lose 5 points. But remember that 1 task can be reset without losing points.')}}</p></li>
                        <li><p>{{__('For an uncompleted task you lose 1 point.')}}</p></li>
                        <li><p>{{__('If you lose all your units and you eliminated from the game, your points are canceled.')}}</p></li>
                    </ol>

                    <h5 class="text-center mb-3 mt-3">{{__('Rank system and tasks')}}</h5>
                    <p>{{__('Tasks play an important role in the game, and there are those who can ignore the rules of the game and the «Dayli» cards. Of course, you may do not do them - it depends on your desire and desire to win. For completing each task, one point is added to your task scale. What it is?')}}</p>
                    <p>{{__('This task scale directly affects the promoting system for your basic units. Every three completed tasks allow you to receive a new soldier rank. These ranks provide the opportunity to apply the effect that accompanies upon receipt. The completed task must be placed under the unit’s card, a kind of note indicating that he completed them. After you done three tasks , you must return them in the «Tasks» deck and shuffle them.')}}</p>
                    <p>{{__('Initially, each basic unit is a Private. During the game, all your units,')}} <strong><u>{{__('except')}}</u></strong> {{__('extra and summoning ones, can be promoted to four ranks:')}}</p>
                    <ol class="ms-4">
                        <li><p>{{__('Sergeant')}}</p></li>
                        <li><p>{{__('Captain')}}</p></li>
                        <li><p>{{__('Colonel')}}</p></li>
                        <li><p>{{__('General')}}</p></li>
                    </ol>
                    <p><strong>{{__('Note:')}}</strong> {{__('After completing the task, you need to record that this unit completed the mission. As soon as three tasks have been completed, a star is placed on your unit’s card, which indicates the rank (Sergeant - 1, Captain - 2, Colonel - 3, General - 4).')}}</p>

                    <h5 class="text-center mb-3 mt-3">{{__('What is the advantage of ranks?')}}</h5>
                    <p><strong>{{__('Sergeant')}}</strong></p>
                    <p>{{__('Upon reaching this rank, your unit\'s armor is completely restored. Also, you have the opportunity to summon one rifleman to the front.')}}</p>
                    <p><strong>{{__('Captain')}}</strong></p>
                    <p>{{__('Upon reaching this rank, your unit\'s health is fully restored. Also, you have the opportunity to summon one stormtrooper to the front.')}}</p>
                    <p><strong>{{__('Colonel')}}</strong></p>
                    <p>{{__('Upon reaching this rank, your unit\'s health and armor are fully restored. Also, you have the opportunity to summon one scout to the front.')}}</p>
                    <p><strong>{{__('General')}}</strong></p>
                    <p>{{__('Upon reaching this rank, you have the opportunity to call a sniper or machine gunner to the front, as well as call for an air strike on enemy troops.')}}</p>
                    <p><strong>{{__('Note:')}}</strong> {{__('It is important to remember that only basic units can receive ranks and draw the «Tasks» deck. Summoned and extra units do not have this ability.')}}</p>

                    <nav class="pt-5">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules3.index', app()->getLocale())}}" tabindex="-1" aria-disabled="true">{{__('Previous')}}</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules.index', app()->getLocale())}}">1</a>
                            </li>
                            <li class="page-item" aria-current="page">
                                <a class="page-link " href="{{route('rules2.index', app()->getLocale())}}">2</a>
                            </li>
                            <li class="page-item" aria-current="page">
                                <a class="page-link" href="{{route('rules3.index', app()->getLocale())}}">3</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules5.index', app()->getLocale())}}">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules5.index', app()->getLocale())}}">{{__('Next')}}</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-1 d-none d-md-block float-end align-self-center">
                    <a href="{{route('rules5.index', app()->getLocale())}}"><img src="{{asset('img/arrow_right.png')}}"></a>
                </div>
            </div>
        </div>
    </section>
@endsection
