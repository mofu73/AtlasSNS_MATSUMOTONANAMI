<x-login-layout>
<div id="container">
    {{ Form::open(['url' => 'index']) }}
    <a><img src="images/icon1.png"></a>
  <div class="form-group">
      {{ Form::input('text', 'post', null,['required', 'class' => 'form-control', 'placeholder' => '投稿内容を入力してください。'])}}
      <input type="image" src="/images/post.png" alt="投稿">
  </div>
  {{ Form::close() }}
</div>

</x-login-layout>
