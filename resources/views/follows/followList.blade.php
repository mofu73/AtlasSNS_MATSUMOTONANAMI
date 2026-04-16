<x-login-layout>

<!-- フォローしている人のアイコン一覧 -->
<div class="">
   <h1>フォローリスト</h1>
   @foreach($followings as $following)
    <img src="{{ asset('images/'.$following->icon_image) }}">
   @endforeach
</div>
<hr style="border: 0; border-top: 7px solid #ccc;">

 @foreach($followings_post as $following_post)
<div class="following_posting">
  <td> <a href="/user/{{$following_post->user->id}}/profile">
    <img src="{{ asset('images/'.$following_post->user->icon_image) }}"></a></td>
 <td>{{ $following_post->user->username}}</td>
 <td>{{ $following_post->post }}</td>
 <td>{{ $following_post->created_at }}</td>
</div>
@endforeach
</x-login-layout>
