<x-login-layout>
<div id="container">
    {{ Form::open(['url' => '/posts/create']) }}
  <div class="form-group">
    <a><img src="images/icon1.png"></a>
      {{ Form::input('text', 'post', null,['required', 'class' => 'form-control', 'placeholder' => '投稿内容を入力してください。'])}}
    {{ Form::close() }}
    <a href="/post"><img src="images/post.png"></a>
  </div>
</div>

</x-login-layout>
