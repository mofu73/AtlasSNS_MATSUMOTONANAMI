<x-login-layout>
<div id="container_post">
    {!! Form::open(['url' => '/create']) !!}
  <div class="form-group">
  @if(Auth::user()->icon_image=='icon1.png')
    <img src="{{ asset('images/icon1.png') }}" class="icon1" value="アイコン">
            @else
            <img src="{{ asset('storage/'.Auth::user()->icon_image) }}" class="icon2" value="アイコン">
            @endif
      {{ Form::input('text', 'newPost', null,['required', 'class' => 'form-control', 'placeholder' => '投稿内容を入力してください。'])}}
      <input type="image" class="post_image" src="/images/post.png" value="投稿" >
  </div>
  <hr style="border: 0; border-top: 7px solid #ccc;">
  {!! Form::close() !!}
</div>
@foreach ($posts as $post)
<table class="table table-hover">
<div class="post-date">
     <div class="icons">
    @if($post->user->icon_image=='icon1.png')
    <img src="{{ asset('images/icon1.png') }}" class="icon1" value="アイコン">
            @else
            <img src="{{ asset('storage/'.$post->user->icon_image) }}" class="icon2" value="アイコン">
            @endif
</a>
</div>
     <p class="post-name">{{ $post->user->username }}</p>
     <p class="time">{{ $post->created_at->format('Y/m/d H:i') }}</p>
</div>
<tr>
  <td></td>
     <p class="post-post">{{ $post->post }}</p>
</tr>
   <!-- 更新　-->
   <div class="content">
   <a href="#" class="js-modal-open"  post="{{ $post->post }}" post_id="{{ $post->id }}">
    <img src="images/edit.png" class="edit_image" alt="編集">
  </a>

   <!-- 削除-->
   <a class="btn btn danger" href="/post/{{$post->id}}/delete" onclick="return confirm('この投稿を削除します。よろしいでしょうか？')">
    <span class="Trash" src="images/trash.png" alt="削除"></span></a>
</tr>
</table>
@csrf
@endforeach
<!-- モーダルの中 -->
<!-- include('components.modal_window')
section('modal_window') -->
  <form action='/top/update' method="post">
    @csrf
    <div id="modal_open">
      <div class="modal_BG">
      </div>
      <div id="modal_main">
          {{ Form::input('text', 'upPost', null,['required', 'class' => 'form-control1', 'placeholder' => '投稿内容を入力してください。'])}}
          {{ Form::input('hidden', 'up_id', null,['class' => 'up_id'])}}
          @csrf
          <input type="image" class="edit_image1" src="/images/edit.png" value="更新" >
        </div>
        <footer id="modal_footer">
            <p><a id="modal-close" class="button-link">閉じる</a></p>
        </footer>
    </div>
  </form>
<!--endsection
yield('modal_window')-->

</x-login-layout>
