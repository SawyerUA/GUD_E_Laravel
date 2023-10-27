<header id="#header">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-xl navbar-light justify-content-start">
                <div class="container-fluid">
                    <a class="navbar-brand game_title" href="{{route('home.index', app()->getLocale())}}">GUD-E</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('home.index', app()->getLocale())}}">{{__('Home')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('rules.index', app()->getLocale())}}" id="rules">{{__('Rules')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('units.index', app()->getLocale())}}">{{__('Units')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('components.index', app()->getLocale())}}">{{__('Components')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('fractions.index', app()->getLocale())}}">{{__('Fractions')}}</a>
                            </li>
                            @if(Auth::check())
                            <li class="nav-item">
                                <a class="nav-link active " href="{{route('forum.index', app()->getLocale())}}">{{__('Forum')}}</a>
                            </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="modal" data-bs-target="#forumBtn" id="forum-btn">{{__('Forum')}}</a>
                                    <div class="modal fade" id="forumBtn" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-danger" id="staticBackdropLabel">{{__('You can visit forum only after registration')}}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item dropdown">
                                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('Authorization')}}</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="{{route('login', app()->getLocale())}}">{{__('Log in')}}</a></li>
                                            <li><a class="dropdown-item" href="">{{__('Logout')}}</a></li>
                                        </ul>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-user"></i> {{ Auth::user()->name }}</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <form id="logout-form" action="{{ route('logout', app()->getLocale())}}" method="post">
                                        @csrf
                                        <li><a class="dropdown-item" href="{{ route('logout', app()->getLocale())}}"
                                               onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">{{__('Logout')}}</a></li>
                                    </form>
                                </ul>
                            @endguest
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle language" id="lang" data-bs-toggle="dropdown" aria-expanded="false"></a>
                                <ul class="dropdown-menu lang" aria-labelledby="navbarDropdown">
                                    @foreach(config('app.available_locales') as $locale)
                                    <li><a class="dropdown-item"
                                           href="{{route(\Illuminate\Support\Facades\Route::currentRouteName(),
                                                array_merge(\Illuminate\Support\Facades\Route::current()->parameters(), ['locale' => $locale]))}}"
                                        @if(app()->getLocale() == $locale) id="locale" style="text-decoration: underline" @endif>{{strtoupper($locale)}}</a></li>
                                    @endforeach
                                </ul>
                                <script>
                                    let lang = document.getElementById('lang');
                                    let locale = document.getElementById('locale').toString();
                                        if (locale.length < 38){
                                            lang.innerHTML = locale.slice(22, 24).toUpperCase();
                                        }else if(locale.length > 39){
                                            lang.innerHTML = locale.slice(45).toUpperCase();
                                        }else{
                                            lang.innerHTML = locale.slice(36).toUpperCase();
                                        }
                                </script>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
