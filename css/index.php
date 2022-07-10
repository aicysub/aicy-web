<?php require("/hdd/aic/head.php");  $_GET['original'] ='original';  ?>
<div style="text-align:center;">
<?php 
  if(file_exists('/hdd/aic/css/'.$_GET['css'].'.php')){
   echo '<h2 class="h2 title">'.$_GET['css'].'.css</h2><a href="https://aic-group.sytes.net/css/'.$_GET['css'].'/?original" target="_blank">元のファイル</a>
   <title>'.$_GET['css'].'.css - あいしぃーのさーばー</title>
   ';
  } else {
   echo '
   <script>
   history.pushState(null, null, "/css/?css=main");
   </script>
   <h2 class="h2 title">main.css</h2><a href="https://aic-group.sytes.net/css/main/?original" target="_blank">元のファイル</a>
   <title>main.css - あいしぃーのさーばー</title>
   ';
  }
  ?>
</div>
<br>
<pre class="box">
<?php  
  if(file_exists('/hdd/aic/css/'.$_GET['css'].'.php')){
require("/hdd/aic/css/".$_GET['css'].".php");
  } else {
require("/hdd/aic/css/main.php");
  }
?>
</pre>