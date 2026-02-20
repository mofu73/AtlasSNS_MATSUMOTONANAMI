<x-login-layout>

 @foreach($followed as $followed)
 <p>{{ $followed->icon_image }}</p>
 <p>{{ $followed->username}}</p>
 <img src="images/icon1.png">
 @endforeach

@foreach($followed_post as $followed_post)
<div>
 <img src="images/icon1.png">
 <div>{{ $followed_post->user->username }}</div>
 <td>{{ $followed_post->post }}</td>
 <td>{{ $followed_post->created_at }}</td>
</div>
@endforeach
</x-login-layout>
