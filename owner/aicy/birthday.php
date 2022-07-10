<?php
  date_default_timezone_set("Asia/Tokyo");
  if( date("Y-m-d") >= "2022-07-6" ){
    include('/hdd/aic/404.php');
  }else {
    include('/hdd/aic/owner/aicy/birthday-page.php');
  }
  ?>