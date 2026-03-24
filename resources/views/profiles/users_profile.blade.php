<x-login-layout>

<div class="users_container">
    <img src="{{ asset('images/icon2.png') }}" class="icon2_image" value="アイコン">
    <div>ユーザー名 {{ $users->username }} </div>
    <td>自己紹介 {{ $users->bio }}</td>
</div>

<div>
 @if(!auth()->user()->isFollowing($query->id))
   <form action="/users_profile.blade/{{ $query->id }}/follow" method="post">
     @csrf
   <button type="submit" class="btn btn-info pull-right">フォローする</button>
  </form>
  @else
  <form action="/users_profile.blade/{{ $query->id }}/unfollow" method="post">
     @csrf
   <button type="submit" class="btn btn-danger pull-right">フォロー解除</button>
  </form>
 @endif
</div>

@foreach($post as $post)
<div class="profile">
 <tr>
  <div>
   <a><img src="{{ asset('images/icon2.png') }}" class="icon2_image" value="アイコン"></a>
  </div>

 <div class="profile-info">
  <h4>{{ $post->user->username }}</h4>
  <p>{{ $post->post }}</p>
  <td>{{ $post->created_at->format('Y/m/d H:i:s') }}</td>
   @csrf
 </div>
</div>
</tr>
@endforeach
</x-login-layout>
