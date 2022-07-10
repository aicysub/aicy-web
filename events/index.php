<?php
include('/hdd/aic/head.html');
ob_start();
?>
<meta name="description" content="あいしぃーのサーバー" />
<meta property="og:type" content="HP" />
<meta property="og:title" content="Nitro配り大会" />
<meta property="og:description" content="りょうまが一ヶ月に一度Nitro Classicを@everyoneで贈るイベントです。" />
<meta property="og:site_name" content="あいしぃーのサーバー" />
<meta property="og:image" content="https://aic-group.sytes.net/images/event.png" />
<title>イベント - あいしぃーのサーバー</title>
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
    <meta itemprop="position" content="2" />
  </li>
</ol>
<style>
  #events {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
    pointer-events: none;
  }
  #events i {
    color: var(--main-text);
  }
  </style>
<h2 class="h2 title"><i class="fa-solid fa-calendar-check"></i>  イベント</h2>
<?php include '/hdd/aic/edit.php'; ?>
<div class="box">
    <h3 class="h3">現在開催中のイベント</h3>
    <div class="event">
<p style="text-align:center">現在はありません。</p>
</div></div>
    <hr class="hr">
    <div class="box">
    <h3 class="h3">不定期で開催中のイベント</h3>
    <div class="event">
        <h2 class="h2">Nitro配り大会</h2><br>
        <p style="text-align: center;">一ヶ月に一度Nitro ClassicをDMで贈るイベントです</p>
        <p  class="none" style="text-align: right;"><a href="/events/nitro/"><i class="fa-brands fa-discord"></i>  詳しく見る <i class="fa-solid fa-angle-right"></i></a></p>
        <hr class="hr">
        <p class="title">主催</p>
        <?php include('/hdd/aic/admin/ryouma/card.php');?>
    </div>
</div>
</div>
<div class="modals" id="modals">