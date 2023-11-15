@extends('layouts.main')

@section('title')
    {{__('Units')}}
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-black">{{__('Unit\'s indicators and their classification')}}</h1><br>
                </div>
            </div>
            <!-- Старт первого аккордион по стандартным юнитам -->
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center fw-bold mb-3 mt-3">{{__('Standard units of the «infantry» type')}}</h2>

                    <div class="accordion accordion-flush" id="accordion1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="units-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">{{__('The rifleman')}}</button></h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/units/rifle.png')}}">
                                    <p><i>{{__('The rifleman')}}</i> {{__('only owns a rifle and a knife. Has 10 points of health and armor. The ammunition is designed for 10 shots, it fires once. The maximum firing range is 8 hexes.')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="units-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">{{__('The stormtrooper')}}</button></h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/units/assault.png')}}">
                                    <p><i>{{__('The stormtrooper')}}</i> {{__('wields a rifle, a knife and a grenade. Has 10 points of health and armor. The ammunition is designed for 10 shots and 1 grenade throw, it fires once. The maximum firing range is 8 hexes, the maximum grenade throw range is 3 hexes. A unit cannot throw a grenade and shoot in one turn; you need to choose one thing.')}}</p>
                                    <p><strong>{{__('Note:')}}</strong> {{__('The grenade can deal area damage. It will deal')}} <strong>{{__('the full amount of damage')}}</strong> {{__('if it was thrown at one unit.')}} {{__('However, if it was used against several units, then those adjacent to the main enemy unit')}} <strong>{{__('will receive half the damage')}}</strong> {{__('that received first.')}}</p>
                                    <p><strong>{{__('Example:')}}</strong> {{__('If you throw a grenade at three units (at the central one), and the die rolls 5, then the central one gets all 5 damage points, and those adjacent to it will get 3 damage points (cuz of rounded up).')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="units-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">{{__('The scout')}}</button></h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/units/gun.png')}}">
                                    <p><i>{{__('The scout')}}</i> {{__('wields an auto-rifle and a knife. Has 10 points of health and armor. The ammunition is designed for 10 burst shots, using 1 shot each. The maximum firing range is 5 hexes. Has the ability to distribute damage across units if they are in the affected area.')}}</p>
                                    <p><strong>{{__('Example:')}}</strong> {{__('You are fighting against a group of three enemy units. When you roll the die, you get 5. Now you have the opportunity to distribute this damage across all enemies, if they are close to each other. For example, to the first - 2 damage points, to the second - 2 damage points, to the third - 1 damage points. At the same time, you need to remember that they must be on hexes adjacent to the main enemy target, and this target itself must be on the same line with your unit.')}}</p>
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
                    <h2 class="text-center fw-bold mb-3 mt-3">{{__('Special units of the «infantry» type')}}</h2>

                    <div class="accordion accordion-flush" id="accordion2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="units-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">{{__('The sniper')}}</button></h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion2">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/units/sniper.png')}}">
                                    <p><i>{{__('The sniper')}}</i> {{__('belongs to the')}} <strong>{{__('special units.')}}</strong> {{__('Wields a sniper rifle and a knife. Has 10 points of health and armor. The ammunition is designed for 10 shots, fired once. Maximum firing range is 12 hexes. Has the ability to hit an opponent without rolling an accuracy die.')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="units-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">{{__('The machine gunner')}}</button></h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion2">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/units/machinegun.png')}}">
                                    <p><i>{{__('The machine gunner')}}</i> {{__('belongs to the')}} <strong>{{__('special units.')}}</strong> {{__('He wields a machine gun and a knife. Has 10 points of health and armor. The ammunition is designed for 10 burst shots, using 1 shot each. The maximum firing range is 6 hexes. Has the ability to deal double damage to one enemy or deal normal damage to several enemies.')}}</p>
                                    <p><strong>{{__('Example:')}}</strong> {{__('You are fighting against a group of 3 enemy units. When you roll the die, you get 6. Now you have a choice: duplicate the number and deal 12 damage points to any unit, or deal the usual 6 damage points to all three. At the same time, you need to remember that they must be on hexes adjacent to the main enemy target, and this target itself must be on the same line with your unit.')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Конец второго аккордиона по спец юнитам -->
                </div>
            </div>

            <br>
            <!-- Старт третьего аккордиона по особым юнитам -->
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center fw-bold mb-3 mt-3">{{__('Extra units of the «infantry» type')}}</h2>

                    <div class="accordion accordion-flush" id="accordion3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading6">
                                <button class="units-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">{{__('The pilot')}}</button></h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordion3">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/units/pilot.png')}}">
                                    <p><i>{{__('The pilot')}}</i> {{__('belongs to the')}} <strong>{{__('extra units.')}}</strong> {{__('He wields a pistol and a knife. Has 10 health points. The ammunition is designed for 1 shot, it fires once. The maximum firing range is 5 hexes. Has the ability to call an airstrike from the airfield (see below) to any point on the campaign map. The airstrike is carried out on 1 or more hexes in a row, depending on the number on rolled die. Deals 4 damage points to those hexes that were selected. After using his ability, the pilot disappears from the campaign map.')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading7">
                                <button class="units-accordion accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">{{__('The artillery commander')}}</button></h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordion3">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/units/artillery.png')}}">
                                    <p><i>{{__('The artillery commander')}}</i> {{__('belongs to the')}} <strong>{{__('extra units.')}}</strong> {{__('He wields a pistol and a knife. Has 10 health points. The ammunition is designed for 1 shot, it fires once. The maximum firing range is 5 hexes. Has the ability to call an artillery strike from the artillery center (see below) to any point on the campaign map. An artillery strike inflicts 6 damage points on a hex of your choice and 4 damage points on hexes in contact with it.')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Конец третьего аккордиона по особым юнитам -->
                </div>
            </div>
        </div>
    </section>
@endsection
