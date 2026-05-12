<x-logout-layout>
    <!-- 適切なURLを入力してください -->
{!! Form::open(['url' => '/register']) !!}

<p class="atlas_rog">
新規ユーザー登録
</p>

 @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif
<div class="register_form">
{{ Form::label('ユーザー名') }}
{{ Form::text('username',null,['class' => 'input-register']) }}

{{ Form::label('メールアドレス') }}
{{ Form::email('email',null,['class' => 'input-register']) }}

{{ Form::label('パスワード') }}
{{ Form::password('password',null,['class' => 'input-register']) }}

{{ Form::label('パスワード確認') }}
{{ Form::password('password_confirmation',null,['class' => 'input-register']) }}

{{ Form::submit('登録',['class' => 'btn btn-danger']) }}
</div>

<p class="login_back"><a href="/login">ログイン画面に戻る</a></p>

{!! Form::close() !!}


</x-logout-layout>
