<x-login-layout>

 <div class="container">
    <p>ユーザー名 {{ $users->username }} </p>
    <img src="{{ asset('images/icon2.png') }}" value="アイコン">
    <p>自己紹介 {{ $users->bio }}</p>
</div>

@foreach($followings_post as $following_post)
<div>
 <div>{{ $following_post->user->username }}</div>
 <td>{{ $following_post->post }}</td>
 <td>{{ $following_post->created_at }}</td>
</div>
@endforeach
@csrf

</x-login-layout>
