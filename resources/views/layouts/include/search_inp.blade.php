<div class="container">
    <nav class="navbar navbar-light">
        <div class="container-fluid justify-content-end">
            <form class="d-flex col-sm-6" action="{{route('search.index', app()->getLocale())}}" method="get">
                <input class="form-control" type="search" placeholder="{{__('type something...')}}" aria-label="Search"
                       name="search" value="{{request('search')}}">
                <button class="btn btn-secondary" type="submit">{{__('Search')}}</button>
            </form>
        </div>
    </nav>
</div>
