        <div id="head">
            <div><a href="/top"><img src="images/atlas.png"></a></div>
            <p class="side_user">
               {{Auth::user()->username }}さん
            </p>
            <!--アコーディオンメニュー -->
            <div class="accordion">
               <div class="accordion-contents">
                <dl class="accordion-list">
                   <span class="accordion-title js-accordion-title"></span>
                   <dd class="accordion-text">
                      <div class="accordion-box">
                  <ul>
                     <li><a class="home" href="/top">HOME</a></li>
                     <li><a class="profile" href="/profile">プロフィール編集</a></li>
                     <li><a class="logout" href="/logout" class="nav-link http://127.0.0.1:8000/login">ログアウト</a></li>
                  </ul>
                  </div>
                 </dd>
                </dl>
               </div>
            </div>
