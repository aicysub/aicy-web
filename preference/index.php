<?php
include_once('/hdd/aic/head.php');
if (isset($_COOKIE['dark'])){
 $select_status = "preference-img-selected";
}
if (isset($_COOKIE['white'])){
  $white_select_status = "preference-img-selected";
}
if (isset($_COOKIE['special'])){
  $special_select_status = "preference-img-selected";
}
if (isset($_COOKIE['anime'])){
  $anime_true_select_status = "preference-img-selected";
} else {
  $anime_false_select_status = "preference-img-selected";
}
?>
<div class="preference-modal">
  <style>
    .contents {
      backdrop-filter: blur(20px);
      background: var(--site-background);
    }
    #saved {
      opacity: 0;
    }
    </style>
    <script>
      $('#anime-none-change-pc').text(' アニメ ON');
      $('#dark-change-pc').text(' ダークモード');
      $('#anime-change-pc').text(' アニメ OFF');
      $('#white-change-pc').text(' ホワイトモード');
      $('#anime-none-change').text(' アニメ ON');
      $('#dark-change').text(' ダークモード');
      $('#anime-change').text(' アニメ OFF');
      $('#white-change').text(' ホワイトモード');
      </script>
<i class="fa-solid fa-xmark preference-close" onclick="preference_close()" id="preference-close"></i>
<div class="preference">
  <?php  if (PHP_OS === 'Darwin') {
      echo "  <style>   .preference-close {   right: 20px;   }</style>";
  } else {
    echo "  <style>   .preference-close {   left: 20px;   }</style>";
  }
  ?>
  <script>
        $(document).ready(function(){
          setTimeout(function() {
           checkWidth = function(){
          var browserWidth = $(window).width();
          var boxW = $(".preference-modal").width();
          var plusPxW = ((browserWidth - boxW)/2);
          $(".preference-modal").css({"left": plusPxW + "px"});
      };
       
      checkHeight = function(){
          var browserHeight = $(window).height();
          var boxH = $(".preference-modal").height();
          var plusPxH = ((browserHeight - boxH)/2);
          $(".preference-modal").css({"top": plusPxH - 70 + "px"});
      };
      $(function(){
          checkWidth();
          $(window).resize(checkWidth);
      });
       
      $(function(){
          checkHeight();
          $(window).resize(checkHeight);
      })
    }, 499);
    });
    </script>
<title>サイトの設定 - あいしぃーのさーばー</title>
<h2 class="preference-title">サイトの設定</h2>
</div>
<div class="preference-contents">
<div class="preference-main" id="preference-list">  
  <p class="preference-main-title">設定一覧</p><br>
<ul class="preference-list">
 <li onclick="config_themes()" id="config-top">テーマ設定</li>
 <li onclick="config_anime()">アニメ設定</li>
 <li onclick="config_color()">デザイン設定（作成中）</li>
 <li onclick="setup_warning()">初期化（再セットアップ）</li>
</ul>
<br>
<p>すべての設定は<a href="https://ja.wikipedia.org/wiki/HTTP_cookie" target="_blank">Cookie</a>に保存されます。</p>
</div>
<div class="preference-end" id="preference-end">
    <p class="preference-submit" onclick="preference_close()">終了</p>
  </div>
<div id="loadings" style="margin: auto;position: relative;margin-top: 2%;display: none;"></div>
<div class="preference-main" id="preference-themes">
  <p class="preference-main-title">テーマ設定</p><br>

  <ul class="preference-img">   
  <li><label for="white" onclick="white_click()" ><img id="white-img" class="<?php echo $white_select_status;?>" src="/images/white-mode.png" loading="lazy"></label>
  <p><input type="radio" name="themes" id="white" value="white">
  <label for="white">ホワイト</label></p>   </li> 
   <li><label for="dark" onclick="dark_click()" >
   <img id="dark-img" class="<?php echo $select_status;?>" src="/images/dark-mode.png" loading="lazy"></label>
    <p>     <input type="radio" name="themes" id="dark" value="dark">
    <label for="dark">ダーク</label></p>  </li>
    <li><label for="special" onclick="special_click()" >
   <img id="special-img" class="<?php echo $special_select_status;?>" src="/images/special-mode.png" loading="lazy"></label>
    <p>     <input type="radio" name="themes" id="special" value="special">
    <label for="dark">スペシャル</label></p>  </li>
  </ul>
    <p id="saved">設定を保存しました。</p>
    <a href="/help/themes/" onclick="preference_close()">テーマとは？</a>
<p>変更した設定は、あとからいつでも変更できます。</p>
  </div>
    <div class="preference-end" id="preference-themes-end">
    <p class="preference-etc" onclick="etc_config()">ほかの設定</p>
    <p class="preference-submit" onclick="preference_close()">完了</p>
  </div>
  <div class="preference-main" id="anime-config">
  <p class="preference-main-title" id="preference-anime">アニメーションの設定</p><br>

  <ul class="preference-img" style="width: 90%;margin: auto;margin-left: 4em;">   
  <li><label for="anime-true" onclick="anime_true_click()" >
  <video id="anime_true_video" class="<?php echo $anime_false_select_status;?>" loop muted autoplay src="/video/anime-true.webm" loading="lazy"></label>
  <p><input type="radio" name="anime" id="anime-true" value="anime-true"><label for="anime">有効</label></p>   </li> 
  <li><label for="anime-false" onclick="anime_false_click()" >
  <video id="anime_false_video" class="<?php echo $anime_true_select_status;?>" loop muted autoplay src="/video/anime-false.webm" loading="lazy"></label>
  <p><input type="radio" name="anime" id="anime-false" value="anime-false"><label for="anime">無効</label></p>   </li> 
</ul>
    <p id="saved">設定を保存しました。</p>
<p>変更した設定は、あとからいつでも変更できます。</p>
  </div>
  <div class="preference-end" id="preference-anime-end">
    <p class="preference-etc" onclick="etc_config()">ほかの設定</p>
    <p class="preference-submit" onclick="preference_close()">完了</p>
  </div>