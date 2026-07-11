<x-login-layout>

<!-- フォローしている人のアイコン一覧 -->
<div class="">
   <h1>フォローリスト</h1>
   @foreach($followings as $following)
    @if($following->icon_image=='icon1.png')
            <img src="{{ asset('images/icon1.png') }}" class="icon1" value="アイコン">
            @else
            <img src="{{ asset('storage/'.$following->icon_image) }}" class="icon2" value="アイコン">
            @endif
   @endforeach
</div>
<hr style="border: 0; border-top: 7px solid #ccc;">

 @foreach($followings_post as $following_post)
 <table class="table table-hover">
<div class="post-date">
  <div class="icons"> <a href="/user/{{$following_post->user->id}}/profile">
    @if($followed->icon_image=='icon1.png')
    <img src="{{ asset('images/icon1.png') }}" class="icon1" value="アイコン">
            @else
            <img src="{{ asset('storage/'.$following->icon_image) }}" class="icon2" value="アイコン">
            @endif
</a>
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
