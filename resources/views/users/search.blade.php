<x-login-layout>
<div class="">
  <form action="/search" method="get">
    <input type="text" name="keyword" class="form" placeholder="ユーザー名">
    <input type="image" src="images/search.png" alt="検索">
  </form>

  @if(!empty($keyword))
  <p>検索ワード:{{$keyword}}</p>
  @endif
</div>
<div>
  @foreach ($query as $query)
  <a><img src="images/icon2.png"></a>
  <option value="{{ $query}}">
   {{ $query->username}}
  </option>
  @endforeach
</div>
</x-login-layout>
