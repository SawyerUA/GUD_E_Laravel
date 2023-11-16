<div class="btn-to ps-5">
    <!-- Кнопка запуска в игру -->
    <button type="button" class="btn btn-secondary btn-lg ms-3" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">{{__('Play!')}}</button>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{__('Really start the game?')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    @if(Auth::check())
                        <button type="button" class="btn btn-primary"
                                data-bs-dismiss="modal">{{__('Yeah, let\'s go!')}}</button>
                    @else
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                                onclick="let btn = document.getElementById('forum-btn'); btn.click();">{{__('Yeah, let\'s go!')}}</button>
                    @endif
                    <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">{{__('Nah, wait a minute')}}</button>
                </div>
            </div>
        </div>
    </div>
</div>
