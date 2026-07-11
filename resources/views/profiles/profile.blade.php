<x-login-layout>
     @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif
    <div class="profile_icon">
    @if(Auth::user()->icon_image=='icon1.png')
    <img src="{{ asset('images/icon1.png') }}" class="icon1" value="アイコン">
            @else
            <img src="{{ asset('storage/'.Auth::user()->icon_image) }}" class="icon2" value="アイコン">
            @endif
        </div>
    <section id="contact">
     <form action="/profile" enctype="multipart/form-data" method="post">
      <div class="name-block">
          <label class="contact-text" for="name">ユーザー名</label>
          <input id="name" class="name" type="text" name="username" value="{{ Auth::user()->username }}">
      </div>

      <div class="mail-block">
          <label class="contact-text" for="mail">メールアドレス</label>
          <input id="mail" class="mail" type="mail" name="email" value="{{ Auth::user()->email }}">
      </div>

      <div class="password-block">
          <label class="contact-text" for="password">パスワード</label>
          <input id="password" class="password" type="password" name="password" value="">
      </div>

      <div class="password_confirmation-block">
          <label class="contact-text" for="password_confirmation">パスワード確認</label>
          <input id="password_confirmation" class="password_confirmation" type="password" name="password_confirmation" value="">
      </div>

      <div class="bio-block">
          <label class="contact-text" for="bio">自己紹介</label>
          <input id="bio" class="bio" type="bio" name="bio" value="{{ Auth::user()->bio }}">
      </div>

      <div class="images-block">
          <label class="contact-text" for="images">アイコン画像</label>
          <input id="images" class="images" type="file" name="images" value="">
      </div>
        <input type="submit" class="update" name="update" value="更新">
        @csrf
        </form>
    </session>

</x-login-layout>
