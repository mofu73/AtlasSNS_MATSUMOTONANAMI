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
  <button type="submit" class="btn btn-success pull-right">フォローする</button>
    @endif
  @endforeach
</div>
</x-login-layout>
