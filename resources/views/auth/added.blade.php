<x-logout-layout>
  <div id="clear">
    @if (Auth::check())
    <p>{{\Auth::user()->username}}さん</p>
    @endif
    <p class="welcome">ようこそ！AtlasSNSへ！</p>
    <p class="finish">ユーザー登録が完了しました。</p>
    <p class="news">早速ログインをしてみましょう。</p>

    <p class="login_back5"><a href="/login">ログイン画面へ</a></p>

  </div>
</x-logout-layout>
