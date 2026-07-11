<x-login-layout>
<div class="search_area">
  <form action="/search" method="get">
    <input type="text" name="keyword" class="form" placeholder="ユーザー名">
    <input type="image" class="search_image" src="images/search.png" alt="検索">
  </form>

  @if(!empty($keyword))
  <h3>検索ワード:{{$keyword}}</h3>
  @endif
</div>
  <hr style="border: 0; border-top: 7px solid #ccc;">


<div class="search_name">
  @foreach ($query as $query)
  <div class="flex">
  @if($query->id !== Auth::user()->id)
  @if($followed->icon_image=='icon1.png')
    <img src="{{ asset('images/icon1.png') }}" class="icon1" value="アイコン">
            @else
            <img src="{{ asset('storage/'.$following->icon_image) }}" class="icon2" value="アイコン">
            @endif
</a>
  <p class="search_username">{{ $query->username}}</p>
  @if(!auth()->user()->isFollowing($query->id))
  <form action="/search.blade/{{ $query->id }}/follow" method="post">
    @csrf
   <button type="submit" class="btn btn-info pull-right">フォローする</button>
  </form>
 @else
 <form action="/search.blade/{{ $query->id }}/unfollow" method="post">
     @csrf
   <button type="submit" class="btn btn-danger pull-right">フォロー解除</button>
 </form>
  @endif
  @endif
</div>
@endforeach
</div>
</x-login-layout>
