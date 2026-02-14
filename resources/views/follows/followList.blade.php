<x-login-layout>

<!-- フォローしている人のアイコン一覧 -->
<div class="">
  <h1>フォローリスト</h1>
</div>

<!-- foreach($followings as $following)
 <p>{ $following->username }</p>
 <p>{ $following->post }</p>
endforeach -->


@foreach($followings_post as $following_post)
<tr>
 <td>{{ $following_post->user->username }}</td>
 <td>{{ $following_post->post }}</td>
 <td>{{ $following_post->created_at }}</td>
</tr>
@endforeach

</x-login-layout>
