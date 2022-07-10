<?php
include('/hdd/aic/head.html');
ob_start();
?>
<div class="contents">
<title>Nitro履歴 - あいしぃーのサーバー</title>
<meta name="description" content="あいしぃーのサーバー" />
<meta property="og:type" content="HP" />
<meta property="og:title" content="Nitro配り大会の履歴" />
<meta property="og:description" content="Nitro配り大会の履歴一覧です" />
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
    <a itemprop="item" href="/events/nitro/history/">
        <span itemprop="name">履歴</span>
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
    <h2 class="title h2"><i class="fa-solid fa-calendar-check"></i>  Nitro配り大会履歴</h2>
    <?php include '/hdd/aic/edit.php'; ?>
    <div class="box">
        <h3 class="h3">2022/06/10（3回目の開催）</h3>
        <br>
        <div class="none"> <a href="/events/nitro/oubo-2022-06-10" style="display:block; border-radius:20px;"> <p class="nitro-history none" style="text-align:center;"><img src="https://cdn.discordapp.com/avatars/769866251156717599/0ebcef83105f7ac717b5861ad608ae46.png?size=1024"> <span class="nomal" style="color:var(--main-text);">JTA737&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="hover" style="color:var(--main-text);">JTA737#7553</span><?php include('/hdd/aic/user-icon.php');?></p></a>
</div><br>
        <p style="text-align: center;"><a href="/events/nitro/oubo-2022-06-10">今回のNitro配りで応募した方一覧</a></p>
        <br>  
        <h3 class="h3">2022/05/07（2回目の開催）</h3>
        <br>
        <p class="nitro-history" style="text-align: center;"><img src="https://cdn.discordapp.com/avatars/872481208183975957/c8960c24f3ac21926a4e8d13be42130b.png?size=1024"> <span class="nomal">りぃる&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="hover">りぃる#7023</span><?php include('/hdd/aic/user-icon.php');?></p>
        <br>    
        <h3 class="h3">2022/04/25（初開催）</h3>
        <br>
        <?php include('/hdd/aic/admin/old/ropeta/card.php');?>
        <br>
        </div>
        <div class="box">
        <p class="none" style="text-align: left;"><a href="/events/"><i class="fa-solid fa-angle-left"></i>  イベントページに戻る</a>・<a href="/events/nitro/"><i class="fa-brands fa-discord"></i>  Nitro配りページに戻る</a></p>
    </div>