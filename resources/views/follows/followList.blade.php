<x-login-layout>

<!-- フォローしている人のアイコン一覧 -->
<div class="">
  <h1>フォローリスト</h1>
</div>

 @foreach($followings as $following)
 <p>{{ $following->icon_image }}</p>
 <p>{{ $following->username}}</p>
 <img src="images/icon1.png">
 @endforeach

@foreach($followings_post as $following_post)
<div>
 <div>{{ $following_post->user->username }}</div>
 <td>{{ $following_post->post }}</td>
 <td>{{ $following_post->created_at }}</td>
</div>
@endforeach

</x-login-layout>
