<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/><meta property="og:title" content="Subway x NBA │ 2020 季後賽神準大預測" />
<meta property="og:description" content="萬眾期待的季後賽正式到來！神準大預測全新改版，展現你的神準大預測，為你支持的球隊加油！" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://nba.udn.com/bracket/" />
<meta property="og:image" content="https://nba.udn.com/assets/bracket/img/share.jpg" />
    <title>Subway x NBA │ 2020 季後賽神準大預測</title>

    <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>

    <script>
      window.googletag = window.googletag || {cmd: []};
      googletag.cmd.push(function() {
          var superBannerConfig = googletag.sizeMapping().
              addSize([970, 200], [[970, 250]]).
              addSize([0, 0], []).
              build();

          var mobileConfig = googletag.sizeMapping().
              addSize([768, 200], []).
              addSize([0, 0], [[320, 100]]).
              build();

          window.slotDesktop = googletag
              .defineSlot('/4576170/free-1_NBAplayoffs-PC-a01', [970, 250], 'div-gpt-ad-1583910259702-0')
              .defineSizeMapping(superBannerConfig)
              .addService(googletag.pubads());

          window.slotMobile = googletag
              .defineSlot('/4576170/free-1_NBAplayoffs-Mobile-a01', [320, 100], 'div-gpt-ad-1583911243562-0')
              .defineSizeMapping(mobileConfig)
              .addService(googletag.pubads());

          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
      });
    </script>

    <link rel="stylesheet" href="https://s.udn.com.tw/static/font-icons/css/fontello.css"/>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">

    <script>
        var data = @json($data, JSON_UNESCAPED_UNICODE)
    </script>
    <script>
        var memberInfo = @json($memberInfo, JSON_UNESCAPED_UNICODE)
    </script>
  </head>
  <body>
    <div id="fb-root"></div>
    <script>
      (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.12';
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

    </script>
    <div id="container">
      <div id="vueApp" v-cloak>
        <div id="header">
          <nav :class="{on: isMobileMenu}">
            <div class="logo-container">

              <a class="logo logo-udn" href="//udn.com" title="聯合線上">聯合線上</a>
              <a class="logo logo-udn-title" href="//udn.com" title="聯合線上">聯合線上</a>
              <a class="logo logo-nba" href="//nba.udn.com" title="台灣 NBA">台灣 NBA</a>

            </div>
            <a id="menu-mobile-btn" @click="mobileMenuObj" href="javascript:;"><i class="i-list"></i></a>

            <div id="menu">

              <a v-if="data.userLogin" href="{{ route('fblogout') }}">登出</a>
              <a @click="toPage('index')" href="javascript:;">預測</a>
              <a href="https://tw.global.nba.com/scores/" target="_blank">比分</a>
              <a @click="toPage('info')" href="javascript:;">說明</a>
              <a @click="toPage('prize')" href="javascript:;">獎品</a>
              <a @click="toPage('lottery')" href="javascript:;">抽獎</a>
              <div id="menu-social"><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnba.udn.com%2Fbracket%2F&quote=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&quote=' + encodeURIComponent(document.URL)); return false;"><i class="i-facebook-1"></i></a><a href="https://social-plugins.line.me/lineit/share?url=https%3A%2F%2Fnba.udn.com%2Fbracket%2F" target="_blank"><i class="i-line1"></i></a></div>

            </div>
            <!--/#menu-->

          </nav>
        </div>
        <!--/#header-->

        <div id="wrapper">

          <div class="grid_box" v-if="page === 'index'">
            <div class="grid_body" :class="{sixteen: data.userConjecture.sixteenStatus, eight: data.userConjecture.eightStatus, four: data.userConjecture.fourStatus, finals: data.userConjecture.finalsStatus, total: isTotal}">
              <div id="tools">

                <div id="login" v-if="!data.userLogin">

                  <a href="{{ route('fblogin') }}"><i class="i-fb-round"></i><span>以 Facebook 帳號繼續</span></a>
                  <small>＊欲參加預測活動請先登入FB授權</small>

                </div>
                <!--/#login-->

                <div id="tools_bar" v-if="data.userConjecture.sixteenStatus || data.userConjecture.eightStatus || data.userConjecture.fourStatus || data.userConjecture.finalsStatus"><span>@{{toolsText}} <a @click="totalBtn" href="javascript:;">@{{totalText}}</a></span>

                  <ul class="tools_area">
                    <li>西區</li>
                    <li>東區</li>
                  </ul>

                </div>
              </div>

              <div id="fraction" v-if="data.userLogin">我的積分<span>@{{data.userFraction}}</span></div>

              <div class="grid_match sixteenWin animated" v-for="(item, index) in sixteenWin()" :data-grid="index+1" :data-select="select.sixteenVal[index]" :data-match-id="item.matchId">

                <vue-slider v-if="data.userConjecture.sixteenStatus &amp;&amp; data.userLogin &amp;&amp; !isTotal" v-model="select.sixteenVal[index]" :data="projectNum" :tooltip="'none'" direction="ttb"></vue-slider>

                <div class="grid_main grid_main--firstTeam">
                  <div class="grid_main--teamImg">
                    <div class="win" v-if="item.firstTeam.win"></div><img v-if="item.firstTeam.abbr" :src="'https://nba.udn.com/assets/img/teams/' + item.firstTeam.abbr + '.svg'"/>
                  </div>
                  <div class="grid_main--teamName"><span class="grid_main--teamSeed" v-if="item.firstTeam.teamSeed">@{{item.firstTeam.teamSeed}}</span><span class="grid_main--teamAbbr">@{{item.firstTeam.abbr}}</span></div>
                  <div class="grid_main--teamConjecture">@{{projectArr[select.sixteenVal[index]][0]}}</div>
                </div>

                <div class="grid_main grid_main--lastTeam">
                  <div class="grid_main--teamImg">
                    <div class="win" v-if="item.lastTeam.win"></div><img v-if="item.lastTeam.abbr" :src="'https://nba.udn.com/assets/img/teams/' + item.lastTeam.abbr + '.svg'"/>
                  </div>
                  <div class="grid_main--teamName"><span class="grid_main--teamSeed" v-if="item.lastTeam.teamSeed">@{{item.lastTeam.teamSeed}}</span><span class="grid_main--teamAbbr">@{{item.lastTeam.abbr}}</span></div>
                  <div class="grid_main--teamConjecture">@{{projectArr[select.sixteenVal[index]][1]}}</div>
                </div>
              </div>
              <!--/ 16強-->

              <div class="grid_match eightWin animated" v-for="(item, index) in eightWin()" :data-grid="index+1" :data-select="select.eightVal[index]" :data-match-id="item.matchId">

                <vue-slider v-if="data.userConjecture.eightStatus &amp;&amp; data.userLogin &amp;&amp; !isTotal" v-model="select.eightVal[index]" :data="projectNum" :tooltip="'none'" direction="ttb"></vue-slider>

                <div class="grid_main grid_main--firstTeam">
                  <div class="grid_main--teamImg">
                    <div class="win" v-if="item.firstTeam.win"></div><img v-if="item.firstTeam.abbr" :src="'https://nba.udn.com/assets/img/teams/' + item.firstTeam.abbr + '.svg'"/>
                  </div>
                  <div class="grid_main--teamName"><span class="grid_main--teamSeed" v-if="item.firstTeam.teamSeed">@{{item.firstTeam.teamSeed}}</span><span class="grid_main--teamAbbr">@{{item.firstTeam.abbr}}</span></div>
                  <div class="grid_main--teamConjecture">@{{projectArr[select.eightVal[index]][0]}}</div>
                </div>

                <div class="grid_main grid_main--lastTeam">
                  <div class="grid_main--teamImg">
                    <div class="win" v-if="item.lastTeam.win"></div><img v-if="item.lastTeam.abbr" :src="'https://nba.udn.com/assets/img/teams/' + item.lastTeam.abbr + '.svg'"/>
                  </div>
                  <div class="grid_main--teamName"><span class="grid_main--teamSeed" v-if="item.lastTeam.teamSeed">@{{item.lastTeam.teamSeed}}</span><span class="grid_main--teamAbbr">@{{item.lastTeam.abbr}}</span></div>
                  <div class="grid_main--teamConjecture">@{{projectArr[select.eightVal[index]][1]}}</div>
                </div>
              </div>
              <!--/ 8強-->

              <div class="grid_match fourWin animated" v-for="(item, index) in fourWin()" :data-grid="index+1" :data-select="select.fourVal[index]" :data-match-id="item.matchId">

                <vue-slider v-if="data.userConjecture.fourStatus &amp;&amp; data.userLogin &amp;&amp; !isTotal" v-model="select.fourVal[index]" :data="projectNum" :tooltip="'none'" direction="ttb"></vue-slider>

                <div class="grid_main grid_main--firstTeam">
                  <div class="grid_main--teamImg">
                    <div class="win" v-if="item.firstTeam.win"></div><img v-if="item.firstTeam.abbr" :src="'https://nba.udn.com/assets/img/teams/' + item.firstTeam.abbr + '.svg'"/>
                  </div>
                  <div class="grid_main--teamName"><span class="grid_main--teamSeed" v-if="item.firstTeam.teamSeed">@{{item.firstTeam.teamSeed}}</span><span class="grid_main--teamAbbr">@{{item.firstTeam.abbr}}</span></div>
                  <div class="grid_main--teamConjecture">@{{projectArr[select.fourVal[index]][0]}}</div>
                </div>

                <div class="grid_main grid_main--lastTeam">
                  <div class="grid_main--teamImg">
                    <div class="win" v-if="item.lastTeam.win"></div><img v-if="item.lastTeam.abbr" :src="'https://nba.udn.com/assets/img/teams/' + item.lastTeam.abbr + '.svg'"/>
                  </div>
                  <div class="grid_main--teamName"><span class="grid_main--teamSeed" v-if="item.lastTeam.teamSeed">@{{item.lastTeam.teamSeed}}</span><span class="grid_main--teamAbbr">@{{item.lastTeam.abbr}}</span></div>
                  <div class="grid_main--teamConjecture">@{{projectArr[select.fourVal[index]][1]}}</div>
                </div>
              </div>
              <!--/ 4強-->

              <div class="grid_match finalsWin animated" :data-select="select.finalsVal" :data-match-id="finalsWin().matchId">

                <vue-slider v-if="data.userConjecture.finalsStatus &amp;&amp; data.userLogin &amp;&amp; !isTotal" v-model="select.finalsVal" :data="projectNum" :tooltip="'none'" direction="ttb"></vue-slider>

                <div class="grid_main grid_main--westTeam">
                  <div class="grid_main--teamImg">
                    <div class="win" v-if="finalsWin().westTeam.win"></div><img v-if="finalsWin().westTeam.abbr" :src="'https://nba.udn.com/assets/img/teams/' + finalsWin().westTeam.abbr + '.svg'"/>
                  </div>
                  <div class="grid_main--teamName"><span class="grid_main--teamSeed" v-if="finalsWin().westTeam.teamSeed">@{{finalsWin().westTeam.teamSeed}}</span><span class="grid_main--teamAbbr">@{{finalsWin().westTeam.abbr}}</span></div>
                  <div class="grid_main--teamConjecture">@{{projectArr[select.finalsVal][0]}}</div>
                </div>

                <div class="grid_main grid_main--eastTeam">
                  <div class="grid_main--teamImg">
                    <div class="win" v-if="finalsWin().eastTeam.win"></div><img v-if="finalsWin().eastTeam.abbr" :src="'https://nba.udn.com/assets/img/teams/' + finalsWin().eastTeam.abbr + '.svg'"/>
                  </div>
                  <div class="grid_main--teamName"><span class="grid_main--teamSeed" v-if="finalsWin().eastTeam.teamSeed">@{{finalsWin().eastTeam.teamSeed}}</span><span class="grid_main--teamAbbr">@{{finalsWin().eastTeam.abbr}}</span></div>
                  <div class="grid_main--teamConjecture">@{{projectArr[select.finalsVal][1]}}</div>
                </div>
              </div>
              <!--/ 決賽-->

              <div class="gridLine line1"></div>
              <div class="gridLine line2"></div>
              <div class="gridLine line3"></div>
              <div class="gridLine line4"></div>
              <div class="gridLine line5"></div>
              <div class="gridLine line6"></div>

              <div id="submit" v-if="data.userLogin &amp;&amp; !isTotal &amp;&amp; isSubmit">

                <a @click="submitData" href="javascript:;">@{{submitText}}</a>
                <small>＊預測結果將統一於總冠軍賽結束後公布</small>

              </div>
              <!--/#submit-->

            </div>

            <div id="liveNum">
              <h3 class="liveNum_title">即時比分</h3>
              <iframe id="scoreboard-iframe" src="https://tw.global.nba.com/articles/licensee_widget_scoreboard.html" scrolling="no" frameborder="0" height="120px" style="width: 1px; min-width: 100%;"></iframe>
            </div>
            <!--/#liveNum-->

          </div>
          <!--/index 預測-->


          <div class="main_box" v-if="page === 'info'">

            <h3 class="main_box--title">活動說明</h3>
            <div class="main_body">
              <h4 class="main_body--title">預測關閉時間（非正式開打時間）</h4>
              <ul class="main_body_list--dot">
                <li>第一輪 8/19 23:59</li>
                <li>第二輪 9/5 23:59</li>
                <li>東西區決賽 9/18 23:59</li>
                <li>冠軍戰 10/2 23:59</li>
              </ul>
              <p>（以上時間會依實際賽況而調整）</p>
              <p>（若沒參加到第一輪，可以於第二輪預測關閉前預測第二輪以後的比賽）</p>
              <p>※ 可一次只預測一輪比賽，待該輪比賽結束後，再預測下一輪的比賽。</p>
            </div>

            <div class="main_body">
              <h4 class="main_body--title">積分規則</h4>
              <ul class="main_body_list--dot">
                <li>第一輪每一組對戰組合預測成功獲 2 點積分，猜中勝負數再得 2 積分</li>
                <li>第二輪每一組對戰組合預測成功獲 2 點積分，猜中勝負數再得 2 積分</li>
                <li>東西區冠軍預測成功獲 4 點積分，猜中勝負數再得 4 積分</li>
                <li>總冠軍預測成功獲 8 點積分，猜中勝負數再得 8 積分</li>
              </ul>
              <p>※ 主辦單位保留更改權利，無須事前通知，亦有權對本活動之所有事宜作出最終解釋或裁決。</p>
            </div>

          </div>
          <!--/info 活動說明-->

          <div class="main_box" v-if="page === 'prize'">

            <h3 class="main_box--title">活動贈品</h3>
            <div class="main_body">
              <div class="main_body_list--img">
                @foreach ($prizes as $prize)
                    <figure>
                        @if(empty($prize->img))
                        <div class="main_body_list--imgbox"><img class="card-img-top" src="{{ asset('img/prize01.gif') }}" id="preview" alt="Card image cap"></div>
                        @else
                        <div class="main_body_list--imgbox"><img src="{{ asset('storage/'. $prize->img) }}"></div>
                        @endif
                        <figcaption><span>【</span>{{$prize->title}}<span>】</span><small>{{$prize->content}}</small></figcaption>
                  </figure>
                @endforeach



              </div>

              <p>※ 贈品以實物為準、顏色款式隨機出貨不得指定。</p>

              <h4 class="main_body--title">抽獎資格</h4>
              <ul class="main_body_list--dot">
                <li>參加獎：共 100 名得獎者。</li>
                <li>02-20積分：共 10 名得獎者。</li>
                <li>22-40積分：共 12 名得獎者。</li>
                <li>42-60積分：共 10 名得獎者。</li>
                <li>62-80積分：共 10 名得獎者。</li>
                <li>積分最大獎：共 1 名得獎者。</li>
                <li>第二輪預測參加獎：共5名得獎者。</li>
                <li>第三輪預測參加獎：共1名得獎者。</li>
                <li>總決賽預測參加獎：共1名得獎者。</li>
              </ul>
            </div>

            <div class="main_body">
              <h4 class="main_body--title">得獎公布時間</h4><strong>10/26 公布所有獎項</strong>

              <p>※ 如積分相同則比較上一輪的總積分，如比到最後還是無法分出輸贏，即由主辦單位抽籤決定。舉例而言，例如季後賽結束後，最高積分的參賽者為 78 分，但有 10 位參賽者同分，則需再比較上一輪東西區冠軍賽結束後這十位參賽者的總積分，如果其中一位參賽者積分為 70 分，高於其他 9 位參賽者，最大獎就由這位參賽者獲得，如果皆同分無法比出勝負，則由主辦單位抽籤決定最後得獎者。</p>
              <p>※ 主辦單位保留更改權利，無須事前通知，亦有權對本活動之所有事宜作出最終解釋或裁決。</p>
              <p>※ 贈品以實物為準、顏色款式隨機出貨不得指定。</p>

              <div class="main_body--btnbox">

                <a v-if="isWinningNames" @click="winningNamesObj" href="javascript:;">得獎名單</a>
                <a v-if="isPrecautions" @click="precautionsObj" href="javascript:;">注意事項</a>

              </div>

            </div>

          </div>
          <!--/prize 活動贈品-->

          <div class="main_box" v-if="page === 'lottery'">

            <div class="lottery_body cover"><img src="img/lottery.jpg">
              <div class="cover_text">於
                <div class="lottery_body--list_r">活動期間(8/18~10/13)</div>，前往
                <div class="lottery_body--list_g">SUBWAY</div>全台門市購買
                <div class="lottery_body--list_r">NBA限定套餐</div>組合價$200 (包含六吋蛋沙拉潛艇堡+兩條培根+雙倍起司+兩片餅乾+大杯22oz 冷飲一杯)，即可參加集點抽獎。<a href="https://lin.ee/uGy7uz6">點擊加入LINE官方帳號</a>
                <div class="ps">* 餅乾口味可任選，以門市實際供應為主，起司為三角起司或切絲起司。</div>
              </div>
              <div class="qrcode"><img src="img/qrcode.jpg">掃描QR code加入官方帳號</div>
            </div>

            <div class="lottery_body">
              <h4 class="lottery_body--title">抽獎步驟</h4>
              <div class="lottery_body--txt">
                <div class="lottery_body--list"><span>第一步</span> 到
                  <div class="lottery_body--list_g">SUBWAY</div> 門市選購
                  <div class="lottery_body--list_r">NBA 限定套餐</div>
                </div>
                <div class="lottery_body--list"><span>第二步</span>掃描
                  <div class="lottery_body--list_b">QR Code</div>加入
                  <div class="lottery_body--list_g">SUBWAY LINE</div>官方帳號後，點擊
                  <div class="lottery_body--list_r">神準大預測</div>進入集點活動頁面，並輸入個人資料。
                </div>
                <div class="lottery_body--list"><span>第三步</span>結帳時，出示集點畫面，門市夥伴會蓋電子章進行集點，累積獲得抽獎資格。</div>
              </div>
            </div>

            <div class="lottery_body">
              <h4 class="lottery_body--title">活動說明</h4>
              <div class="lottery_body--txt">
                <ol>
                  <li>於活動期間，前往SUBWAY全台門市購買NBA限定套餐，即可參加抽獎。</li>
                  <li>掃描QR Code 加入SUBWAY LINE官方帳號後，點擊「NBA LOGO」進入SUBWAY套餐吃一波NBA大獎瘋狂送頁面，並登錄個人資料，蓋章集點於個人LINE帳號。</li>
                  <li>單筆消費每1組NBA限定套餐即可蓋1點，等同於活動獎品之抽獎資格。</li>
                  <li>參加活動者須自備手機並自行上網連線，加入LINE官方帳號後，方可使用優惠。</li>
                  <li>冷飲限汽水機22oz大杯飲料，恕不提供更換罐裝瓶裝冷飲、湯或咖啡機飲品。</li>
                  <li>餅乾口味可任選，以門市實際供應為主，起司為三角起司或切絲起司。</li>
                  <li>如需加量或加料之品項，依原價計算。</li>
                  <li>活力超值自由選，及其他優惠恕不與本次活動併用。</li>
                  <li>本活動不適用於預約及外送服務。(如Uber Eats 或 foodpanda等平台)</li>
                  <li>圖片僅供參考，商品以各門市實際供應為準。</li>
                  <li>本活動相關說明，請以SUBWAY®官方網站公告說明為準。</li>
                  <li>SUBWAY®品牌及參與店家保留不經通知終止本活動的權利。</li>
                  <li>贈品以實物為準、顏色款式隨機出貨不得指定。</li>
                </ol>
              </div>
            </div>

            <div class="lottery_body lottery_body_img">
              <h4 class="lottery_body--title">活動獎品</h4>
              <div class="main_body_list--img">

                <figure>
                  <div class="main_body_list--imgbox"><img src="img/lottery01.jpg"></div>
                  <figcaption>NBA球員公仔<br>共5個。</figcaption>
                </figure>

                <figure>
                  <div class="main_body_list--imgbox"><img src="img/lottery02.gif"></div>
                  <figcaption>Beats Studio 3 Wireless 頭戴式耳機<br>(款式隨機)，共15副。</figcaption>
                </figure>

                <figure>
                  <div class="main_body_list--imgbox"><img src="img/lottery03.gif"></div>
                  <figcaption>New Era NBA球帽<br>(款式隨機)，共34份。</figcaption>
                </figure>

                <figure>
                  <div class="main_body_list--imgbox"><img src="img/lottery04.gif"></div>
                  <figcaption>NBA城市版短袖T恤<br>(款式隨機)，共12份。</figcaption>
                </figure>

                <p>※ 贈品以實物為準、顏色款式隨機出貨不得指定。</p>

              </div>
            </div>

            <div class="lottery_body">
              <h4 class="lottery_body--title">得獎公布時間</h4>
              <div class="lottery_body--txt">10/26 公布於網站。
                <p>※ 主辦單位保留更改權利，無須事前通知，亦有權對本活動之所有事宜作出最終解釋或裁決。</p>
              </div>
            </div>

            <div class="lottery_body">
              <h4 class="lottery_body--title">注意事項</h4>
              <div class="lottery_body--txt">
                <ol class="note">
                  <li>NBA Entities相關的人員及球隊的任何成員、活動任何型式的贊助商以及宣傳的相關人員(包括相關的代理商與公關公司)，或者是任何跟上述這些人員相關的家庭或同居成員皆不能參加此活動或者是贏取活動獎項。</li>
                  <li>獎項不能隨意轉換或變現，也不可交換或想改變獎項內容，但如果獎項目前因為某種原因無法取得可由贊助商自行決定是否更換，但更換之項目必須為等值商品。得獎者必須要自行支付所有相應產生的稅金以及其他可能之花費。</li>
                  <li>所有活動相關辦法，皆以本網頁公佈為主，獎品項目則依實物為主。</li>
                  <li>網友填寫資料之目的係作為確認身分，以便進行活動。聯合線上保證登入資料不洩漏予第三人，亦不進行前述目的範圍以外之利用。未依規定授權臉書帳號及公開資訊（包含：姓名、E-Mail等），致網友有任何損失者，聯合線上恕不負責。</li>
                  <li>本活動得獎資料如有不符合資格或取消者皆不遞補。所有獎項皆不重複得獎(包括同IP)，如有發現偽造資格或不法得獎者，聯合線上皆有權取消得獎資格。</li>
                  <li>參加者於參加本活動同時，即同意接受本活動之活動辦法與注意事項規範，並須遵守聯合線上的服務條款，若發現有使用網頁機器人參與活動違反之規定，聯合線上得取消其參加或得獎資格，並就因此所生之損害，得向參加者請求損害賠償。</li>
                  <li>得獎者應於聯合線上通知之期限內回覆確認同意領取獎品，並提供聯合線上所要求之完整領獎文件，逾期視為棄權。</li>
                  <li>如有任何因電腦、網路、電話、技術或不可歸責於聯合線上之事由，而使參加者所寄出或登錄之資料 有遲延、遺失、 錯誤、無法辨識或毀損之情況致使參加者無法參加活動時，聯合線上不負任何法律責任，參加者亦不得因此異議。</li>
                  <li>如本活動因不可抗力或其他特殊原因致無法舉行時，聯合線上有權決定取消、終止、修改或暫停本活動。</li>
                  <li>活動獎項以公佈於本網站上的資料為準，如遇不可抗拒或非可歸責於聯合線上之因素，致無法提供原訂獎項時，聯合線上保留更換其他等值獎項之權利。</li>
                  <li>活動獎項價值超過新台幣20,000元者，得獎者應自行負擔10% 之中獎所得稅。活動獎項如為現金，聯合線上有權自應給付獎金中逕予扣除相關所得稅，現金以外之獎項，得獎者應先繳納中獎所得稅後，始得領取活動獎品。</li>
                  <li>參加者如因參加本活動或因活動獎項而遭受任何損失，聯合線上及相關之母公司、子公司、關係企業、員工、及代理商不負任何責任。一旦得獎者領取獎品後，若有遺失或被竊，聯合線上或贊助廠商等不發給任何證明或補償。</li>
                  <li>獎項寄送地區僅限台、澎、金、馬，聯合線上不處理郵寄獎品至海外地區之事宜。本活動之獎品不得轉換、轉讓或折換現金。</li>
                  <li>參加者（包含相關繼承者、執行者或管理者）對於獲得的贈品，不可對 NBA 相關單位以及其相關人員（主席、官員、員工、代理商、關係企業、廣告商、公關、贈品贊助商）提出質疑、要求、損壞賠償，或者是做出任何行為或是具有抗爭事實（對於人或者是活動及贈品）的行為，亦不可鼓勵他人和自己去發生對於贈品要求補償的行為。</li>
                  <li>NBA Entities include: NBA Properties Inc., NBA香港運營有限公司，NBA體育文化發展（北京）有限責任公司。</li>
                  <li>責任限制：對本次活動的任何參與應被視為參與者認知並完全理解，其將從事的任何活動或者接受的任何獎品可能存在著傷害（包括但不僅限於終身傷殘和死亡）和社會/經濟損失的風險，原因可能不僅來自參與者自己的作為、不作為或疏忽，也可能來自他人的作為、不作為或疏忽以及活動規則或者所使用之場地或任何設備的狀況，而且，可能還存在參與者在此時尚不知曉或者無法合理預見的其他風險。活動參與者特此聲明其承擔與其參加本活動有關的任何和所有風險及其後果。</li>
                  <li>活動參與者明確免除和放棄由於參加本活動或其他原因而可能享有的或者在此後所產生的,就人身傷亡或財產損害而對NBA Entities、主辦單位、主辦人、任何活動贊助商及其各自的每一相關實體和關係企業、遺產管理人、代理人、高階員工、所有人、員工、以及其他參加者(合稱“被免責者”)提起的任何和一切損害賠償要求。</li>
                  <li>宣傳權利：活動稿件、照片（以下統稱，“活動稿件”）一經上傳，即被視為活動參與者不可撤銷地且無條件地免費授權、許可活動主辦方、NBA Entities（包括其關聯方）及其指定方在全世界範圍、永久地、不限用途地使用活動稿件和關於活動參與者的信息。對活動稿件的使用包括但不限於復制、編輯、編碼、存儲、記錄、發行、出租、展覽、展示、表演、放映、廣播、通過信息網絡傳播、張貼、攝製、改編、翻譯、彙編、推銷、再授權、採納以及/或者修改。無論活動稿件是否獲獎，活動主辦方應有權在活動中或活動以後將之予以刪除，且不做任何形式的退還。關於活動參與者的信息應包括但不限於其全名、獎品、籍貫、外貌、照片、聲音、地址、簡歷，以及其參加本次活動期間的評論、陳述等。</li>
                  <li>其他未盡事宜，悉依主辦單位相關規定。若有任何活動問題，請來信 sales@udn.com
                    <ul>
                      <li>udn聯合線上股份有限公司（以下簡稱本公司）茲依據個人資料保護法（以下簡稱個資法）之相關規定，告知以下個資宣告事項，敬請詳閱：</li>
                      <li>蒐集個資機關名稱：udn聯合線上股份有限公司</li>
                      <li>蒐集目的：辦理「NBA季後賽神準大預測」網路活動，參加、中獎聯繫及稅務相關單據寄送事宜。</li>
                      <li>個人資料項目：姓名、臉書帳號、email、手機、通訊地址。</li>
                      <li>個人資料利用之期間、地區、對象及方式：
                        <ol>
                          <li>期間：中華民國109年8月16日至109年12月31日</li>
                          <li>地區：台灣地區。</li>
                          <li>對象：活動參加者。</li>
                          <li>方式：電子文件。</li>
                        </ol>台端依據個資法第三條規定得行使之權利及方式：
                        <ol>
                          <li>資料使用期間，權利人得隨時向本公司請求查詢、閱覽、複製副本、刪除、修改其所提供之個人資料。</li>
                          <li>所獲獎品其價值超過新台幣20,000元以上者，依所得稅法規定，中獎者須先行支付獎品價值10%之稅金，由活動小組向有關稅務機關代繳所得稅額，其中獎者之相關個人資料須由本公司存查。權利人無法為前項刪除個人資料之請求。</li>
                        </ol>台端得自由選擇是否提供相關個人資料，惟若拒絕提供相關個人資料者，將無法參加本活動。
                      </li>
                    </ul>
                  </li>
                </ol>
              </div>
            </div>

          </div>
          <!--/lottery 抽獎-->

        </div>
        <!--/#wrapper-->

        <!-- /4576170/free-1_NBAplayoffs-PC-a01-->
        <div class="banner_web" id="div-gpt-ad-1583910259702-0"></div>

        <!-- /4576170/free-1_NBAplayoffs-Mobile-a01-->
        <div class="banner_mob" id="div-gpt-ad-1583911243562-0"></div>

        <div id="footer">The NBA identifications are the intellectual property of NBA Properties, Inc. © 2020 NBA Properties, Inc.</div>
      </div>

    </div>
    <script src="{{asset('dist/index-bundle.js')}}" type="text/javascript"></script>


  </body>
</html>
