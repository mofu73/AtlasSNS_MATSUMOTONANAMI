        <div id="head">
            <h1><a href="/top"><img src="images/atlas.png"></a></h1>
            <div id="">
            <div class="side_user">
            <!--アコーディオンメニュー -->
            <div id="accordion" class="accordion-container">

            <div class="accordion-title js-accordion-title">
            </div>

                <ul class="nav-menu">
                <div class="icon">
                <p>{{\Auth::user()->username}}さん</p>
                <img src=" {{ asset('images/icon1.png') }}"></div>
                    <li><a class="home" href="/top">ホーム</a></li>
                    <li><a class="profile" href="/profile">プロフィール編集</a></li>
                    <li><a class="logout" href="/logout" class="nav-link http://127.0.0.1:8000/login">ログアウト</a></li>
                </ul>
            </div>
        </div>
