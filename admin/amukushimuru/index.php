<?php
include_once('/hdd/aic/head.php');
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
        <span itemprop="name">アムクシル / amukusiru</span>
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
  #amu {
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
<meta property="og:title" content="アムクシル" />
<meta property="og:description" content="アムクシル、性別・年齢不詳" />
<meta property="og:site_name" content="あいしぃーのサーバー" />
<meta property="og:image" content="https://aic-group.sytes.net/images/admins/amukushimuru.png" />
<title>アムクシル - あいしぃーのサーバー</title>
<br>
<div style="text-align: center;">
<img src="/images/admins/full/amukushimuru.png" style="width: 20%; border: 3px solid #906862; border-radius: 50%; box-shadow: 0 3px 3px rgb(0 0 0/12%),0 2px 3px -2px rgb(0 0 0/1%);">
</div>
<h2 class="title h2" style="text-align: center;"><span class="nomal">アムクシル / amukusiru</span><span class="hover">アムクシムル / amukushimuru</span></h2>
<p style="text-align: center;">性別・年齢不詳</p>    <?php include '/hdd/aic/edit.php'; ?>
<br>
<p class="unei">こんにちは！<span class="nomal">アムクシル</span><span class="hover">アムクシムル</span>と言います。<br>"アムさん"など好きな呼び方で読んで下さい～<br>音楽聴いたり、読書が結構好きです(ラノベじゃないよ<br>ネットではdiscordサーバーやマイクラ、まだ初心者ですがwebサーバーの管理をしたりしています。<br>よろしくお願いします～<br>
<h2 class="title h2" style="text-align: center;">リンク</h2>
<?php
include('/hdd/aic/admin/amukushimuru/link.php');
ob_start();
?>
<h2 class="title h2" style="text-align: center;">ほかの運営</h2>
    <div class="admin-more amukushimuru">
    <?php
include('/hdd/aic/admin/list.php');
ob_start();
?>
</div>
</div>
<br>
<p style="text-align: center; font-size: 15px;">このページの最終更新日：<?php date_default_timezone_set('asia/tokyo'); clearstatcache(); echo date( "Y/m/d H:i:s", filemtime(__FILE__)); ?></p>
<div class="modals" id="modals">