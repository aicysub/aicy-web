<?php
include('/hdd/aic/head.html');
ob_start();
?>
        <title>運営一覧 - あいしぃーのサーバー</title>
        <meta name="description" content="あいしぃーのサーバー" />
<meta property="og:type" content="HP" />
<meta property="og:title" content="運営一覧" />
<meta property="og:description" content="あいしぃーのサーバーの運営の一覧。" />
<meta property="og:site_name" content="あいしぃーのサーバー" />
<meta property="og:image" content="https://aic-group.sytes.net/images/aic-wordmark.png" />
</head>
<br>
<br>
<div class="contents">
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
    <a itemprop="item" href="/admin/">
        <span itemprop="name">運営一覧</span>
    </a>
    <meta itemprop="position" content="2" />
  </li>
</ol>
<style>
  #admin {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
    pointer-events: none;
  }
  #admin i {
    color: var(--main-text);
  }
  </style>
<div class="main">
<br>
<title>運営一覧 - あいしぃーのさーばー</title>
<h2 class="title h2" style="text-align: center;">運営一覧</h2><p style="text-align: center;">あいしぃーのサーバーの運営の一覧。</p>
<?php include '/hdd/aic/edit.php'; ?>
<br>
<div class="flex admin-more" style="overflow: hidden;">
<?php
include('/hdd/aic/admin/amukushimuru/amukushimuru.php');
?>
<?php
include('/hdd/aic/admin/gijutsu/gijutsu.php');
?>
<?php
include('/hdd/aic/admin/ginzyou-genryu/ginzyou-genryu.php');
?>
</div>
<div class="flex admin-more" style="overflow: hidden;">
<?php
include('/hdd/aic/admin/kumi/kumi.php');
?>
<?php
include('/hdd/aic/admin/chasyumen/chasyumen.php');
?>
<?php
include('/hdd/aic/admin/nemoyans/nemoyans.php');
?>
</div>
<div class="flex admin-more" style="overflow: hidden;">
<?php
include('/hdd/aic/admin/papurusuta/papurusuta.php');
?>
<?php
include('/hdd/aic/admin/ryouma/ryouma.php');
?>
</div>