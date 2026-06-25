<x-login-layout>

<div class="users_container">
    <img src="{{ asset('images/icon2.png') }}" class="icon2_image" value="アイコン">
    <div class="profiles">
     <p class="users-name">ユーザー名 {{ $users->username }} </p>
     <p class="users-bio">自己紹介 {{ $users->bio }}</p>
    </div>
  <div class="users_btn">
    @if(!auth()->user()->isFollowing($users->id))
  <form action="/users_profile.blade/{{ $users->id }}/follow" method="post">
    @csrf
  <button type="submit" class="btn btn-info pull-right">フォローする</button>
 </form>
 @else
  <form action="/users_profile.blade/{{ $users->id }}/unfollow" method="post">
    @csrf
  <button type="submit" class="btn btn-danger pull-right">フォロー解除</button>
</form>
@endif
</div>
</div>
<hr style="border: 0; border-top: 7px solid #ccc;">

@foreach($post as $post)
<table class="table table-hover">
<div class="post_date">
  <div class="icons"> <a href="/user/{{$post->user->id}}/profile">
    <img src="{{ asset('images/'.$post->user->icon_image) }}"></a></div>
 <p class="post_name">{{ $post->user->username}}</p>
 <p class="time">{{ $post->created_at }}</p>
</div>
<tr>
   <td></td>
 <p class="post_post">{{ $post->post }}</p>
</tr>
</table>
@endforeach
</x-login-layout>
