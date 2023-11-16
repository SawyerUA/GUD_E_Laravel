@extends('layouts.main')

@section('title')
    {{__('Components')}}
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-black">{{__('Game components')}}</h1><br>
                </div>
            </div>
            <!-- Старт первого аккордион по стандартным юнитам -->
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center fw-bold mb-3 mt-3">{{__('Strategic points')}}</h2>

                    <div class="accordion accordion-flush" id="accordion1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="components-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">{{__('Boxes')}}</button></h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/ammobox.png')}}">
                                    <p><i>{{__('Boxes')}}</i> {{__('belong to')}} <strong>{{__('strategic points')}}</strong>. {{__('There can be up to 8-10 boxes on the campaign map. If opened, the box remains open until all the remaining ones are opened. After use, a card from the corresponding deck is shuffled with the others and put back.')}}</p>
                                    <p>{{__('Boxes may contain cards with varying amounts of health, armor, or ammo replenishment. Also there are empty ones.')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="components-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">{{__('Bunkers')}}</button></h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/bunker.png')}}">
                                    <p><i>{{__('Bunkers')}}</i> {{__('belong to')}} <strong>{{__('strategic points')}}</strong>. {{__('There can be up to 4 bunkers on the map. After use, a card from the corresponding deck is shuffled with the others and put back. If you are attacked while you are in the bunker, you receive a damage reduction of 3 points, but this does not apply to the grenade. The opportunity to recapture the bunker will only appear when the previous invaders move away from it on 3 hexes.')}} {{__('After capturing this strategic point, during the next 3 turns,')}} <strong><u>{{__('you must to')}}</u></strong> {{__('withdraw your unit to the distance specified above.')}}</p>
                                    <p>{{__('Bunkers may contain cards with varying amounts of health, armor, or ammo refills and negative cards that can deals damage to you. Also there are empty ones. But unlike the boxes, an extra unit can be found here, which will come under your command.')}}</p><br>
                                    <p><strong>{{__('Note:')}}</strong> {{__('If you find an extra unit, it starts moving from any hex next to the bunker.')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="components-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">{{__('Field headquarters')}}</button></h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/tent.png')}}">
                                    <p><i>{{__('Field headquarters')}}</i> {{__('belong to')}} <strong>{{__('strategic points')}}</strong>. {{__('There can be up to 2 field headquarters on the map. After use, a card from the corresponding deck is shuffled with the others and put back. If you are attacked while you are in the Field headquarters, you receive a damage reduction of 1 points, but this does not apply to the grenade The opportunity to capture the field headquarters again will appear only when the previous invaders move away from it on 6 hexes.')}} {{__('After capturing this strategic point, during the next 3 turns,')}} <strong><u>{{__('you must to')}}</u></strong> {{__('withdraw your unit to the distance specified above.')}}</p>
                                    <p>{{__('Field headquarters may contain cards with varying amounts of health, armor, or ammo refills and negative cards that can deals damage to you. Also there are empty ones. But unlike the boxes and bunkers, a special unit can be found here, which will come under your command.')}}</p><br>
                                    <p><strong>{{__('Note:')}}</strong> {{__('If you find a special unit, it starts moving from your Base.')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="components-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">{{__('Airfield')}}</button></h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/airfield.png')}}">
                                    <p><i>{{__('Airfield')}}</i> {{__('is belong to')}} <strong>{{__('special strategic points')}}</strong>. {{__('There can only be 1 on the map. In order to open it, you will need to «investigate» a secret texture marked with a question mark, which can be located in any given location. The airfield can be captured and its opening will become known to all players. The pilot needs to get to it, where he can use his ability.')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="components-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">{{__('Artillery center')}}</button></h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/arty.png')}}">
                                    <p><i>{{__('Artillery center')}}</i> {{__('is belong to')}} <strong>{{__('special strategic points')}}</strong>. {{__('There can only be 1 on the map. In order to open it, you will need to «investigate» a secret texture marked with a question mark, which can be located in any given location. The artillery center can be captured and its opening will become known to all players. The artillery commander needs to get to it, where he can use his ability.')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Конец первого аккордиона -->
            <br>
            <!-- Старт второго аккордиона по спец юнитам -->
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center fw-bold mb-3 mt-3">{{__('Natural objects')}}</h2>

                    <div class="accordion accordion-flush" id="accordion2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading6">
                                <button class="components-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">{{__('Trees')}}</button></h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordion2">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/tree.png')}}">
                                    <p>{{__('These types of locations are')}} <strong>{{__('natural objects')}}</strong>. {{__('They can be located anywhere on the map. If you were attacked while you were in the forests, the enemy receives a reduction in accuracy by 2 points (does not apply to the sniper). Moving along them is a maximum of 1 hex. Need to move carefully so you should not be noticed you know.')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading7">
                                <button class="components-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">{{__('Water heks')}}</button></h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordion2">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/river.png')}}">
                                    <p>{{__('These types of locations are')}} <strong>{{__('natural objects')}}</strong>. {{__('They can be located anywhere on the map. If you cross these places in the frosty hour (cuz the water freezing) there is no loss of moves. If you cross them in warm weather, then when descending into the water and when ascending to the shore, you lose all the remaining moves.')}}</p>
                                    <p><strong>{{__('Example:')}}</strong> {{__('You are standing 1 hex away from the water. If 4 is rolled on the die, you will take 2 steps (an empty hex and a hex with water) and stop walking until the next turn. The same is when you go ashore.')}}</p>
                                    <p>{{__('If you will do the same thing but in frosty time, you just do your 4 steps from 4 rolled on the die.')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading8">
                                <button class="components-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">{{__('Mountains or hills')}}</button></h2>
                            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordion2">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/mountain.png')}}">
                                    <p>{{__('These types of locations are')}} <strong>{{__('natural objects')}}</strong>. {{__('They can be located anywhere on the map. You get an increase in firing range by 1 unit if you stand on them. In winter, it is not possible to walk in the mountains, because mountains are harsh places. If winter finds your unit on the mountain, it immediately dies. In case when you crossing a mountain ridge, you lose all remaining steps (see below). But if you move along a mountain range, then there is no loss of steps while moving.')}}</p>
                                    <p><strong>{{__('Example:')}}</strong> {{__('You are standing 1 hex away from the mountain. If 4 is rolled on the die, you will take 2 steps (an empty hex and a hex with a hill) and stop walking until your next turn. The same is when you go down.')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Конец второго аккордиона по спец юнитам -->
            <br>
            <!-- Старт третьего аккордиона по спец юнитам -->
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center fw-bold mb-3 mt-3">{{__('Unlinked objects')}}</h2>

                    <div class="accordion accordion-flush" id="accordion2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading9">
                                <button class="components-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">{{__('Base')}}</button></h2>
                            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordion2">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/base.png')}}">
                                    <p>{{__('This type of texture does not belong to any of the previously ones. This is your faction\'s starting location. From here all your units begin to move. The base cannot be captured, it is unplayable zone to other players. However, units located on this territory can be attacked.')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Конец третьего аккордиона по спец юнитам -->
                </div>
            </div>
        </div>
    </section>
@endsection
