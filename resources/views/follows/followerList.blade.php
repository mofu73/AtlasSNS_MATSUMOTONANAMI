<x-login-layout>

<div class="">
   <h1>フォローリスト</h1>
   @foreach($followed as $followed)
    <img src="{{ asset('images/'.$followed->icon_image) }}">
   @endforeach
</div>
<hr style="border: 0; border-top: 7px solid #ccc;">

 @foreach($followed as $followed)
 <p>{{ $followed->icon_image }}</p>
 <p>{{ $followed->username}}</p>
 <a href="/user/{{$followed->id}}/profile">
   <img src="images/icon2.png">
 </a>
 @endforeach
 <hr style="border: 0; border-top: 7px solid #ccc;">

@foreach($followed_post as $followed_post)
 <table class="table table-hover">
<div class="post-date">
  <div class="icons">
 <a href="/user/{{$followed->id}}/profile">
   <img src="images/icon1.png">
 </a>
 <p class="post-name">{{ $followed_post->user->username }}</p>
 <p class="time">{{ $followed_post->created_at }}</p>
</div>
<tr>
   <td></td>
 <p class="post-post">{{ $following_post->post }}</p>
</tr>
</table>
@endforeach
</x-login-layout>
