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
                    <a href="{{route('rules4.index', app()->getLocale())}}"><img src="{{asset('img/arrow_left.png')}}"></a>
                </div>

                <div class="row col-10">
                    <h5 class="text-center mb-3">{{__('Other game features')}}</h5>
                    <p>{{__('Let\'s quickly return to what we\'ve covered. Rules are an undeniable part of the game. But higher in importance are: «Dailys», «Tasks» and fractions effects. Follow this carefully, and you will not have problems with the game.')}}</p>
                    <p>{{__('As for the time of year? There are only two of them: winter (cold) and summer (warm). Each of them lasts two phases, but the game always starts at summer. They do not carry any more gaming load other than what has already been written.')}}</p>
                    <p>{{__('In conclusion, we would like to say that the game is full of setups and all kinds of triks. Remember that every country does not have an endless number of troops that it leads. The combat units may run out, so keep a close eye on it.')}}</p>
                    <p>{{__('For a more comfortable game, treat it with humor. By the way, you are not prohibited from organizing «unions». But to betray, to stick a knife in the back or put a spoke in the wheels is always welcome. Alliances are concluded in words, but for greater realism, we recommend using a separate piece of paper so that this is clearly recorded and no one asks unnecessary questions. One has only to add that the conditions of such unions must be negotiated or spelled out and observed. There are no clear rules about this point.')}}</p>
                    <p>{{__('You are the ruler, your country is your kid. Everyone who encroaches on your territory is an enemy, and these are the other players at the table. Don\'t trust anyone. Lead wisely and honestly. Correctly assess your chances and achieve victories.')}}</p>
                    <h6>{{__('Well, have a good game!')}}</h6>

                    <nav class="pt-5">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules4.index', app()->getLocale())}}" tabindex="-1" aria-disabled="true">{{__('Previous')}}</a>
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
                            <li class="page-item">
                                <a class="page-link" href="{{route('rules4.index', app()->getLocale())}}">4</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">{{__('Next')}}</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-1 d-none d-md-block float-end align-self-center">
                    <a href="#"><img src="{{asset('img/arrow_right.png')}}"></a>
                </div>
            </div>
        </div>
    </section>
@endsection
