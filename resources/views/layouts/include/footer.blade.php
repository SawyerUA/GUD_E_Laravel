<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 footer-section site-about">
                <div class="about">
                    <p class="text-start text">{{__('Website is developed based on personal practice')}}</p>
                </div>
                <div class="contact">
                    <span><i class="fa-solid fa-phone"></i>+380 11 111 11 11</span><br>
                    <span><i class="fa-solid fa-envelope"></i>ddddd@gmail.com</span>
                </div>
                <div class="socials mt-3">
                    <ul class="list">
                        <li><a href="#" target="_blank"><i class="fa-brands fa-telegram social"></i>Telegram</a></li>
                        <li><a href="#" target="_blank"><i class="fa-brands fa-viber social mt-1"></i>Viber</a></li>
                        <li><a href="#" target="_blank"><i class="fa-brands fa-facebook social mt-1"></i>Facebook</a></li>
                        <li><a href="#" target="_blank"><i class="fa-brands fa-discord social mt-1"></i>Discord</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="text">
                    <p class="text-center">{{__('Quick access')}}</p>
                </div>
                <div class="nav justify-content-center">
                    <ul class="list">
                        <li><a href="{{route('rules.index', app()->getLocale())}}">{{__('Rules')}}</a></li>
                        <li><a href="{{route('units.index', app()->getLocale())}}">{{__('Units')}}</a></li>
                        <li><a href="{{route('components.index', app()->getLocale())}}">{{__('Components')}}</a></li>
                        <li><a href="{{route('fractions.index', app()->getLocale())}}">{{__('Fractions')}}</a></li>
                        @if(Auth::check())
                            <li><a href="{{route('forum.index', app()->getLocale())}}">{{__('Forum')}}</a></li>
                        @else
                            <li><a href="#" onclick="let btn = document.getElementById('forum-btn'); btn.click();">{{__('Forum')}}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-12 footer-section mail-to">
                <div>
                    <p class="text">{{__('Ask author')}}</p>
                </div>
                <form class="o-form" action="{{route('ask_author.store', app()->getLocale())}}" method="post">
                    @csrf
                    <label for="mail-to-form" class="form-label"></label>
                    <input type="email" name="email" class="form-control" id="mail-to-form" placeholder="{{__('Email')}}">

                    <label for="text-mail" class="form-label"></label>
                    <textarea class="form-control" id="text-mail" name="text" rows="2" placeholder="{{__('Ask your question...')}}"></textarea>

                    <button type="submit" class="btn btn-secondary float-end mt-2" name="btn-ask">{{__('Send')}}</button>
                </form>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="copy"><i class="fa-regular fa-copyright fa-xs"></i>All rights reserved | @D_Sawy</p>
                </div>
            </div>
        </div>
    </div>
</footer>
