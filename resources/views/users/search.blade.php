<x-login-layout>
<div class="">
  <form action="/search" method="post">
    @csrf
    {{ Form::input('text', 'post', null,['required', 'class' => 'form-control', 'placeholder' => 'ユーザー名'])}}
    <input type="image" src="images/search.png" alt="検索">
  </form>

  @if(!empty($keyword))
  <p>検索ワード:{{$keyword}}</p>
  @endif


</div>

</x-login-layout>
