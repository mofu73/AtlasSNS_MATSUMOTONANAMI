<x-login-layout>

<!-- フォローしている人のアイコン一覧 -->
<div class="">
   <h1>フォローリスト</h1>
   @foreach($followings as $following)
    <img src="{{ asset('public/images/icons/'.$following->icon_image) }}"
     alt="{{ $following->name }}" class="icon">
   @endforeach
</div>
<hr style="border: 0; border-top: 7px solid #ccc;">

 @foreach($followings_post as $following_post)
 <table class="table table-hover">
<div class="post-date">
  <div class="icons"> <a href="/user/{{$following_post->user->id}}/profile">
    <img src="{{ asset('images/'.$following_post->user->icon_image) }}"></a></div>
 <p class="post-name">{{ $following_post->user->username}}</p>
 <p class="time">{{ $following_post->created_at }}</p>
</div>
<tr>
   <td></td>
 <p class="post-post">{{ $following_post->post }}</p>
</tr>
</table>
@endforeach
</x-login-layout>
