        <div id="head">
            <h1><a href="/top"><img src="images/atlas.png"></a></h1>
            <div id="">
            <div class="side_user">
            <!--アコーディオンメニュー -->
            <div class="accordion-container">
            <p>{{Auth::user()->username}}さん</p>

            <div class="accordion-title js-accordion-title">
            </div>
                <ul class="menu">
                      <li><a class="home" href="/top">ホーム</a></li>
                      <li><a class="profile" href="/profile">プロフィール編集</a></li>
                      <li><a class="logout" href="/logout" class="nav-link http://127.0.0.1:8000/login">ログアウト</a></li>
                </ul>
              <div class="icon">
              <img src=" {{ asset('images/icon1.png') }}"></div>
        </div>
