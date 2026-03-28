<x-login-layout>
<div id="container_post">
    {!! Form::open(['url' => '/create']) !!}
    <a><img src="images/icon1.png"></a>
  <div class="form-group">
      {{ Form::input('text', 'newPost', null,['required', 'class' => 'form-control', 'placeholder' => '投稿内容を入力してください。'])}}
      <input type="image" class="post_image" src="/images/post.png" value="投稿" >
  </div>
<!-- <div style="border-bottom: 3px solid #888;"/ class="border"> -->

  {!! Form::close() !!}
</div>
@foreach ($posts as $post)
<table class="table table-hover">
<tr>
     <a><img src="images/icon1.png"></a>
     <td>{{ $post->user->username }}</td>
     <td>{{ $post->post }}</td>
     <td>{{ $post->created_at }}</td>

   <!-- 更新　-->
   <div class="content">
   <td><button type="button" class="js-modal-open"  post="{{ $post->post }}" post_id="{{ $post->id }}">
    <img src="images/edit.png" class="edit_image" alt="編集">
   </button></td>

   <!-- 削除-->
   <td><a class="btn btn danger" href="/post/{{$post->id}}/delete" onclick="return confirm('この投稿を削除します。よろしいでしょうか？')">
    <img class="Trash_image" src="images/trash.png" alt="削除"></a>
   </td>
</tr>
</table>
@csrf
@endforeach
<!-- モーダルの中 -->
<!-- include('components.modal_window')
section('modal_window') -->
    <div id="modal_open">
      <div class="modal_BG">
      </div>
      <div id="modal_main">
          {!! Form::open(['url' => '/top/update']) !!}
          {{ Form::input('text', 'upPost', null,['required', 'class' => 'form-control', 'placeholder' => '投稿内容を入力してください。'])}}
          {{ Form::input('hidden', 'up_id', null,['class' => 'up_id'])}}
          {!! Form::close() !!}
          @csrf
          @method('PUT')
          <input type="image" class="edit_image" src="/images/edit.png" value="更新" >
        </div>
        <footer id="modal_footer">
            <p><a id="modal-close" class="button-link">閉じる</a></p>
        </footer>
    </div>
<!--endsection
yield('modal_window')-->

</x-login-layout>
