<x-logout-layout>

  <!-- 適切なURLを入力してください -->
  {!! Form::open(['url' => '/login']) !!}

  <p class="atlas_rog">AtlasSNSへようこそ</p>

  <div class="login_form">
  {{ Form::label('メールアドレス') }}
  {{ Form::text('email',null,['class' => 'input']) }}
  {{ Form::label('パスワード') }}
  {{ Form::password('password',['class' => 'input']) }}

  {{ Form::submit('ログイン',['class' => 'btn btn-danger']) }}
</div>

  <p class="login_new"><a href="register">新規ユーザーの方はこちら</a></p>

  {!! Form::close() !!}

</x-logout-layout>
