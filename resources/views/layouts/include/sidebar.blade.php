<div class="container">
    <div class="row">
        <div class="container col-md-3 forum-categ">
            <h3 class="text-center categ">{{__('Categories')}}</h3>
            <ul class="forum-categ">
                @foreach($categories as $category)
                    @if(app()->getLocale() == 'en')
                    <li><a href="{{route('post_category.index', [$category->id, app()->getLocale()])}}">{{$category->category}}</a></li>
                    @elseif (app()->getLocale() == 'ua')
                        <li><a href="{{route('post_category.index', [$category->id, app()->getLocale()])}}">{{$category->category_ua}}</a></li>
                    @elseif(app()->getLocale() == 'ru')
                        <li><a href="{{route('post_category.index', [$category->id, app()->getLocale()])}}">{{$category->category}}</a></li>
                    @endif
                @endforeach
            </ul>
            <div class="d-flex justify-content-center mb-5">
                <a href="{{route('post.create', app()->getLocale())}}">
                    <button type="button" class="btn btn-secondary">{{__('Create post')}}</button>
                </a>
            </div>
            @can('view', auth()->user())
            <h4 class="text-center categ">{{__('For Administrator')}}</h4>
            <ul>
                <li><a href="{{route('post.index', app()->getLocale())}}">{{__('All posts')}}</a></li>
                <li><a href="{{route('category.index', app()->getLocale())}}">{{__('All categories')}}</a></li>
                <li><a href="{{route('user.index', app()->getLocale())}}">{{__('All users')}}</a></li>
            </ul>
            <div class="d-flex justify-content-center mb-5">
                <a href="{{route('category.create', app()->getLocale())}}">
                    <button type="button" class="btn btn-secondary">{{__('Create category')}}</button>
                </a>
            </div>
            @endcan
        </div>
