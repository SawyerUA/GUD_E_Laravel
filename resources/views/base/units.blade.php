@extends('layouts.main')

@section('title')
    {{__('Units')}}
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-black">Показатели юнитов и их классификация</h1><br>
                </div>
            </div>
            <!-- Старт первого аккордион по стандартным юнитам -->
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center fw-bold mb-3 mt-3">Стандартные юниты типа "пехота"</h2>

                    <div class="accordion accordion-flush" id="accordion1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Стрелок</button></h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/units/rifle.png')}}"><i>Стрелок</i> владеет только винтовкой и ножом. Имеет 10 ед. здоровья и брони. Боезапас рассчитан на 10 выстрелов, стреляет единично. Дальность максимальной стрельбы 8 гексов.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Штурмовик</button></h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/units/assault.png')}}"><i>Штурмовик</i> владеет винтовкой, ножом и гранатой. Имеет 10 ед. здоровья и брони. Боезапас рассчитан на 10 выстрелов и на 1 бросок гранаты, стреляет единично. Дальность максимальной стрельбы 8 гексов, дальность максимального броска гранаты 3 гекса. Юнит не может в один ход кинуть гранату и выстрелить, нужно выбрать что-то одно.<br><br>
                                    <strong>Примечание:</strong> Граната может наносить урон по площади. В случае если она была брошена в одного юнита, будет нанесено <strong>полное количество урона.</strong> Если же, она была использована против нескольких юнитов, то соседние от доставаемого вражеского юнита <strong>получат половину от урона,</strong> который получил <strong>первый.</strong><br><br>
                                    <strong>Пример:</strong> Если Вы кинули гранату в трех юнитов (в центрального), и на брошенном кубике выпало 5, то центральный получает все 5 ед. урона, а соседние от него 3 ед. урона (округление в большую сторону).</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Автоматчик</button></h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/units/gun.png')}}"><i>Автоматчик</i> владеет автоматом и ножом. Имеет 10 ед. здоровья и брони. Боезапас рассчитан на 10 выстрелов очередью, используя по 1 ед. боезапаса. Дальность максимальной стрельбы 5 гексов. Имеет способность распределять урон, выпавший на кубике по юнитам, стоящим в достреливаемой зоне.<br><br>
                                    <strong>Пример: </strong>Если Вы выступили автоматчиком против одного вражеского юнита и на кубике выпало, к примеру, 5, то все 5 урона наносятся по нему. В случае, если вражеские юниты стоят кучно, Вы можете выбрать основного врага целью. Нужно помнить, что стрелять Вы можете лишь по врагу, стоящему на одной линии с Вашим юнитом. При этом юниты, стоящие на соседних с ним гексах будут также получать урон. Далее если на брошенном Вами кубике выпало, к примеру, 6, то Вы можете распределить этот урон по всем. Например, первому врагу - 2 единицы урона, второму - 2 ед. урона, третьему - 1 ед. урона, четвертому - 1 ед. урона. </div>
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
                    <h2 class="text-center fw-bold mb-3 mt-3">Специальные юниты типа "пехота"</h2>

                    <div class="accordion accordion-flush" id="accordion2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Снайпер</button></h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion2">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/units/sniper.png')}}"><i>Снайпер</i>, относиться к числу <strong>специальных юнитов.</strong> Он владеет снайперской винтовкой и ножом. Имеет 10 ед. здоровья и брони. Боезапас рассчитан на 10 выстрелов, стреляет единично. Дальность максимальной стрельбы 12 гексов. Имеет способность поражать противника без броска кубика на точность.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Пулеметчик</button></h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion2">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/units/machinegun.png')}}"><i>Пулеметчик</i> относиться к числу <strong>специальных юнитов.</strong> Он владеет пулеметом и ножом. Имеет 10 ед. здоровья и брони. Боезапас рассчитан на 10 выстрелов очередью, используя по 1 ед. боезапаса. Дальность максимальной стрельбы 6 гексов. Имеет способность нанести двойной урон одному противнику или распределить урон по нескольким без потери последнего.<br><br>
                                    <strong>Пример: </strong>Если Вы сражаетесь против одного противника, то выпавшее число при броске кубика на наносимый урон дублируется. То есть, максимальный урон от пулеметчика может быть равен 12 ед. Если же пулеметчик вступил в бой с несколькими противниками, то выпавшее на кубике число, к примеру, 5, будет нанесено по всем одинаково, без распределения, как у автоматчика. При этом нужно помнить, что они должны стоять на соседних с основным врагом-целью гексах, а сама эта цель должна быть на одной линии с вашим юнитом.<br><br>
                                    <strong>Примечание: </strong>В случае, когда Вы выступили против двух и более юнитов, Вы можете выбрать: либо нанести урон основной цели в двукратном размере, либо нанести каждому из группы врагов чистый урон.
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
                    <h2 class="text-center fw-bold mb-3 mt-3">Особые юниты типа "пехота"</h2>

                    <div class="accordion accordion-flush" id="accordion3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading6">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">Пилот</button></h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordion3">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/units/pilot.png')}}"><i>Пилот</i> является <strong>особым юнитом.</strong> Он владеет пистолетом и ножом. Имеет 10 ед. здоровья. Боезапас рассчитан на 1 выстрел, стреляет единично. Дальность максимальной стрельбы 5 гексов. Имеет способность призвать с аэродрома (см. ниже) авиаудар в любую точку на карте кампании. Авиаудар наносится на 1 или более гексов в ряд, в зависимости от числа, выпавшего после броска кубика. Наносит 4 ед. урона по тем гексам, которые были выбраны. После использования своей особенности пилот пропадает с карты кампании.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading7">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">Командир артиллерии</button></h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordion3">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/units/artillery.png')}}"><i>Командир артиллерии</i> является <strong>особым юнитом.</strong> Он владеет пистолетом и ножом. Имеет 10 ед. здоровья. Боезапас рассчитан на 1 выстрел, стреляет единично. Дальность максимальной стрельбы 5 гексов. Имеет способность призвать артиллерийский удар из артиллерийского центра (см. ниже) в любую точку на карте кампании. Артиллерийский удар наносит в выбранный Вами гекс 6 ед. урона, а по соприкасающимся с ним гексам 4 ед. урона. </div>
                            </div>
                        </div>
                    </div>
                    <!-- Конец третьего аккордиона по особым юнитам -->
                </div>
            </div>
        </div>
    </section>
@endsection
