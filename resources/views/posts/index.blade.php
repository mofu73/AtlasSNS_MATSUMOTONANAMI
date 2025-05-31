<x-login-layout>
<div id="container">
    {!! Form::open(['url' => '/top/update']) !!}
    <a><img src="images/icon1.png"></a>
  <div class="form-group">
      {{ Form::input('text', 'newPost', null,['required', 'class' => 'form-control', 'placeholder' => '投稿内容を入力してください。'])}}
  </div>
      <input type="image" src="/images/post.png" alt="自分が投稿した内容を表示します。
      投稿は最大150文字までとし、それ以上のテキストが入力フォームに撃ち込まれた場合は投稿できないように設定をしてください。
      トップでは自分がフォローしている人の投稿も見ることができるようにします。">
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
  <td><a class="js-modal-open" href="/top/update" post="{{ $post->post }}" post_id="{{ $post->id }}">
    <img src="images/edit.png" alt="編集">
  </a></td>

  <!-- 削除-->
  <td><a class="btn btn danger" href="/post/{{$post->id}}/delete" onclick="return confirm('この投稿を削除します。よろしいでしょうか？')">
    <img class="Trash" src="images/trash.png" alt="削除"></a>
   </td>
</tr>
@endforeach
</table>

</x-login-layout>
