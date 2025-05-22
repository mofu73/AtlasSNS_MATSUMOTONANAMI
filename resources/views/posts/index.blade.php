<x-login-layout>
<div id="container">
    {!! Form::open(['url' => '/top']) !!}
    <a><img src="images/icon1.png"></a>
  <div class="form-group">
      {{ Form::input('text', 'newPost', null,['required', 'class' => 'form-control', 'placeholder' => '投稿内容を入力してください。'])}}
  </div>
      <input type="image" src="/images/post.png" alt="投稿">
  {!! Form::close() !!}
</div>

<a><img src="images/icon1.png"></a>
 @foreach ($lists as $list)
 <tr>
  <div class="post_content2">
     <td>{{ $list->user->username }}</td>
     <td>{{ $list->user_id }}</td>
     <td>{{ $list->post }}</td>
     <td>{{ $list->created_at }}</td>
     <td><a class="js-modal-open" href="" post="{{ $post-post }}" post_id="{{ $post->id }}"><img class="Update" src="images/edit.png" alt="編集"></a></td>
     <!-- 削除-->
      <td><a class="btn btn danger" href="">
  </div>
 </tr>
 @endforeach


</x-login-layout>
