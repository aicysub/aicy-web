<div id="loading" style="display:none;"></div>
<div class="hide" style="top: 0;right: 0;bottom: 0;left: 0;z-index: 100;opacity: 1;">
<script>
function rel() {
  setTimeout(function(){
  if (window.name != "any") {
    window.location.href = window.location.href
    window.name = "any";
  } else {
    window.name = "";
  }
},1000);
}
</script>

<body onLoad="rel()">
<?php
include('/hdd/aic/head.html');
ob_start();
?>
<head>
<meta name="robots" content="noindex">
</head>
<div class="contents">
<ol itemscope class="bread none" itemtype="https://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="/">
        <span itemprop="name">ホーム</span>
    </a>
    <meta itemprop="position" content="1" />
  </li>
  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="/youtube/">
        <span itemprop="name">YouTubeダウンローダー</span>
    </a>
    <meta itemprop="position" content="2" />
  </li>
</ol>
<style>
  #etc {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
  }
  #youtube {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
    pointer-events: none;
  }
  #etc i,#youtube i {
    color: var(--main-text);
  }
  </style>
<div class="main">
  <style>
.yt-log {
  padding: 3%;
  border: 3px solid #b27954 !important;
  border-radius: 0px 0px 20px 20px;
  box-shadow: var(--shadow);
  margin-top: 0 !important;
  border-top: 1px solid transparent !important;
}
.video .h2:hover {
  background: var(--border-color);
  cursor: pointer;
}
    </style>
    <script>
    $('#setup').attr('url','/youtube/');
</script>
<title>ダウンローダー - あいしぃーのサーバー</title>
<?php 
$hide_select = '
<br><br>
<p style="text-align:center;">動画と音声どちらをダウンロードしますか？</p>
<br>
<select name="select" id="media_select" required>
<option value="video" selected>動画</option>
<option value="audio" >音声</option>
</select>
';
$path = '/hdd/aic/youtube/videos/';
$newfile = exec('ls -rtF '.$path.' | grep -v / | tail -n 1');
if(empty($newfile)){
  $video_style = '<style> .video {display:none;} .video-no {display:block;} .video-ok {display:none;}</style>';
  echo $video_style;
}else{
  $video_style = '<style> .video {display:block;} .video-ok {display:block;} .video-no {display:none;}</style>';
  echo $video_style;
}
?>
<div style="text-align:center;" class="video">
<div class="open-box">
    <input type="checkbox" id="switch" class="on-off" />
    <label for="switch" type="submit" id="最近処理された動画" class="open-label h2 title">最近処理された動画<p style="margin-top:5px;font-size:0.5em;">タッチすると見れます</p></label>
    <div class="open">
        <div class="h2 yt-log">
<br>
<link href="https://vjs.zencdn.net/7.19.2/video-js.css" rel="stylesheet" />
<script src="https://vjs.zencdn.net/7.19.2/video.min.js"></script>
<video class="video-js" id="my-video" preload="auto" data-setup="{}" controls>
<source src="/youtube/videos/<?php echo $newfile; ?>" type="video/webm" />
<p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a
      >
    </p>
</video>
</div>
</div>
<br>
<div class="video-ok"><?php include '/hdd/aic/edit.php'; ?>
</div>
</div>
</div>
    <h2 class="h2 title">動画でダウンロード</h2><p style="text-align: center; margin-right: 0.2%;">
    <div class="video-no">
    <?php include '/hdd/aic/edit.php'; ?>
</div>
    <p style="text-align:center;"> <a href="https://youtu.be/" target="_blank" rel="noopener noreferrer" style="margin-right: 0.2%;">YouTube</a>・<a href="https://www.nicovideo.jp/" target="_blank" rel="noopener noreferrer" style="margin-right: 0.2%;">niconico</a>・<a href="https://twitter.com/" target="_blank" rel="noopener noreferrer" style="margin-right: 0.2%;">Twitter</a>・<a href="https://www.tiktok.com/" target="_blank" rel="noopener noreferrer" style="margin-right: 0.2%;">TikTok</a>・<a onclick="window.open('https://jp.pornhub.com/')" rel="noopener noreferrer" style="margin-right: 0.2%;">PornHub</a>等が利用できます。</p>
<br>
    <div class="box">
<form action="/tools/youtube/v" id="url" style="text-align: center;" method="post">
    <input type="text" class="download" name="url" required>
    <input type="submit" class="download" id="url" value="ダウンロード" required><br>
    <?php echo $hide_select;?>
<p style="font-size:0.8em;"><br>(ファイルは一時間以内に消去されます。)</p>
</form>