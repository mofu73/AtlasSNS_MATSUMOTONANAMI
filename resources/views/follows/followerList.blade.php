<x-login-layout>

<div class="">
   <h1>フォローリスト</h1>
   @foreach($followed as $followed)
    <img src="{{ asset('images/'.$followed->icon_image) }}">
   @endforeach
</div>
<hr style="border: 0; border-top: 7px solid #ccc;">

@foreach($followed_post as $followed_post)
 <table class="table table_hover">
<div class="post_date">
  <div class="icon">
 <a href="/user/{{$followed->id}}/profile">
   <img src="images/icon1.png">
 </a>
 <p class="post_name">{{ $followed_post->user->username }}</p>
 <p class="time_follow">{{ $followed_post->created_at }}</p>
</div>
<tr>
   <td></td>
 <p class="post_post1">{{ $followed_post->post }}</p>
</tr>
</table>
@endforeach
</x-login-layout>
