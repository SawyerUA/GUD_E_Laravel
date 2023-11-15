<div class="col-12 ms-3 mb-3 comments">
    <h3>{{__('Leave comment')}}</h3>
    <form action="{{route('post.comment.store', $post->id)}}" method="post">
        @csrf
        <input type="hidden" name="post_id" value="{{$post->id}}">
        <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">{{__('Email')}}</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{Auth()->user()->email}}" readonly>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">{{__("Here you can leave your comment")}}</label>
            <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-secondary" type="submit" name="send_comment">{{__('Send comment')}}</button>
        </div>
    </form>

    <div class="col-12">
        <h3 class="col-12">{{__('All comments')}}: {{$post->comments->count()}}</h3>
        @foreach ($comments as $comment)
            @if($comment->post_id == $post->id)
                <div class="row one-com">
                    <div class="col-12">
                        <span class="">
                            @if($comment->user->img != NULL)
                                <img class="profile-img" style="height: 20px" src="{{asset('storage/' . $comment->user->img)}}">
                            @else
                                <i class="fa-regular fa-user"></i>
                            @endif
                                {{$comment->user->name}}</span>
                        <span class="text-muted float-end">{{$comment->DateCarbon->diffForHumans()}}</span>
                    </div>
                    <div>
                        <p>{{$comment->comment}}</p>
                    </div>
                    <div class="d-flex justify-content-end">
{{--                        <div><a class="edit" href=""><i class="fa-solid fa-pencil fa-sm"></i>{{__('Edit')}}</a></div>--}}
                        @if(Auth()->user()->is_admin == 1)
                        <a class="del ms-3">
                            <form action="{{route('post.comment.destroy', [$comment->id, $post->id])}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="{{__('Delete')}}" class="del"><i
                                    class="fa-solid fa-trash fa-sm"></i>
                            </form>
                        </a>
                        @endif
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
