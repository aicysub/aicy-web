<?php 
header_register_callback(function(){
  header_remove('X-Powered-By');
});
?>
<!DOCTYPE html>
<html lang="ja-JP">
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<meta charset="utf-8"/>
<link rel="stylesheet" href="/css/preload.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <link rel="icon" type="image/gif" href="/favicon.gif">
      </head>
<body>
<div id="loadings" style="display:none;"></div>
  <div id="cursor"></div>
    <nav style="user-select: none;" class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="/">
            <img src="/favicon.ico" width="63" height="116" class="aicy-icon" id="top-img">
          </a>   
          <a onclick="config()">
          <div class="change navbar-item" id="mobile">
            <i class="fa-solid fa-gear" id="config"></i>
</div></a>
          <p role="button" class="navbar-burger" id="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
</p>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <?php  
            $location = $_SERVER['SCRIPT_NAME'];
            $url = str_replace('.php', '', $location);
            $url = str_replace('index.php', '', $location);
            ?>
          <a class="navbar-item" id="setup" onclick="setup()" url="<?php echo $url;?>">
          <i class="fa-solid fa-box-open"></i> セットアップ
</a>
            <a class="navbar-item" href="/" id="top">
                <i class="fa-solid fa-house"></i> トップページ
</a>
<a class="navbar-item" href="https://aic-group.sytes.net/blog/" id="blog">
            <i class="fa-brands fa-wordpress"></i>  あいしぃーのぶろぐ
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
              
              <a class="navbar-link" id="events" href="/events/">
              <i class="fa-solid fa-calendar-check"></i> イベント <i class="fa-solid fa-caret-down down"></i></a>
            <div class="navbar-dropdown" id="events-nav">
                <a class="navbar-item" href="/events/nitro/" id="nitro">
                <i class="fa-brands fa-discord"></i>  Nitro配り大会
                    </a>
              </div>
              </div>
              <div class="navbar-item has-dropdown is-hoverable">
              
              <a class="navbar-link" id="admin" href="/admin/">
              <i class="fa-solid fa-circle-check"></i>  運営 <i class="fa-solid fa-caret-down down"></i></a>
            <div class="navbar-dropdown" id="admin-nav">
            <a class="navbar-item" href="https://aic-group.sytes.net/owner/aicy/" id="aicy">
            <img src="/favicon.ico" class="icon-img" width="53">  あいしぃー
                    </a>
                    <hr class="navbar-divider">
                <a class="navbar-item" href="/admin/amukushimuru/" id="amu">
                <img src="/images/admins/amukushimuru.png" class="icon-img" width="33"> アムクシル
                    </a>
                    <a class="navbar-item" href="/admin/chasyumen/" id="cha">
                    <img src="/images/admins/chasyumen.png" class="icon-img" width="33">  <ruby data-ruby="ちゃーしゅーめん">chasyumen<rt style="text-align:center;">ちゃーしゅーめん</rt></ruby>
                    </a>
                    <a class="navbar-item" href="/admin/edamame/" id="eda">
                    <img src="/images/admins/edamame.png" class="icon-img" width="33">  えだまめ
                    </a>
                    <a class="navbar-item" href="/admin/gijutsu/" id="gaki">
                    <img src="/images/admins/gijutsu.png" class="icon-img" width="33">  技術
                    </a>
                    <a class="navbar-item" href="/admin/ginzyou-genryu/" id="ginzyou">
                    <img src="/images/admins/ginzyou-genryu.png" class="icon-img" width="33">  <ruby data-ruby="ぎんじょうげんりゅう">銀城幻龍<rt style="text-align:center;">ぎんじょうげんりゅう</rt></ruby>：アラハバキ</ruby>
                    </a>
                    <a class="navbar-item" href="/admin/kumi/" id="kumi">
                    <img src="/images/admins/kumi.png" class="icon-img" width="33">  &#x2B50クミ
                    </a>
                    <a class="navbar-item" href="/admin/nemoyans/" id="nemo">
                    <img src="/images/admins/nemoyans.png" class="icon-img" width="33">  <ruby data-ruby="ねもやんす">nemoyans<rt style="text-align:center;">ねもやんす</rt></ruby>
                    </a>
                    <a class="navbar-item" href="/admin/papurusuta/" id="papu">
                    <img src="/images/admins/papurusuta.png" class="icon-img" width="33">  <ruby data-ruby="ぱぷるすた">papurusuta<rt style="text-align:center;">ぱぷるすた</rt></ruby>
                    </a>
                    <a class="navbar-item" href="/admin/ryouma/" id="ryo">
                    <img src="/images/admins/ryouma.png" class="icon-img" width="33">  りょうま
                    </a>
              </div>
              </div>
            <div class="navbar-item has-dropdown is-hoverable">
              <p class="navbar-link" id="etc">
              <i class="fa-solid fa-circle-ellipsis"></i> その他 <i class="fa-solid fa-caret-down down"></i>
</p>
      
              <div class="navbar-dropdown" id="etc-nav">
                <a class="navbar-item" href="/about/">
                    <img src="/favicon.ico" class="icon-img" width="53">あいしぃーのサーバーについて
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item" href="https://aic-group.sytes.net/youtube/" id="youtube">
                      <i class="fas fa-arrow-alt-circle-down"></i>  YouTube ダウンローダー
</a>
                <a class="navbar-item" href="/unei/">
                    <i class="fa-solid fa-flag"></i>  運営になる
                </a>
                <a class="navbar-item" href="https://aic-group.sytes.net/contacts/" id="contacts">
                    <i class="fa-solid fa-address-book"></i>   お問い合わせ / 報告
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item" href="https://aic-group.sytes.net/fuck2/" target="_blank">
                <i class="fa-solid fa-poo"></i>  今話題の商標の状態 2
            </a>
            <a class="navbar-item" href="https://aic-group.sytes.net/fuck/" target="_blank">
                <i class="fa-solid fa-poo"></i>  今話題の商標の状態 1（権利放棄）
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item" onclick="setup_modal()">
          <i class="fa-solid fa-box-open"></i> セットアップ（初期化）
</a>
              </div>
            </div>
</div>
      </div>
      <a id="preference-modal-open" onclick="config()">
      <div class="change" id="pc">
      <i class="fa-solid fa-gear" id="config"></i>
</div></a>
<?php require_once("/hdd/aic/input.php"); ?>
      </nav>
      <footer class="footers">
<h2 class="title" style="text-align: center; padding-bottom: 10px; color: #FFF; text-shadow: 1px 1px 0 #906862, -1px -1px 0 #906862, -1px 1px 0 #906862, 1px -1px 0 #906862, 0px 1px 0 #906862, 0-1px 0 #906862, -1px 0 0 #906862, 1px 0 0 #906862;width: 100%;font-size: 1.5em;"><i class="fa-solid fa-copyright" style="color: #FFF;"></i>AIC_Group. / <a href="/owner/aicy/" class="none" id="aicy-footer"><img src="/favicon.ico" width="30"></a> 2022 -</h2><p class="color" style="text-align:center; font-size: 15px; font-weight: normal; margin-top: 1%;">現在ダークモードで表示しています</p><p class="white" style="text-align:center;font-size: 15px; font-weight: normal; margin-top: 1%;">現在ホワイトモードで表示しています</p><p style="text-align: center; font-size: 15px; font-weight: normal; " title="メニューの最終更新日" alt="メニューの最終更新日"></p><p style="text-align:center;"><i class="fa-solid fa-clock-rotate-left"></i> <?php date_default_timezone_set('asia/tokyo'); clearstatcache(); echo date( "Y/m/d H:i", filemtime(__FILE__)); ?></p></p>
      </footer>
      <p style="cursor:pointer;" onclick="window.scroll({top: 0, behavior: 'smooth'})" id="page_top" class="top">
        <i class="fa-solid fa-arrow-turn-up"></i>
</p>
<div class="hide" style="top: 0;right: 0;bottom: 0;left: 0;z-index: 100;opacity: 1;">
<script async defer src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7768523920396309"
     crossorigin="anonymous"></script>
     <?php
     date_default_timezone_set('asia/tokyo'); clearstatcache(); 
     $main_js_v = "?v=".date("Y-m-d.h")."";
     $main_css_v = "?v=".date("Y-m-d.h")."";
     $dark_css_v = "?v=".date("Y-m-d.h")."";
     $config_js_v = "?v=".date("Y-m-d.h")."";
     $special_css_v = "?v=".date("Y-m-d.h")."";
echo '
<script type="text/javascript" src="/js/main.js'.$main_js_v.'"></script>
<script type="text/javascript" src="/js/setup/'.$config_js_v.'"></script>
';
echo '<script>';
echo 'setTimeout(function(){loadCSS( "/css/main/'.$main_css_v.'", document.getElementById("loadcss") );},500);';
if (isset($_COOKIE['anime'])){
} else{
  echo 'setTimeout(function(){loadCSS( "/css/anime.css'.$main_css_v.'", document.getElementById("loadcss") );},500);';
}
if (strstr($ua, 'Trident') || strstr($ua, 'MSIE')) {
  header('Location: https://aic-group.sytes.net/ie/?p='.$_SERVER['REQUEST_URI'].'');
}
echo '</script>';
if (isset($_COOKIE['dark'])){
  echo '<script>';
    echo 'setTimeout(function(){loadCSS( "/css/dark/'.$dark_css_v.'", document.getElementById("loadcss") );},500);';
    echo '</script>';
}else{

}
if (isset($_COOKIE['special'])){
  echo "
  <style> #dark-change-pc {display: inline-block !important; pointer-events:all;}
  #white-change-pc {
    display: none;
    pointer-events: none;
  }</style>";
  echo '<script>';
    echo 'setTimeout(function(){loadCSS( "/css/dark/'.$dark_css_v.'", document.getElementById("loadcss") );},500);';
    echo 'setTimeout(function(){loadCSS( "/css/special/'.$special_css_v.'", document.getElementById("loadcss") );},500);';
    echo '</script>';
}else{

}
if (isset($_COOKIE['access'])){

}else{
  echo "
  <script>
  setTimeout(function(){loadCSS( '/css/dark/".$dark_css_v."', document.getElementById('loadcss') );},500);
  setTimeout(function(){loadCSS( '/css/special/".$special_css_v."', document.getElementById('loadcss') );},500);
  document.cookie = 'special=true';
  $(document).ready(function(){
setup();
  });
    </script>
    ";
}
if (isset($_COOKIE['auto'])){ 
  $time = intval(date('H'));
  if (17 <= $time && $time <= 4) {
   echo '<script>setTimeout(function(){loadCSS( "/css/dark/'.$dark_css_v.'", document.getElementById("loadcss") );},500);</script>';
  }
}
  else {

  }
  if (isset($_COOKIE['config'])){
    echo "
    <script>
 document.cookie = 'config=; path=/; max-age=0;';
 $(document).ready(function(){
  config();
 });
    </script>
    ";
  }
  echo "<script>";
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
  echo 'setTimeout(function(){loadCSS( "/css/mobile/'.$main_css_v.'", document.getElementById("loadcss") );},500);';
  } elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
  echo 'setTimeout(function(){loadCSS( "/css/mobile/'.$main_css_v.'", document.getElementById("loadcss") );},500);';
  } elseif ((strpos($ua, 'DoCoMo') !== false) || (strpos($ua, 'KDDI') !== false) || (strpos($ua, 'SoftBank') !== false) || (strpos($ua, 'Vodafone') !== false) || (strpos($ua, 'J-PHONE') !== false)) {
  echo 'setTimeout(function(){loadCSS( "/css/mobile/'.$main_css_v.'", document.getElementById("loadcss") );},500);';
}
echo "</script>";
?>
<div class="modals" id="modals"></div>
     <div class="contents">