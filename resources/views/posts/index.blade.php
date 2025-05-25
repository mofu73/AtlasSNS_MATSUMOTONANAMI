<x-login-layout>
<div id="container">
    {!! Form::open(['url' => '/top']) !!}
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
 <tr>
  <table class="table table-hover">
     <a><img src="images/icon1.png"></a>
     <td>{{ $post->user->username }}</td>
     <td>{{ $post->post }}</td>
     <td>{{ $post->created_at }}</td>
  </table>
@endforeach


</tr>

</x-login-layout>
