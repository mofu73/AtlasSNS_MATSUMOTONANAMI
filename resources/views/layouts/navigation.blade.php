        <div id="head">
            <h1><a href="/top"><img src="images/atlas.png"></a></h1>
            <div id="">
            <div class="side_user">
            <!--アコーディオンメニュー -->
            <div class="accordion">
               <div class="accordion-contents">
                <dl class="accordion-list">
                   <dt class="accordion-title js-accordion-title">
                   {{Auth::user()->username }}さん</dt>
                   <dd class="accordion-text">
                      <div class="accordion-box">
                  <ul>
                     <li><a class="home" href="/top">ホーム</a></li>
                     <li><a class="profile" href="/profile">プロフィール編集</a></li>
                     <li><a class="logout" href="/logout" class="nav-link http://127.0.0.1:8000/login">ログアウト</a></li>
                  </ul>
                  </div>
                 </dd>
                </dl>
               </div>
            </div>
