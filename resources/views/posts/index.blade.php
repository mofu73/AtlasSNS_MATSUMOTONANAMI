<x-login-layout>
<div id="container">
    {!! Form::open(['url' => '/top/update']) !!}
    <a><img src="images/icon1.png"></a>
  <div class="form-group">
      {{ Form::input('text', 'newPost', null,['required', 'class' => 'form-control', 'placeholder' => '投稿内容を入力してください。'])}}
      <input type="image" src="/images/post.png">
  </div>

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

<!-- モーダルの中 -->

</x-login-layout>
