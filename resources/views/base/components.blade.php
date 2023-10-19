@extends('layouts.main')

@section('title')
    Компоненты
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-black">Игровые компоненты</h1><br>
                </div>
            </div>
            <!-- Старт первого аккордион по стандартным юнитам -->
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center fw-bold mb-3 mt-3">Стратегические точки</h2>

                    <div class="accordion accordion-flush" id="accordion1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Ящик</button></h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/ammobox.png')}}"><i>Ящики</i> относятся к ряду <strong>стратегических точек</strong>. На карте кампании может располагаться до 8-10 ящиков. В случае открытия, ящик остается отворенным, пока не будут вскрыты все оставшиеся. После использования, карточка из соответствующей колоды перетасовывается с остальными и кладется обратно.<br>
                                    <p>В ящиках могут скрываться карточки разного количества пополнения здоровья, брони или боеприпасов. Имеются пустышки.</p></div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Бункер</button></h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/bunker.png')}}"><i>Бункеры</i> относятся к ряду <strong>стратегических точек</strong>. На карте может располагаться до 4 Бункеров. После использования, карточка из соответствующей колоды перетасовывается с остальными и кладется обратно. В случае если на Вас напали, пока Вы находились в бункере, Вы получаете снижение урона на 3 ед. от изначально возможного, но это не распространяется на гранату. Возможность захватить бункер повторно появится только тогда, когда предыдущие захватчики отойдут от него на следующий район. После захвата этой стратегической точки, в течении следующих ближайших ходов, <strong><u>вы обязаны</u></strong> отвести своего юнита на расстояние, указанное выше.<br>
                                    <p>В бункерах могут скрываться карточки разного количества пополнения здоровья, брони или боеприпасов. Так же, есть и негативные карточки, которые могут нанести вам урон. Имеются пустышки. Но в отличие от ящика, в бункере может быть найден особый юнит, который перейдет под Ваше командование.</p><br><br>
                                    <strong>Примечание</strong>: В случае, если Вы нашли особого юнита, последний начинает движение с любого гекса рядом с бункером.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Полевой штаб</button></h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/tent.png')}}"><i>Полевой штаб</i> относиться к ряду <strong>стратегических точек</strong>. На карте может располагаться до 2 штук После использования, карточка из соответствующей колоды перетасовывается с остальными и кладется обратно. В случае если на Вас напали, пока Вы находитесь в здании, Вы получаете снижение урона на 1 ед. от изначально возможного, но это не распространяется на гранату. Возможность захватить полевой штаб повторно появится только тогда, когда предыдущие захватчики отойдут от него через 1 район. После захвата этой стратегической точки, в течении следующих ближайших ходов, <strong><u>вы обязаны</u></strong> отвести своих юнитов на расстояние, указанное выше.<br>
                                    <p>В полевых штабах могут скрываться карточки разного количества пополнения здоровья, брони или боеприпасов. Так же есть и негативные карточки, которые могут нанести вам урон. Имеются пустышки. В отличие от ящика и бункера, в полевом штабе Вы сможете нанять специального юнита, если Вы вытянули такую карточку. Солдат выставляется на территории вашей базы и начинает путь оттуда.</p></div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Аэродром</button></h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/airfield.png')}}"><i>Аэродром</i> является <strong>особой стратегической точкой</strong>. На карте может располагаться всего 1. Для того, чтобы открыть его, потребуется «расследовать» секретную текстуру, помеченную знаком вопроса, которые могут находится в любом поставленном месте. Аэродром можно захватить и его открытие станет известно всем игрокам. Он предназначен для того, чтобы до него добрался пилот, который сможет использовать свою способность.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Артиллерийский центр</button></h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion1">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/arty.png')}}"><i>Артиллерийский центр</i> является <strong>особой стратегической точкой</strong>. На карте может располагаться всего 1. Для того, чтобы открыть его, потребуется «расследовать» секретную текстуру, помеченную знаком вопроса, которые могут находится в любом поставленном месте. Артиллерийский центр можно захватить и его открытие станет известно всем игрокам. Он предназначен для того, чтобы до него добрался командир артиллерии, который сможет использовать свою способность.</div>
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
                    <h2 class="text-center fw-bold mb-3 mt-3">Природные объекты</h2>

                    <div class="accordion accordion-flush" id="accordion2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">Деревья</button></h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordion2">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/tree.png')}}">Подобного рода локации являются <strong>природными объектами</strong>. Они могут находиться в любой точке на карте. В случае, если Вы были атакованы, пока находились в лесах, враг получает уменьшение точности на 2 ед. (не относиться к снайперу). Передвижение по ним максимум равно 1 гексу, ведь нужно двигаться осторожно, чтобы вас не заметили.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">Водные гексы</button></h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordion2">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/river.png')}}">Подобного рода локации являются <strong>природными объектами</strong>. Они могут находиться в любой выбранной точке на карте. В случае, если Вы переходите эти места в морозный час, ведь водоемы мерзнут (см. ниже), то потери шагов нет. Если же Вы пересекаете их в теплое время (примеч. см. ниже), то при спуске в воду и при подъеме на берег, Вы теряете все оставшиеся шаги.<br><br>
                                    <strong>Пример: </strong>Вы стоите через 1 гекс к воде. Если на кубике выпало 4, то Вы сделаете 2 шага (пустой гекс и гекс с водой) и перестанете ходить до следующего хода. Так же и в случае, если Вы поднимаетесь на берег.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">Горы</button></h2>
                            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordion2">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/mountain.png')}}">Подобного рода локации являются <strong>природными объектами</strong>. Они могут находится в любой выбранной точке на карте. Вы получаете прибавку к дальности стрельбы на 1 ед. от изначального, если стоите на них. В зимнее время нет возможности ходить по горам, ведь горы суровое место. Если же зима застала вашего юнита на горе, он немедленно погибает. В случае, когда Вы пересекаете горный кряж, Вы теряете все оставшиеся шаги на подъем и на спуск с горы. А вот если же Вы двигаетесь по горной гряде, то потери шагов при передвижении нет.<br><br>
                                    <strong>Пример: </strong>Вы стоите через 1 гекс к подъему на гору. Если на кубике выпало 4, то Вы сделаете 2 шага (пустой гекс и гекс с возвышенностью) и перестанете ходить до следующего хода. Так же и в случае, когда Вы спускаетесь.
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
                    <h2 class="text-center fw-bold mb-3 mt-3">Объекты без привязки</h2>

                    <div class="accordion accordion-flush" id="accordion2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button collapsed fst-italic fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">База</button></h2>
                            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordion2">
                                <div class="accordion-body"><img class="img-fluid mx-auto d-block" src="{{asset('img/components/base.png')}}">Этот тип текстуры не относится ни к одному из ранее озвученных. Это родная локация Вашей нации, размерами в район. Отсюда все Ваши юниты начинают движение. Базу нельзя захватить, она неиграбельна по отношению к другим игрокам. Однако юнитов, находящихся на её территориях, можно атаковать.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Конец третьего аккордиона по спец юнитам -->
                </div>
            </div>
        </div>
    </section>
@endsection
