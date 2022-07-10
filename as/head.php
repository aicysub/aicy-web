<!DOCTYPE html>
<html lang="ja-JP">
<head>
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
          <a class="navbar-item" href="/as/">
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
            <a class="navbar-item" href="/as/" id="top">
                <i class="fa-solid fa-house"></i> Aicy's Server
</a>
<a class="navbar-item" href="https://aic-group.sytes.net/">
            <i class="fa-brands fa-wordpress"></i>  メインサイト
            </a>
<a class="navbar-item" href="https://aic-group.sytes.net/blog/">
            <i class="fa-brands fa-wordpress"></i>  あいしぃーのぶろぐ
</a>
</div>
<a id="preference-modal-open" onclick="config()">
      <div class="change" id="pc">
      <i class="fa-solid fa-gear" id="config"></i>
</div>
</a></div>
      </div>
      </nav>
      <footer class="footers" style="position: fixed;bottom: 0;width: 100%;background: #9068620f;backdrop-filter: blur(5px); z-index: 500; user-select: none;    animation: up 2.5s ease; ">
        <br><h2 class="title" style="text-align: center; padding-bottom: 10px; color: #FFF; text-shadow: 1px 1px 0 #906862, -1px -1px 0 #906862, -1px 1px 0 #906862, 1px -1px 0 #906862, 0px 1px 0 #906862, 0-1px 0 #906862, -1px 0 0 #906862, 1px 0 0 #906862;"><i class="fa-solid fa-copyright" style="color: #FFF;"></i>AIC_Group. / <a href="/owner/aicy/" class="none" id="aicy"><img src="/favicon.ico" width="30"></a> 2022 -</h2><p class="color" style="text-align:center; font-size: 15px; font-weight: normal; margin-top: 1%;">現在ダークモードで表示しています</p><p class="white" style="text-align:center;font-size: 15px; font-weight: normal; margin-top: 1%;">現在ホワイトモードで表示しています</p><p style="text-align: center; font-size: 15px; font-weight: normal; "></p><p style="text-align:center;"><i class="fa-solid fa-clock-rotate-left"></i> <?php date_default_timezone_set('asia/tokyo'); clearstatcache(); echo date( "Y/m/d H:i", filemtime(__FILE__)); ?></p><br></p>
      </footer>
      <p style="cursor:pointer;" onclick="window.scroll({top: 0, behavior: 'smooth'})" id="page_top" class="top">
        <i class="fa-solid fa-arrow-turn-up"></i>
</p>
<div class="hide" style="top: 0;right: 0;bottom: 0;left: 0;z-index: 100;opacity: 1;">
<script type="text/javascript" src="/js/main.js" async defer></script>
<script async defer src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7768523920396309"
     crossorigin="anonymous"></script>
     <?php
     $main_js_v = "?v=1.6-6.4";
     $main_css_v = "?v=1.8-9.7";
     $dark_css_v = "?v=1.2-4.2";
     $config_js_v = "?v=1.4-2.4";
     $special_css_v = "?v=0.6-2.9";
echo '
<script type="text/javascript" src="/js/main.js'.$main_js_v.'"></script>
<script type="text/javascript" src="/js/setup/'.$config_js_v.'"></script>
';
echo '<script>';
echo 'setTimeout(function(){loadCSS( "/css/main/'.$main_css_v.'", document.getElementById("loadcss") );},500);';
echo 'setTimeout(function(){loadCSS( "/css/anime.css'.$main_css_v.'", document.getElementById("loadcss") );},500);';
    $ua = $_SERVER['HTTP_USER_AGENT'];
if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
echo 'setTimeout(function(){loadCSS( "/css/mobile/'.$main_css_v.'", document.getElementById("loadcss") );},500);';
} elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
echo 'setTimeout(function(){loadCSS( "/css/mobile/'.$main_css_v.'", document.getElementById("loadcss") );},500);';
} elseif ((strpos($ua, 'DoCoMo') !== false) || (strpos($ua, 'KDDI') !== false) || (strpos($ua, 'SoftBank') !== false) || (strpos($ua, 'Vodafone') !== false) || (strpos($ua, 'J-PHONE') !== false)) {
echo 'setTimeout(function(){loadCSS( "/css/mobile/'.$main_css_v.'", document.getElementById("loadcss") );},500);';
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
?>
<div class="modals" id="modals"></div>
     <div class="contents">