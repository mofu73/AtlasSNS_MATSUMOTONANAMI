<x-login-layout>

<!-- フォローしている人のアイコン一覧 -->
<div class="">
  <h1>フォローリスト</h1>
   @if ($isActive)
    <img src="{{ asset('images/icon3.png') }}" alt="on">
   @else
    <img src="{{ asset('images/icon4.png') }}" alt="on">
  @endif
</div>

 @foreach($followings as $following)
 <p>{{ $following->username}}</p>
 <a href="/user/{{$following->id}}/profile">
   <img src="images/icon1.png">
 </a>
 @endforeach

@foreach($followings_post as $following_post)
<div class="following_posting">
 <div>{{ $following_post->user->username }}</div>
 <td>{{ $following_post->post }}</td>
 <td>{{ $following_post->created_at }}</td>
</div>
@endforeach

</x-login-layout>
