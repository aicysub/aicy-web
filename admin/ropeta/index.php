<!DOCTYPE html>
<html lang="ja-JP">
<?php
include('/hdd/aic/head.php');
ob_start();
?>
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
        <span itemprop="name">運営</span>
    </a>
    <meta itemprop="position" content="2" />
  </li>
  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="<?php echo $_SERVER['REQUEST_URI']; ?>">
        <span itemprop="name">ロープTA</span>
    </a>
    <meta itemprop="position" content="3" />
  </li>
</ol>
<div class="main">
<meta name="description" content="あいしぃーのサーバー" />
<meta property="og:type" content="HP" />
<meta property="og:title" content="ロープTA" />
<meta property="og:description" content="運営のロープTAさんのプロフィールページ" />
<meta property="og:site_name" content="あいしぃーのサーバー" />
<meta property="og:image" content="https://aic-group.sytes.net/images/admins/ropeta.webp" />
<title>ロープTA - あいしぃーのサーバー</title>
<br>
<div style="text-align: center;">
<img src="/images/admins/full/ropeta.gif" style="width: 20%; border: 3px solid #906862; border-radius: 50%; box-shadow: 0 3px 3px rgb(0 0 0/12%),0 2px 3px -2px rgb(0 0 0/1%);">
</div>
<h2 class="title h2" style="text-align: center;"><span class="nomal">ロープTA</span><span class="hover">半童貞の男</span></h2>
<p style="text-align: center;">ポケモンが純粋に好き</p>    <?php include '/hdd/aic/edit.php'; ?>
<br>
<p class="unei">こんにちは、<span class="nomal">ロープTA</span><span class="hover">半童貞の男</span>です。<br>読み方は<span class="nomal">ロープ</span><span class="hover">はんどうてい</span>もしくは<span class="nomal">ロープ ティーエー</span><span class="hover">はんどうていのおとこ</span>です。<br>サブ垢を2つ(<span class="nomal">ロープTA</span><span class="hover">半童貞の男</span>,<span class="nomal">ロープTA Super</span><span class="hover">半童貞の男 Super</span>)保有しています。よろしくお願いします。<br>Hello I am <span class="nomal">ro-pu-ta0</span><span class="hover">han-dou-tei0</span>. Nice to meet you!</p>
<br>
<h2 class="title h2" style="text-align: center;">リンク</h2>
<?php
include("/hdd/aic/admin/old/ropeta/link.php");
ob_start();
?>
<h2 class="title h2" style="text-align: center;">ほかの運営</h2>
<div class="admin-more ropeta">
<?php
include('/hdd/aic/admin/list.php');
ob_start();
?>
</div>
</div>
<p style="text-align: center; font-size: 15px;">このページの最終更新日：<?php date_default_timezone_set('asia/tokyo'); clearstatcache(); echo date( "Y/m/d H:i:s", filemtime(__FILE__)); ?></p>