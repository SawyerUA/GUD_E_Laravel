<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 footer-section site-about">
                <div class="about">
                    <p class="text-start text">Этот сайт сделан и разработан на основании личной практики.</p>
                </div>
                <div class="contact">
                    <span><i class="fa-solid fa-phone"></i>+380 11 111 11 11</span><br>
                    <span><i class="fa-solid fa-envelope"></i>ddddd@gmail.com</span>
                </div>
                <div class="socials mt-3">
                    <a href="#"><i class="fa-brands fa-telegram social"></i>Telegram</a>
                    <a href="#"><i class="fa-brands fa-viber social"></i>Viber</a><br>
                    <a href="#"><i class="fa-brands fa-facebook social"></i>Facebook</a>
                    <a href="#"><i class="fa-brands fa-discord social"></i>Discord</a>
                </div>
            </div>
            <div class="col-md-4 col-12 footer-section quick-acces">
                <div class="text">
                    <p class="text-center">Быстрый доступ</p>
                </div>
                <div class="nav justify-content-center">
                    <ul class="list">
                        <li><a href="{{route('rules.index')}}">Правила</a></li>
                        <li><a href="{{route('units.index')}}">Юниты</a></li>
                        <li><a href="{{route('components.index')}}">Компоненты</a></li>
                        <li><a href="{{route('fractions.index')}}">Фракции</a></li>
                        <li><a href="{{route('forum.index')}}">Форум</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-12 footer-section mail-to">
                <div>
                    <p class="text">Спросить автора</p>
                </div>
                <form class="o-form">
                    <label for="mail-to-form" class="form-label"></label>
                    <input type="email" class="form-control" id="mail-to-form" placeholder="your@email.com">

                    <label for="text-mail" class="form-label"></label>
                    <textarea class="form-control" id="text-mail" rows="2" placeholder="Спросите ваш вопрос...."></textarea>

                    <button type="submit" class="btn btn-secondary float-end" name="btn-ask">Спросить</button>
                </form>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="copy"><i class="fa-regular fa-copyright fa-xs"></i>All rights reserved | @D_Sawy</p>
                </div>
            </div>
        </div>
</footer>
