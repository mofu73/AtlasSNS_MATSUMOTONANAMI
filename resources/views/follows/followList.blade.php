<x-login-layout>

<!-- フォローしている人のアイコン一覧 -->
<div class="">
  <h1>フォローリスト</h1>
   @if ($isActive)
    <img src="{{ asset('images/icon3.png') }}" alt="on">
   @else
    <img src="{{ asset('images/icon4.png') }}" alt="on" >
  @endif
</div>
<hr style="border: 0; border-top: 7px solid #ccc;">


@foreach($followings_post as $following_post)
<div class="following_posting">
 <td>{{ $following_post->post }}</td>
 <td>{{ $following_post->created_at }}</td>
</div>
@endforeach

 @foreach($followings as $following)
 <div>{{ $following->username}}</div>
 <a href="/user/{{$following->id}}/profile">
   <img src="images/icon1.png">
 </a>
 @endforeach

</x-login-layout>
