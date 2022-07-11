<?php
require_once('/hdd/aic/head.html');
$ip = $_SERVER["REMOTE_ADDR"];
echo '
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
    <a itemprop="item" href="/tools/">
        <span itemprop="name">ツール</span>
    </a>
    <meta itemprop="position" content="2" />
  </li>
  <li itemprop="itemListElement" itemscope
  itemtype="https://schema.org/ListItem">
<a itemprop="item" href="/tools/ip/">
    <span itemprop="name">IPアドレスチェッカー</span>
</a>
<meta itemprop="position" content="3" />
</li>
</ol>
<h2 class="title h2">あなたのIPアドレス</h2>';
    include '/hdd/aic/edit.php';
    echo '<div class="box">';
echo "<p style=\"font-size: 2em; border-bottom: 15px dotted #906862; text-align: center;\">".$ip."</p>";
echo "<p style=\"font-size: 2em; border-bottom: 15px dotted #906862; text-align: center;\">ホスト名: ".gethostbyaddr($ip)."</p>";
echo "<title>".$ip." - あいしぃーのさーばー</title>";
?>
</div></div>