<x-login-layout>
<div class="">
  <form action="/search" method="get">
    <input type="text" name="keyword" class="form" placeholder="ユーザー名">
    <input type="image" src="images/search.png" alt="検索">
  </form>

  @if(!empty($keyword))
  <h3>検索ワード:{{$keyword}}</h3>
  @endif
</div>
<div>
  @foreach ($query as $query)
  @if($query->id !== Auth::user()->id)
  <a><img src="images/icon2.png"></a>
  <option value="{{ $query}}">
   {{ $query->username}}
  </option>
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
  @endforeach
</div>
</x-login-layout>
