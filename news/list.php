<?php
@header('Location: /news/');
require_once('/hdd/aic/head.html');
$ua = $_SERVER['HTTP_USER_AGENT'];
?>
<ul class="preference-list" style="width: 100%; font-size:1em;">
<li id="config-top"><a href="/news/2022-07-07/" style="color: var(--main-text)">【テーマ追加】新テーマを追加しました！（2022/07/07）</li></a>
 <li><a href="/news/2022-05-22/" style="color: var(--main-text)">【特典検討】サーバーブーストのお願い（2022/05/22）</li></a>
 <li id="config-bottom"><a href="/news/2022-05-11/" style="color: var(--main-text)">【お知らせ】浮上率低下による   
 <?php
          if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
              echo '<br>';
          } elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
              echo '<br>';
          } elseif ((strpos($ua, 'DoCoMo') !== false) || (strpos($ua, 'KDDI') !== false) || (strpos($ua, 'SoftBank') !== false) || (strpos($ua, 'Vodafone') !== false) || (strpos($ua, 'J-PHONE') !== false)) {
              echo '<br>';
          }
              ?>
              臨時最高責任者の制定（2022/05/11）</li></a>
</ul>