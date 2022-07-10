<?php
  include_once('/hdd/aic/head.php');
  $file = debug_backtrace();
  $file = $file[0]["file"];
  ?>
<p class="edited" title="このページの最終更新日" alt="このページの最終更新日">
    <i class="fa-solid fa-clock-rotate-left"></i> 
    <?php date_default_timezone_set('asia/tokyo'); clearstatcache(); echo date( "Y/m/d H:i", filemtime(''.$file.'')); ?>
</p>