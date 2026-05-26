<x-login-layout>

<div class="users_container">
    <img src="{{ asset('images/icon2.png') }}" class="icon2_image" value="アイコン">
    <p class="users-name">ユーザー名 {{ $users->username }} </p>
    <p class="users-bio">自己紹介 {{ $users->bio }}</p>
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


@foreach($post as $post)
<div class="profile-users">
 <tr>
  <div>
   <a><img src="{{ asset('images/icon2.png') }}" class="icon2_image" value="アイコン"></a>
  </div>

 <div class="profile-info">
  @csrf
  <p class="users_name">{{ $post->user->username }}</p>
  <p class="date_time">{{ $post->created_at->format('Y/m/d H:i:s') }}</p>
 </div>
</div>
  <p class="post_post">{{ $post->post }}</p>
</tr>
@endforeach
</x-login-layout>
