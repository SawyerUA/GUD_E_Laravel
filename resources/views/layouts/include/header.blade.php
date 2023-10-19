<header id="#header">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-xl navbar-light justify-content-start">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('home.index')}}">GUD-E</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('home.index')}}">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('rules.index')}}">Правила</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('units.index')}}">Юниты</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('components.index')}}">Компоненты</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('fractions.index')}}">Фракции</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('forum.index')}}">Форум</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Авторизация</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="">Вход</a></li>
                                    <li><a class="dropdown-item" href="">Выход</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
