<x-login-layout>
<div class="">
  <form action="/search" method="post">
    @csrf
    {{ Form::input('text', 'post', null,['required', 'class' => 'form-control', 'placeholder' => 'ユーザー名'])}}
    <input type="image" src="images/search.png" alt="検索">
  </form>
</div>

</x-login-layout>
