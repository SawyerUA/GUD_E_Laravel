<div class="container">
    <div class="row">
        <div class="container">
            <nav class="navbar navbar-light">
                <div class="container-fluid justify-content-end">
                    <form class="d-flex col-sm-4" action="{{route('search.index')}}">
                        <input class="form-control" type="search" placeholder="введите что-то..." aria-label="Search"
                               name="search" value="{{request('search')}}">
                        <button class="btn btn-secondary" type="submit">Поиск</button>
                    </form>
                </div>
            </nav>
        </div>
        <div class="container col-md-3 forum-categ">
            <h3 class="text-center categ">Разделы</h3>
            <ul class="forum-categ">
                @foreach($categories as $category)
                    <li><a href="#">{{$category->category}}</a></li>
                @endforeach
            </ul>
            <div class="d-flex justify-content-center mb-5">
                <a href="{{route('post.create')}}">
                    <button type="button" class="btn btn-secondary">Создать статью</button>
                </a>
            </div>
            @can('view', auth()->user())
            <h4 class="text-center categ">Администратору</h4>
            <ul>
                <li><a href="{{route('post.index')}}">Ко всем статьям</a></li>
                <li><a href="{{route('category.index')}}">Ко всем категориям</a></li>
                <li><a href="{{route('user.index')}}">Управление пользователями</a></li>
            </ul>
            <div class="d-flex justify-content-center mb-5">
                <a href="{{route('category.create')}}">
                    <button type="button" class="btn btn-secondary">Создать категорию</button>
                </a>
            </div>
            @endcan
        </div>
