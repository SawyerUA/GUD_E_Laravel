@extends('layouts.main')

@section('title')
    Фракции
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="rules text-center mb-5">Фракции</h2>
                    <p>В игре присутствует ряд стран, за которые игрок может играть. В начале игры они выдаются в случайном порядке или выбираются по желанию, но мы, все-таки, рекомендуем первый вариант. У каждого государства есть две особенности, которые всегда активны. Внимательно изучите их и грамотно применяйте.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-4">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/countries/france.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Франция</h5>
                            <p class="card-text"><u class="fst-italic">Рождение Наполеона</u>: Любой стартовый юнит может стать командиром артиллерии, добравшись до артиллерийского центра и использовать свою особенность на следующем ходу.<br>
                                <u class="fst-italic">Белый флаг</u>: На 40 ходу Франция обязана передать все территории, кроме Базы, под контроль Германии.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/countries/germany.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Германия</h5>
                            <p class="card-text"><u class="fst-italic">Блицкриг</u>: Кубик на перемещение бросается 2 раза.<br>
                                <u class="fst-italic">Капитуляция Берлина</u>: На 45 ходу все территории Германии, кроме Базы, становятся нейтральными.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/countries/england.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Англия</h5>
                            <p class="card-text"><u class="fst-italic">Яблочный пирог</u>: Все карточки на пополнение здоровья восстанавливают максимум единиц.<br>
                                <u class="fst-italic">Ирландская Революционная Армия</u>: При финальном подсчете очков за территории, 2 района не считаются английскими.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/countries/italy.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Италия</h5>
                            <p class="card-text"><u class="fst-italic">Папская прихоть</u>: Можно объявить Крестовый поход 4 раза за игру длительностью в 5 фаз.<br>
                                <u class="fst-italic">Доля мафиози</u>: Все карточки на пополнение боеприпасов срезаны вдвое, но не меньше 1 единицы.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
