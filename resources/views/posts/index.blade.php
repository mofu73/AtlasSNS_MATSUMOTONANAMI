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
 @foreach ($posts as $post)
 <ul>
  <div class="post_content2">
    <div class="post_info">
     <li class="post_name">{{ $post->user->username }}</li>
     <li class="post_time">{{ $post->created_at }}</li>
    </div>
     <li class="post_post ">{{ $post->post }}</li>
  </div>
 </ul>
 @endforeach


</x-login-layout>
