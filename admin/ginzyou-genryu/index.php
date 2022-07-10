<!DOCTYPE html>
<html lang="ja-JP">
<?php
include('/hdd/aic/head.php');
ob_start();
?>
<div class="contents"><ol itemscope class="bread none" itemtype="https://schema.org/BreadcrumbList">
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
        <span itemprop="name"><ruby data-ruby="ぎんじょうげんりゅう">銀城幻龍<rt>ぎんじょうげんりゅう</rt></ruby><ruby>：アラハバキ<rt>   </rt></ruby></span>
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
  #ginzyou {
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
<meta name="description" content="あいしぃーのサーバー" />
<meta property="og:type" content="HP" />
<meta property="og:title" content="銀城幻龍(ぎんじょうげんりゅう)：アラハバキ" />
<meta property="og:description" content="銀城幻龍(ぎんじょうげんりゅう)：アラハバキ" />
<meta property="og:site_name" content="あいしぃーのサーバー" />
<meta property="og:image" content="https://aic-group.sytes.net/images/admins/ginzyou-genryu.png" />
<title>銀城幻龍：アラハバキ - あいしぃーのサーバー</title>
<br>
<div style="text-align: center;">
<img src="/images/admins/full/ginzyou-genryu.png" style="width: 20%; border: 3px solid #906862; border-radius: 50%; box-shadow: 0 3px 3px rgb(0 0 0/12%),0 2px 3px -2px rgb(0 0 0/1%);">
</div>
<h2 class="title h2" style="text-align: center;"><ruby data-ruby="ぎんじょうげんりゅう">銀城幻龍<rt>ぎんじょうげんりゅう</rt></ruby><ruby>：アラハバキ<rt>   </rt></ruby></h2>
<p style="text-align: center;">なんかおもしれええやつ</p>    <?php include '/hdd/aic/edit.php'; ?>
<br>
<p class="unei">まったり彷徨う旅人であり、とにかくふらふら彷徨う。<br>が、それでも運営の力はある。discordの方を多少は知っていて、それでかもしれない。<br>が、BOTも作っているという謎な存在。ローウェンBOTをよろしくお願いします。<br>
<h2 class="title h2" style="text-align: center;">ほかの運営</h2>
<div class="admin-more ginzyou-genryu">
<?php
include('/hdd/aic/admin/list.php');
ob_start();
?>
</div>
</div>

<p style="text-align: center; font-size: 15px;">このページの最終更新日：<?php date_default_timezone_set('asia/tokyo'); clearstatcache(); echo date( "Y/m/d H:i:s", filemtime(__FILE__)); ?></p>
<div class="modals" id="modals">