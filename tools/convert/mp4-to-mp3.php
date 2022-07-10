<?php
include('/hdd/aic/head.html');
  if(file_exists("/hdd/aic/tools/files/" . $_GET['i'] . ".mp4")){
if(!isset($_GET['i'])){
  echo '
  <style>
#etc {
  background-color: var(--nav-focus);
  color: var(--main-text);
  transform: scale(1.05);
}
#tools {
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
  <title>エラーが発生しました。 - あいしぃーのサーバー</title>
  <h2 class="h2 title">エラーが発生しました。</h2>';
  include '/hdd/aic/edit.php';
  echo '
  <div class="box" style="text-align:center;>
  <form action="/tools/convert/upload" id="upload" method="post" enctype="multipart/form-data">
  <input class="download" name="convert_file" type="file" accept="audio/wav,video/mp4,video/webm,audio/flac,audio/ogg" required />
  <input type="submit" class="download" value="ファイルを変換する" />
  </form>
  <br>
  <br>
  <p>ファイルが正しくアップロードされていないか、対応していないファイルの可能性、<br>もしくは何らかの問題が発生しました。お手数ですが、確認しやり直してください。</p>
  <br>
  <a href="/tools/files/'.$_GET["i"].'.mp4">問題のファイル</a>
  </div>
  </div>
  </div>
  ';
exit;
}else{
ini_set('display_errors', "On");
    $file = "/hdd/aic/tools/files/" . $_GET['i'] . ".mp4";
    $wav_file = "/hdd/aic/tools/files/" . $_GET['i'] . ".wav";
  $mp3_file = "/hdd/aic/tools/files/" . $_GET['i'] . ".mp3";
  $dirfilename = "/tools/files/" . $_GET['i'] . ".mp3";
  $filename = $_GET['name'].".mp3";
  $wav_command = "ffmpeg -i ".$file." -b:a 256k ".$wav_file."";
  escapeshellcmd($wav_command);
  $command = "lame --vbr-new -V0 -b256 -F -f -m s --notemp --nores --interch 1 -p -k ".$wav_file." ".$mp3_file."";
  escapeshellcmd($command);
  $size = filesize($mp3_file);
  function byte_format($size, $dec=-1, $separate=false){
    $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
    $digits = ($size == 0) ? 0 : floor( log($size, 1024) );
     
    $over = false;
    $max_digit = count($units) -1 ;
 
    if($digits == 0){
        $num = $size;
    } else if(!isset($units[$digits])) {
        $num = $size / (pow(1024, $max_digit));
        $over = true;
    } else {
        $num = $size / (pow(1024, $digits));
    }
     
    if($dec > -1 && $digits > 0) $num = sprintf("%.{$dec}f", $num);
    if($separate && $digits > 0) $num = number_format($num, $dec);
     
    return ($over) ? $num . $units[$max_digit] : $num . $units[$digits];
}
  echo '<script>$(document).on(\'click\', \'#link-none\', function(){
    var downloadUrl = "'.$dirfilename.'";
    var downloading = browser.downloads.download({
       url : downloadUrl,
     filename : \''.$filename.'\',
     conflictAction : \'uniquify\' });
  })</script>';
  echo ' 
     <style>
  #etc {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
  }
  #tools {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
    pointer-events: none;
  }
  #etc i,#youtube i {
    color: var(--main-text);
  }
  </style>
  <title>変換に成功しました！ - あいしぃーのサーバー</title>
  <h2 class="h2 title">変換完了</h2>';
  include ("/hdd/aic/edit.php");
  ?>
  <div class="box" style="text-align:center;">
  <audio class="youtube" src="<?php echo $dirfilename;?>" controls title="<?php echo $filename;?>"></audio><br>
  <a href="https://aic-group.sytes.net<?php echo $dirfilename;?>" id="link-none" download="<?php echo $filename;?>">ファイルをダウンロード (<?php echo byte_format($size, 2, true);?>)</a>
  </div>
  <br>
  <h2 class="h2 title">ほかのファイルも変換する</h2>  <br><br>
  <div class="box" style="text-align:center;">
<?php require("/hdd/aic/tools/convert/input.php");?>
</div>
<br><br>
<?php }; ?>
<?php
  } else {
    echo '
  <style>
#etc {
  background-color: var(--nav-focus);
  color: var(--main-text);
  transform: scale(1.05);
}
#tools {
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
  <title>エラーが発生しました。 - あいしぃーのサーバー</title>
  <h2 class="h2 title">エラーが発生しました。</h2>';
  include '/hdd/aic/edit.php';
  echo '
  <div class="box" style="text-align:center;">
  <form action="/tools/convert/upload" id="upload" method="post" enctype="multipart/form-data">
  <input class="download" name="convert_file" type="file" accept="audio/wav,video/mp4,video/webm,audio/flac,audio/ogg" required />
  <input type="submit" class="download" value="ファイルを変換する" />
  </form>
  <br>
  <br>
  <p>ファイルが正しくアップロードされていないか、対応していないファイルの可能性、<br>もしくは何らかの問題が発生しました。お手数ですが、確認しやり直してください。</p>
  </div>
  </div>
  </div>
  ';
exit;
  }
  ?>