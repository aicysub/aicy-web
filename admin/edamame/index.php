<!DOCTYPE html>
<html lang="ja-JP">
<?php
include('/hdd/aic/head.php');
ob_start();
?>
<div class="contents">
<meta name="description" content="あいしぃーのサーバー" />
<meta property="og:type" content="HP" />
<meta property="og:title" content="えだまめっ！" />
<meta property="og:description" content="えだまめっ！、ショタコンの変態" />
<meta property="og:site_name" content="あいしぃーのサーバー" />
<meta property="og:image" content="https://aic-group.sytes.net/images/admins/edamame.png" />
<title>えだまめっ！ - あいしぃーのサーバー</title>
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
    <a itemprop="item" href="/admin/">
        <span itemprop="name">運営</span>
    </a>
    <meta itemprop="position" content="2" />
  </li>
  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="<?php echo $_SERVER['REQUEST_URI']; ?>">
        <span itemprop="name">えだまめっ！</span>
    </a>
    <meta itemprop="position" content="3" />
  </li>
</ol>
<style>
  #admin {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
  }
  #eda {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
    pointer-events: none;
    outline: none !important;
  }
  #admin i {
    color: var(--main-text);
  }
  </style>
<div class="main">
<div style="text-align: center;">
<img src="/images/admins/full/edamame.png" style="width: 20%; border: 3px solid #906862; border-radius: 50%; box-shadow: 0 3px 3px rgb(0 0 0/12%),0 2px 3px -2px rgb(0 0 0/1%);">
</div>
<h2 class="title h2" style="text-align: center;">えだまめっ！</h2>
<p style="text-align: center;">ショタコンの変態</p>    <?php include '/hdd/aic/edit.php'; ?>
<br>
<p class="unei">えだまめです。塩振って食べるとうまいアレです。<br>まめとかえだまめって呼んでください。ショタコンの変態です。<br>まあまあ低浮上ですが、よろしくお願いします。<br> アイコン：<a href="https://twitter.com/Azusa_7304" target="_blank">梓/Azusa</a> 様
<h2 class="title h2" style="text-align: center;">リンク</h2>
<?php
include('/hdd/aic/admin/edamame/link.php');
ob_start();
?>
<h2 class="title h2" style="text-align: center;">ほかの運営</h2>
    <div class="admin-more edamame">
    <?php
include('/hdd/aic/admin/list.php');
ob_start();
?>
</div>
</p>
</div>
<Br>
<p style="text-align: center; font-size: 15px;">このページの最終更新日：<?php date_default_timezone_set('asia/tokyo'); clearstatcache(); echo date( "Y/m/d H:i:s", filemtime(__FILE__)); ?></p>
<div class="modals" id="modals">