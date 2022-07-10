<head><meta name=”robots” content=”noindex”></head>
<?php
include('/hdd/aic/head.html');
ob_start();
$hide_select = '
<br><br>
<p style="text-align:center;">動画と音声どちらをダウンロードしますか？</p>
<br>
<select name="select" id="media_select" required>
<option value="video" selected>動画</option>
<option value="audio" >音声</option>
</select>
';
?>
<?php
if(!isset($_GET['v'])){
    echo '
    <div class="hide" style="inset: 0px; z-index: 100; opacity: 1; pointer-events: all; background-color: rgba(0, 0, 0, 0); filter: blur(0px);">
    <div class="contents">
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
    <title>リンクが未入力 - あいしぃーのサーバー</title>
    <h2 class="h2 title">やり直す</h2>';
    include '/hdd/aic/edit.php';
    echo '
    <div class="box">
    <form action="/youtube/a" style="text-align: center;" method="post">
    <input type="text" class="download" name="audio" required>
        <input type="submit" class="download" id="audio" value="ダウンロード" required>
    </form>
    <p style="text-align:center;">リンクもしくは動画IDが未入力だったため、エラーが発生しました。<br>お手数ですが、再度入力してください。</p>
    </div>
    </div>
    </div>
    ';
return FALSE;
}else{
    $link = $_GET['v'];
}
$link = str_replace('?list=', '_list=', $link);
$target = ['youtu.be','youtube.com','https://','http://','watch?v=','www.','jp.pornhub.com','view_video.php?viewkey=','bilibili.com','video','twitter.com','status','/','nico.jp','watch','php'];
$a = str_replace($target, '', $link);
$k = str_replace('/', '', $a);
$k = str_replace('_list=', '&list=', $k);
$file = $k;
if (preg_match("/yout/", $link)) {
    $g = $k;
    $command = "yt-dlp -x --audio-format wav -o \"/hdd/aic/tools/files/".$g.".wav\" ".$link."";
    $g = "/tools/files/".$g.".wav";
    $samune = "https://img.youtube.com/vi/".$b."/maxresdefault.jpg";
    $api_key = 'AIzaSyCMg2VmAOCtbxwgNGSgPY_FOoaSNklp-Bg';
    $get_api_url = "https://www.googleapis.com/youtube/v3/videos?id=$k&key=$api_key&part=snippet,contentDetails,statistics,status";
    $json = file_get_contents($get_api_url);
    $getData = json_decode( $json , true);
    foreach((array)$getData['items'] as $key => $gDat){
     $title = $gDat['snippet']['title'];
        $video_title = "「".$title."」";
    }
    $video_link = 'https://youtu.be/'.$k.'';
}else {
    $g = $k;
    $command = "yt-dlp -x --audio-format wav -o \"/hdd/aic/tools/files/".$g.".wav\" ".$link."";
    $g = "/tools/files/".$g.".wav";
    $samune = "";
    $video_title = '音声';
    $video_link = $link;
}
if (preg_match("/pornhub.com/", $link)) {
    $g = $k;
    $command = "yt-dlp -x --audio-format wav -o \"/hdd/aic/tools/files/".$g.".wav\" ".$link."";
    $g = "/tools/files/".$g.".wav";
    $samune = "";
    $video_title = '音声';
    $video_link = $link;
}
exec($command,$output);
$filesize = filesize('/hdd/aic'.$g.'');
const BYTE_ARRAY = [ ' B' ,  ' KB',  ' MB' ,  ' GB' ,  ' TB',  ' PB' ];

if(empty($output)){
echo '
<div class="hide" style="inset: 0px; z-index: 100; opacity: 1; pointer-events: all; background-color: rgba(0, 0, 0, 0); filter: blur(0px);">
<div class="contents">
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
<title>リンクに問題発生 - あいしぃーのサーバー</title>
<h2 class="h2 title">やり直す</h2>';
include '/hdd/aic/edit.php';
echo '
<div class="box">
'.$link.'
<form action="/youtube/a" style="text-align: center;" method="post">
<input type="text" class="download" name="audio" required>
    <input type="submit" class="download" id="audio" value="ダウンロード" required>
</form>
<p style="text-align:center;">リンク先もしくは動画IDに問題があったため、エラーが発生しました。<br>お手数ですが、再度入力してください。</p>
</div>
</div>
</div>
';
return FALSE;
  }
  else{
    function ByteToUnit($byte,$digi = 2 ,$unit = null){
        $size = floatval($byte);
        $count = 0;
        $u = ($unit===null) ?  BYTE_ARRAY : $unit;
        $maxcount = count($u);
     
        while($size >= 1024 && $count < $maxcount){
            $size /= 1024;
            ++$count;
        }
        return sprintf( "%.{$digi}f" , $size) . $u[$count];
    }
    $res0 = str_replace('/hdd/aic', '', $output[0]);
    $res1 = str_replace('/hdd/aic', '', $output[1]);
    $res2 = str_replace('/hdd/aic', '', $output[2]);
    $res3 = str_replace('/hdd/aic', '', $output[3]);
    $res4 = str_replace('/hdd/aic', '', $output[4]);
    echo '<script>$(document).on(\'click\', \'#link-none\', function(){
        var downloadUrl = "audios/'.$g.'";
        var downloading = browser.downloads.download({
           url : downloadUrl,
         filename : \''.$g.'\',
         conflictAction : \'uniquify\' });
      })</script>';
    echo '<div class="contents">
    <ol itemscope class="bread none" itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope    itemtype="https://schema.org/ListItem"> 
             <a itemprop="item" class="none" style="color:var(--main-text);" href="/">   
                    <span itemprop="name">ホーム</span>  </a> 
                     <meta itemprop="position" content="1" /></li>
                     <li itemprop="itemListElement" itemscope    itemtype="https://schema.org/ListItem">  
                         <a itemprop="item" class="none" style="color:var(--main-text);" href="https://aic-group.sytes.net/youtube/">  
                             <span itemprop="name">YouTubeダウンローダー</span>  </a>  
                             <meta itemprop="position" content="2" /></li>
                     <li itemprop="itemListElement" itemscope    itemtype="https://schema.org/ListItem">  
                             <span itemprop="name"><a class="none" target="_blank" style="color:var(--main-text);" href="https://youtu.be/'.$k.'">'.$video_title.' の処理が完了しました。</a>
                             <meta itemprop="position" content="3" /></a></li></ol>
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
        ';
    echo '<title>処理が完了しました - あいしぃーのサーバー</title><h2 class="h2 title">処理が完了しました</h2>';
    include '/hdd/aic/edit.php';
    echo '<div class="box"><div style="text-align: center;">';
    echo '<p style="text-align:center;"><a href="'.$video_link.'" target="_blank">'.$video_title.'</a></p><br>';
    echo '<audio class="youtube" src="
    '.$g.'" controls title="'.$video_title.'"></audio><br><p><a id="link-none" href="https://aic-group.sytes.net'.$g.'" download="'.$title.' - '.$k.'.wav">'.$video_title.'をダウンロードする ('.ByteToUnit($filesize).')</a><br>(ファイルは一時間以内に消去されます。)</p><br><a href="https://aic-group.sytes.net/tools/convert/wav-to-mp3?i='.$k.'&name='.$title.' - '.$k.'" class="download" type="submit">この音声をmp3に変換する</a>';
    echo '    </div></div><h2 class="h2 title">別の動画をダウンロード</h2>
    <div class="box" style="text-align:center;">
    <form action="/tools/youtube/v" id="url" style="text-align: center;" method="post">
    <input type="text" class="download" name="url" required>
    <input type="submit" class="download" id="url" value="ダウンロード" required><br>
        '.$hide_select.'
        </form>
    </div>';
    echo '
    <h2 class="h2 title">ログを見る</h2>
    <div class="box" style="text-align:center;">
    <div class="open-box">
        <input type="checkbox" id="switch" class="on-off" />
        <label for="switch" type="submit" id="ログ" class="open-label download title">ログ</label>
        <div class="open">
            <div class="yt-log">
        <code>'.$res0.'</code><br>
        <code>'.$res1.'</code><br>
        <code>'.$res2.'</code><br>
        <code>'.$res3.'</code><br>
        <code>'.$res4.'</code>
        </div>
    </div>
        </div>
        ';
  }
  ?>
  <div class="modals" id="modals">