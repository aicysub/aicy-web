<?php
include('/hdd/aic/head.html');
ob_start();
?>
<div class="contents">
<title>Nitro配り大会 - あいしぃーのサーバー</title>
<meta name="description" content="あいしぃーのサーバー" />
<meta property="og:type" content="HP" />
<meta property="og:title" content="Nitro配り大会" />
<meta property="og:description" content="Nitro配り大会一覧のルールや概要" />
<meta property="og:site_name" content="あいしぃーのサーバー" />
<meta property="og:image" content="https://aic-group.sytes.net/favicon.ico" />
<br>
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
    <a itemprop="item" href="/events/">
        <span itemprop="name">イベント</span>
    </a>
    </li>
  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <meta itemprop="position" content="2" />
    <a itemprop="item" href="/events/nitro/">
        <span itemprop="name">Nitro配り大会</span>
    </a>
  </li>
</ol>
<style>
  #events {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
  }
  #nitro {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
    pointer-events: none;
  }
  #events i,#nitro i {
    color: var(--main-text);
  }
  </style>
<div class="main">
<h2 class="title h2"><i class="fa-solid fa-calendar-check"></i>  Nitro配り大会について</h2>
<?php include '/hdd/aic/edit.php'; ?>
<div class="box">
    <h3 class="h3">概要</h3><br>
    <p style="text-align: center;"><a href="/admin/ryouma/">りょうま</a>が一ヶ月に一度Nitro Classicを抽選方式でDMで贈るイベントです</p>
    <p style="text-align: center;">必ずではないです。やらないときもあります。</p>
    <br>
    <h3 class="h3">応募方法</h3><br>
    <p style="text-align: center;"><a href="/admin/ryouma/">りょうま</a>のDMに応募する旨を送信ください。</p>
    <p style="text-align: center;">抽選方式で選択させていただきます。</p>
    <br>
    <h3 class="h3">ルール</h3>
    <br>
    <p style="text-align: center;">ギフトを受け取ったら名乗ってください。</p>
    <p style="text-align: center;">運営の指示には従ってください。</p>
    <br>
    <h3 class="h3">違反した場合</h3>
    <br>
    <p style="text-align: center;">できれば補填をされると幸いです。</p>
    <p style="text-align: center;">できなければ、しっかりと謝罪した上で3回（3ヶ月）受け取らないと明言しましょう。</p>
    <br>
    <h3 class="h3">サーバーブースター特典</h3>
    <br>
    <p style="text-align: center;">予め1ヶ月ほど前からNitro配り実施の時刻・日程をDMにてお伝えします。</p>
    <p style="text-align: center;">あくまでも目安時刻なので前後する場合がございます。</p>
    <br>
    <h3 class="h3">主催</h3><br>
    <?php include('/hdd/aic/admin/ryouma/card.php');?>
    <br>
    <p  class="none"style="text-align: left;"><a href="/events/"><i class="fa-solid fa-angle-left"></i>  イベントページに戻る</a>・<a href="/events/nitro/history/"><i class="fa-solid fa-clock-rotate-left"></i>  Nitro配り大会結果一覧</a></p>
</div>