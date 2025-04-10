<x-login-layout>
<div id="container">
    {!! Form::open(['url' => 'top']) !!}
    <a><img src="images/icon1.png"></a>
  <div class="form-group">
      {{ Form::input('text', 'newPost', null,['required', 'class' => 'form-control', 'placeholder' => '投稿内容を入力してください。'])}}
  </div>
      <input type="image" src="/images/post.png" alt="投稿">
  {!! Form::close() !!}
</div>

</x-login-layout>
