        <div id="head">
            <div><a href="/top"><img src="{{ asset('images/atlas.png') }}" class="atlas" value="アイコン"></a></div>
            <div class="head-right">
            <p class="side_user">
               {{ Auth::user()->username }}さん
            </p>
            <!--アコーディオンメニュー -->
            <div class="accordion">
               <img src="{{ asset('images/icon1.png') }}" class="icon1" value="アイコン">
               <div class="accordion-contents">
                <dl class="accordion-list">
                 <span class="accordion-title js-accordion-title"></span>
                   <dd class="accordion-text">
                  <ul class="accordion-box">
                     <li><a class="home" href="/top">HOME</a></li>
                     <li><a class="profile" href="/profile">プロフィール編集</a></li>
                     <li><a class="logout" href="/logout" class="nav-link http://127.0.0.1:8000/login">ログアウト</a></li>
                  </ul>
                 </dd>
                </dl>
               </div>
            </div>
           </div>
         </div>
