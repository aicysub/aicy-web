<?php
include_once('/hdd/aic/head.php');
?>
<div class="preference-modal">
  <style>
    .contents {
      backdrop-filter: blur(20px);
      background: var(--site-background);
    }
    #setup-2,#setup-2-end,#setup-3,#setup-3-end,#setup-4 {
      display: none;
    }
    .preference-status {
      display: none !important;
    }
    #setup-icon,#setup-title,#setup-subtitle {
      animation: fuwa 1s ease;
    }
    #next-2 {
      opacity: .6;
      cursor: not-allowed;
      pointer-events: none;
    }
    #next-checked {
display: none;
    }
    #saved {
      text-align:center; 
      opacity:0; 
      transition: .8s;
    }
    </style>
    <script>
        $(document).ready(function(){
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
    });
      </script>
<div class="preference">
<p class="preference-status" style="left: 150px; right: auto;">現在の設定</p>
<h2 class="preference-title">セットアップ</h2>
</div>
<div class="preference-contents">
<div class="preference-main" id="setup-1">
<br>
  <div class="preference-icon">
  <img src="/favicon.ico" class="preference-icon-img" id="setup-icon">
  <br><br>
  <p class="preference-main-title" id="setup-title">あいしぃーのさーばーへようこそ。</p>
  <p id="setup-subtitle">初回設定をはじめます。</p><br>
  <p class="preference-submit" id="next-1" onclick="$('#setup-1').fadeOut(1000);$('#setup-1-end').fadeOut(1000);setTimeout(function(){ $('#setup-2').fadeIn(1000);$('#setup-2-end').fadeIn(1000);$('#setup-2-end').css('display','flex');          $('.preference-title').text('セットアップ - 表示設定')},999);">次にすすむ <i class="fa-solid fa-circle-chevron-right" style="margin-left: 5px;margin-right: 0px;"></i></p>
<br>
<p style="margin-top: 25px;" id="mobile-config">設定は<a id="link-true" href="https://ja.wikipedia.org/wiki/HTTP_cookie" target="_blank">Cookie</a>に保存されます。</p>
</div>
<br>
  </div>
    <div class="preference-end" id="setup-1-end" style="justify-content: space-between;border-top: 0px;background: transparent;padding-bottom: 15px;padding-top: 0;">
    <p style="margin-left: 2%;margin-bottom: 10px;" id="pc">設定は<a id="link-true" href="https://ja.wikipedia.org/wiki/HTTP_cookie" target="_blank">Cookie</a>に保存されます。</p>
    <p class="preference-etc" id="next-1" style="margin-bottom: 10px;" onclick="setup_finish(); document.cookie = 'white=true; path=/'; document.cookie = 'access=true; path=/';">セットアップをスキップ</p>
  </div>
<div class="preference-main" id="setup-2">
  <p class="preference-main-title">表示カラーの設定</p><br>

  <ul class="preference-img">   
  <li><label for="white" id="white-label" onclick="first_white_click()"><img id="white-img" src="https://aic-group.sytes.net/images/white-mode.png"></label><p><input type="radio" name="themes" id="white" value="white"><label for="white">ホワイト</label></p>   </li>  <li><label for="dark" onclick="first_dark_click()"><img id="dark-img" src="https://aic-group.sytes.net/images/dark-mode.png"></label> <p>     <input type="radio" name="themes" id="dark" value="dark"><label for="dark">ダーク</label></p>  </li><li><label for="special" id="special-label" onclick="first_special_click()"><img id="special-img" src="https://aic-group.sytes.net/images/special-mode.png"></label><p><input type="radio" name="themes" id="special" value="special"><label for="white">スペシャル</label></p></li></ul>
<br>
<p id="saved">設定を保存しました。次にすすむを押してください。</p>
<p>変更した設定は、あとからいつでも変更できます。</p>
  </div>
    <div class="preference-end" id="setup-2-end">
    <p class="preference-etc" id="next-1" onclick="$('#setup-2').fadeOut(1000);$('#setup-2-end').fadeOut(1000); setTimeout(function(){$('#setup-1').fadeIn(1000);$('#setup-1-end').fadeIn(1000);$('#setup-1-end').css('display','flex'); $('.preference-title').text('セットアップ')},999)">前にもどる</p>
    <p class="preference-submit" id="next-2">次にすすむ</p>
    <p class="preference-submit" id="next-checked" onclick="$('#setup-2').fadeOut(1000);$('#setup-2-end').fadeOut(1000);setTimeout(function(){ $('#setup-3').fadeIn(1000);$('#setup-3-end').fadeIn(1000);$('#setup-3-end').css('display','flex');          $('.preference-title').text('セットアップ')},999)">次にすすむ</p>
  </div>
    <div class="preference-main" id="setup-3">
<br>
  <div class="preference-icon">
  <img src="/favicon.ico" class="preference-icon-img" id="setup-icon">
  <br><br>
  <p class="preference-main-title" id="setup-title">セットアップが完了しました。</p>
  <p id="setup-subtitle">変更を保存するには下のボタンを押してください。</p><br>
    <p class="preference-submit" onclick="setup_finish();">セットアップを終了する</p>
  </div>
<br>
  </div>
    <div class="preference-end" id="setup-3-end">
    <p class="preference-etc" id="next-1" onclick="$('#setup-3').fadeOut(1000);$('#setup-3-end').fadeOut(1000); setTimeout(function(){$('#setup-2').fadeIn(1000);$('#setup-2-end').fadeIn(1000);$('#setup-2-end').css('display','flex'); $('.preference-title').text('セットアップ - 表示設定');},999)">前にもどる</p>
    <p class="preference-submit" id="config-etc" onclick="setup_finish(); document.cookie = 'config=true; path=/;';">ほかの設定を変更</p>
  </div>
  <div class="preference-main" id="setup-4">
  <div id="loadings" style="margin: auto;position: relative;margin-top: 2%;display: none;"></div>
  </div>