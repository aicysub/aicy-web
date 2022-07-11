<?php require("/hdd/aic/head.php");  $_GET['original'] ='original';  ?>
<link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
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
<code class="language-css">
<?php  
  if(file_exists('/hdd/aic/css/'.$_GET['css'].'.php')){
require("/hdd/aic/css/".$_GET['css'].".php");
  } else {
require("/hdd/aic/css/main.php");
  }
?>
</code>
</pre>