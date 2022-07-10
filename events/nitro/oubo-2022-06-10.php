<?php
include('/hdd/aic/head.php');
ob_start();
?>
<div class="contents">
<title>第3回Nitro配り応募者一覧 - あいしぃーのサーバー</title>
<meta name="description" content="あいしぃーのサーバー" />
<meta property="og:type" content="HP" />
<meta property="og:title" content="第3回Nitro配り応募者一覧" />
<meta property="og:description" content="第3回Nitro配り応募者一覧です" />
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
    <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <meta itemprop="position" content="3" />
    <a itemprop="item" href="/events/nitro/history">
        <span itemprop="name">履歴</span>
    </a>
  </li>
  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <meta itemprop="position" content="3" />
    <a itemprop="item" href="/events/nitro/oubo-2022-06-10/">
        <span itemprop="name">第3回Nitro配り応募者一覧</span>
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
    <h2 class="title h2">第3回Nitro配り応募者一覧</h2>
    <?php include '/hdd/aic/edit.php'; ?>
    <div class="box">
<?php include('/hdd/aic/owner/aicy/card.php');?>
<br>
<?php include('/hdd/aic/admin/ginzyou-genryu/card.php');?>
<br>
<?php include('/hdd/aic/admin/gijutsu/card.php');?>
<br>
<br>
<?php include('/hdd/aic/admin/kumi/card.php');?>
<br>
<div class="none"> <a style="display:block; border-radius:20px;"> <p class="nitro-history none" style="text-align:center;"><img src="https://cdn.discordapp.com/avatars/769866251156717599/0ebcef83105f7ac717b5861ad608ae46.png?size=1024"> <span class="nomal" style="color:var(--main-text);">JTA737&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="hover" style="color:var(--main-text);">JTA737#7553</span><?php include('/hdd/aic/user-icon.php');?></p></a>
<br>
<?php include('/hdd/aic/admin/nemoyans/card.php');?>
<br></div>
<p style="text-align:right; font-size:0.7em;">運営多すぎ…</p>
</div>
<h2 class="title h2">第3回Nitro配り結果</h2>
<div class="box">

<img src="https://aic-group.sytes.net/images/nitro-2022-06-10.png" />
<br>
<p>以上の方が<b>抽選により</b>、決定いたしました。</p></div>
<div class="box">
<p class="none" style="text-align: left;"><a href="/events/nitro/"><i class="fa-brands fa-discord"></i>  Nitro配りページに戻る</a>・<a href="/events/nitro/history/"><i class="fa-solid fa-clock-rotate-left"></i>  Nitro配り履歴に戻る</a></p>
<?php $footer_mess = '<p>Discord NitroはDiscord社の著作物です。</p>';