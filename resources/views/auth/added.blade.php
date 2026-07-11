<x-logout-layout>
  <div id="clear">
    @if(session('username'))
<p class="msg">
{{ session('username') }}さん
</p>
@endif
    <p class="welcome">ようこそ！AtlasSNSへ！</p>
    <p class="finish">ユーザー登録が完了しました。</p>
    <p class="news">早速ログインをしてみましょう。</p>

    <button type="submit" class="btn btn-danger pull-center"><a href="/login">ログイン画面へ</a></button>

  </div>
</x-logout-layout>
