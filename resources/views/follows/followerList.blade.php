<x-login-layout>

 @foreach($followed as $followed)
 <p>{{ $followed->icon_image }}</p>
 <p>{{ $followed->username}}</p>
 <a href="/user/{{$followed->id}}/profile">
   <img src="images/icon2.png">
 </a>
 @endforeach
 <hr style="border: 0; border-top: 7px solid #ccc;">

@foreach($followed_post as $followed_post)
<div>
 <a href="/user/{{$followed->id}}/profile">
   <img src="images/icon1.png">
 </a>
 <div>{{ $followed_post->user->username }}</div>
 <td>{{ $followed_post->post }}</td>
 <td>{{ $followed_post->created_at }}</td>
</div>
@endforeach
</x-login-layout>
