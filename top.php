<?php
include('/hdd/aic/head.php');
ob_start();
?>
<meta name="description" content="あいしぃーのサーバー" />
<meta property="og:type" content="HP" />
<meta property="og:title" content="トップページ" />
<meta property="og:description" content="あいしぃーのサーバーのご紹介" />
<meta property="og:site_name" content="あいしぃーのサーバー" />
<meta property="og:image" content="https://aic-group.sytes.net/favicon.ico" />
<title>トップページ - あいしぃーのサーバー</title>
<style>
  #top {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
    margin-right: 20px;
  }
  #top i {
    color: var(--main-text);
  }
  </style>
<ol itemscope class="bread none" itemtype="https://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="/">
        <span itemprop="name">ホーム</span>
    </a>
    <meta itemprop="position" content="1" />
  </li>
</ol>
<h2 class="title h2" style="text-align: center;">お知らせ</h2>
<?php include '/hdd/aic/edit.php'; ?>
<div class="box">
<?php require("/hdd/aic/news/list.php"); ?>
</div>
<br>
<h2 class="h2 title">あいしぃーのさーばー</h2>
<div class="box none">
  <a href="https://discord.gg/H5YR5tkNc9" style="display:block; cursor:pointer;" target="_blank">
<iframe style="border-radius:20px;cursor:pointer;" src="https://discord.com/widget?id=949560203374915605&theme=dark" width="100%" height="450px" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
</a>
</div>
<?php
include('/hdd/aic/unei.php');
ob_start();
?>
    <br>
<br>
</div>
</div>
</body>
</html>