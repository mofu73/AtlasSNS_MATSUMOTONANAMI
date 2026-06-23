<x-logout-layout>
  <div id="clear">
    @if (Auth::check())
    <p>{{\Auth::user()->username}}さん</p>
    @endif
    <p class="welcome">ようこそ！AtlasSNSへ！</p>
    <p class="finish">ユーザー登録が完了しました。</p>
    <p class="news">早速ログインをしてみましょう。</p>

    {{ Form::submit('ログイン画面へ',['class' => 'btn btn-danger']) }}
  </div>
</x-logout-layout>
