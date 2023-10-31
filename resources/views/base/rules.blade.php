@extends('layouts.main')

@section('title')
    {{__('Rules')}}
@endsection

@section('content')

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="rules text-center mb-5"> {{__('Rules')}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="text-center">{{__('Introduction')}}</p>
                    <p>{{__('The game invites you to plunge into a randomly developing alternative history of the World War, in which not only tactics and strategy will play a role, but also the generation of the campaign map itself. The events of the game will take place in randomly generated locations, where different countries of the world will enter the battle. Your tasks will include: destroy all enemies and/or achieve victory by any other means.')}}</p>
                    <p class="text-center">{{__('Components')}}</p>
                    <p class="text-center">{{__('The game includes:')}}</p>
                    <div class="row">
                        <ul class="col-xl-4 col-md-4 col-sm-12">
                            <li>{{__('«Tasks» card deck')}}</li>
                            <li>{{__('«Daily events» card deck')}}</li>
                            <li>{{__('«Box» card deck')}}</li>
                            <li>{{__('«Bunker» card deck')}}</li>
                            <li>{{__('«Field headquarters» card deck')}}</li>
                        </ul>
                        <ul class="col-xl-4 col-md-4 col-sm-12">
                            <li>{{__('«Units» card deck')}}</li>
                            <li>{{__('212 unit tokens of seven types')}}</li>
                            <li>{{__('128 rank stars')}}</li>
                            <li>{{__('«Fraction» card deck')}}</li>
                            <li>{{__('50-80 capture flags in eight different colors')}}</li>
                        </ul>
                        <ul class="col-xl-4 col-md-4 col-sm-12">
                            <li>{{__('160 hexes')}}</li>
                            <li>{{__('2 six-sided dice')}}</li>
                            <li>{{__('8 or 10 «cleared» tokens')}}</li>
                            <li>{{__('6,360 health, armor, ammo tokens')}}</li>
                            <li>{{__('160 stands for unit chips in eight different colors')}}</li>
                        </ul>
                    </div>
                    <p class="text-center">{{__('How to start the game')}}</p>
                    <p>{{__('The map is presented in the form of hexes, where in one large one (called a «district») there are seven small ones (this is ordinary «earth»). Now let\'s start the game.')}}</p>
                        <p>{{__('Place hexes on the board in a random order, face down. Place decks of different types (tasks, daily events (hereinafter referred to as daily), box, bunker, field headquarters) next to the field. Now each player must choose or randomly draw a state (see below) to play for. Give everyone four basic units (see below), marked with an asterisk, which will be located at the initial «Base» location - a hex with a castle of one of eight colors. Flip the hexes on the board face up. Now you can examine the campaign map and figure out your next steps to capture it.')}}</p>
                    <p class="text-center">{{__('How to play cards')}}</p>
                    <p>{{__('The «Task» and «Daily» cards are picked up')}} <strong>{{__('first at the start of your turn')}}</strong> {{__('before any other action is taken, and are spoken out (see note below). ')}}
                        {{__('The first ones «cling» to the base unit and do not drop until it receives a rank or until you want to drop the task (see below). The second ones give a positive (hereinafter referred to as buff) or negative (hereinafter referred to as debuff) effect on all your soldiers at once and are postponed until the end. They are colored green (positive daily) and red (negative daily). Cards «Box», «Bunker», «Field Headquarters» are raised if you have captured the strategic point corresponding to it (see below).')}}</p>
                    <p><strong>{{__('Note:')}}</strong> {{__('Should to note that non-basic units, that is,')}} <strong>{{__('special units')}}</strong> {{__('and')}} <strong>{{__('additional units')}}</strong> {{__('(see below)')}}, <strong><u>{{__('can not')}}</u></strong> {{__('perform tasks. Also, tasks do not have to be completed or even taken from the deck during your unit\'s turn.')}}</p>
                        <p>{{__('Each')}} <strong>{{__('basic unit')}}</strong> {{__('can reset one task once without losing points (see below).')}}</p>
                        <p>{{__('It happens that some conditions in the cards will strongly conflict with the rules. Therefore, remember: the rules are certainly important to follow, but the text on the Daily cards is more important than them in meaning, and the text on the Task cards is more important than the previous ones.')}}</p>
                    <p class="text-center">{{__('Start and end of the game')}}</p>
                    <p>{{__('It is advisable to decide how long your game will last, otherwise it may last overnight. Next, decide who goes first by rolling the dice, playing rock-paper-scissors, arguing and shouting, or other methods that suit you.')}}</p>
                    <p>{{__('There are different ways to win:')}}</p>
                    <ul>
                        <li>{{__('Destroy all enemies')}}</li>
                        <li>{{__('Win at the end of the game with the maximum number of points (see below)')}}</li>
                    </ul>
                    <p>{{__('The player who has lost all units is eliminated from the game.')}}</p>

                    <nav aria-label="Правила">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">{{__('Previous')}}</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item" aria-current="page">
                                <a class="page-link" href="">3</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">{{__('Next')}}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
