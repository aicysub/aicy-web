<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
    // スマートフォンからアクセスされた場合
    header("Location: https://aic-group.sytes.net".$_GET['p']."");
} elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
    // タブレットからアクセスされた場合
    header("Location: https://aic-group.sytes.net".$_GET['p']."");
} elseif ((strpos($ua, 'DoCoMo') !== false) || (strpos($ua, 'KDDI') !== false) || (strpos($ua, 'SoftBank') !== false) || (strpos($ua, 'Vodafone') !== false) || (strpos($ua, 'J-PHONE') !== false)) {
    // 携帯からアクセスされた場合
    header("Location: https://aic-group.sytes.net".$_GET['p']."");
}
$link = $_GET['p'];
if(!isset($_GET['p'])){
    $link = 'https://aic-group.sytes.net';
}else{
    $link = 'https://aic-group.sytes.net'.$_GET['p'].'';
}
?>
<head>
    
    <title>『Internet Explorer』はあいしぃーのさーばーではご利用いただけません</title>
 <link rel="stylesheet" type="text/css" href="https://media-ryouma.sytes.net/assets/css/click-hide-or-show.css">
 <link rel ="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
 <link rel ="stylesheet" href="/css/main.php">
 <link rel ="stylesheet" href="/css/mobile.php">
 <link rel ="stylesheet" href="/css/anime.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
<meta name="description" content="あいしぃーのサーバー" />
<meta property="og:type" content="HP" />
<meta property="og:title" content="IE使うなボケ" />
<meta property="og:description" content="IE使ったらBAN（予定）" />
<meta property="og:site_name" content="あいしぃーのサーバー" />
<meta property="og:image" content="https://aic-group.sytes.net/favicon.ico" />
</head>
<body>
    <style>
        .hidden_box label {
            padding: 2%;
            display: block;
            border: none;
            border-radius: 18px;
            background: #f9f9f9;
            margin: 2%;
            user-select: none;
        }
        .box,.h2 {
            background: #fff;
        }
        </style>
<div class="contents"><div class="main">
    <h2 class="h2 title">『Internet Explorer』はご利用できません。</h2>
    <div class="box">
<p>現在、ご利用になっている<b>『Internet Explorer』</b> というブラウザは<a style="text-decoration: none; border-radius: 5000px; background: red; color: #fff; padding-top: 4px; padding-bottom: 4px; padding-left: 18px; padding-right: 18px; box-shadow: var(--shadow);" target="_blank" href="https://support.microsoft.com/ja-jp/windows/internet-explorer-%E3%81%AE%E3%83%98%E3%83%AB%E3%83%97-23360e49-9cd3-4dda-ba52-705336cc0de2">2022 年 6 月 15 日でサポートが終了した</a>、古いブラウザです。<br>
    <br>あいしぃーのサイトは<b>『Internet Explorer』</b>でご利用することはできませんので、<br>
    <br>様々な問題を抱えている、<b>『Internet Explorer』</b>から『Edge』や『Firefox』、『Google Chrome』に切り替えてください。<br>
<div class="hidden_box" style="margin: 12px 0;     -webkit-transition: height 0.5s linear;
-moz-transition: height 0.5s linear;
 -ms-transition: height 0.5s linear;
  -o-transition: height 0.5s linear;
     transition: height 0.5s linear;"> 
   <label for="label2"><li> ブラウザのダウンロード <a style="font-size: 14px">クリックしてね</a></label></li>
   <hr style="height: 1px;display: block;padding: 0;background: #B2B2B2;border: none;width: 100%;margin-bottom: 0;">
    <input type="checkbox" id="label2">
    <div class="hidden_show" style="    -webkit-transition: height 0.5s linear;
    -moz-transition: height 0.5s linear;
     -ms-transition: height 0.5s linear;
      -o-transition: height 0.5s linear;
         transition: height 0.5s linear;">
        <div class="content">
            <a href="microsoft-edge:<?php echo $link ?>">Microsft Edgeから開く</a><a>(すぐにアクセスできます。)</a><br><br>
<a href="https://www.google.com/intl/ja_jp/chrome/">Google Chromeをダウンロード</a><br><br>
<a href="https://www.mozilla.org/ja/firefox/new/">Mozilla Firefoxをダウンロード</a>
<hr style="height: 1px;display: block;padding: 0;background: #B2B2B2;border: none;width: 100%;margin-bottom: 0;">
</div>
</div>
</div>
<div class="hidden_box" style="margin: 12px 0;     -webkit-transition: height 0.5s linear;
-moz-transition: height 0.5s linear;
 -ms-transition: height 0.5s linear;
  -o-transition: height 0.5s linear;
     transition: height 0.5s linear;"> 
   <label for="label3"><li> ブラウザがダウンロードされている場合 <a style="font-size: 14px">クリックしてね</a></label></li>
   <hr style="height: 1px;display: block;padding: 0;background: #B2B2B2;border: none;width: 100%;margin-bottom: 0;">
    <input type="checkbox" id="label3">
    <div class="hidden_show" style="    -webkit-transition: height 0.5s linear;
    -moz-transition: height 0.5s linear;
     -ms-transition: height 0.5s linear;
      -o-transition: height 0.5s linear;
         transition: height 0.5s linear;">
        <div class="content">
            <a href="google-chrome:<?php echo $link ?>">Google Chromeから開く</a><br><br>
            <a href="firefox:<?php echo $link ?>">Firefoxから開く</a><br><br>
            <a href="opera-http:<?php echo $link ?>">Operaから開く</a><br><br>
            <a href="safari:<?php echo $link ?>">Safariから開く</a><br>
            <hr style="height: 1px;display: block;padding: 0;background: #B2B2B2;border: none;width: 100%;margin-bottom: 0;">
</div>
</div>
</div>

<p>もし、『Internet Explorer』を利用していない状態で<br>このページが表示された場合は<a href="<?php echo $link ?>">こちら</a>からアクセスできるかもしれません。</p>
</div></div>

</div>
<br>
<br>
</div>

</body>