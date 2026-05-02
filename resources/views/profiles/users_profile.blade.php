<x-login-layout>

<div class="users_container">
    <img src="{{ asset('images/icon2.png') }}" class="icon2_image" value="アイコン">
    <div>ユーザー名 {{ $users->username }} </div>
    <div>自己紹介 {{ $users->bio }}</div>
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
<div class="profile">
 <tr>
  <div>
   <a><img src="{{ asset('images/icon2.png') }}" class="icon2_image" value="アイコン"></a>
  </div>

 <div class="profile-info">
  @csrf
  <td>{{ $post->user->username }}</td>
  <td class="post_info">{{ $post->post }}</>
  <td class="date_info">{{ $post->created_at->format('Y/m/d H:i:s') }}</td>
 </div>
</div>
</tr>
@endforeach
</x-login-layout>
