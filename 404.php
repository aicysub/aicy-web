<?php
include_once('/hdd/aic/head.html');
ob_start();
?>
<div class="contents preview-back">
<title>見つかりませんでした - あいしぃーのサーバー</title>
    <br>
    <ol itemscope class="bread none preview" itemtype="https://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="/">
        <span itemprop="name">ホーム</span>
    </a>
    <meta itemprop="position" content="1" />
  </li>
  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="<?php echo $_SERVER['REQUEST_URI']; ?>">
        <span itemprop="name">お探しのページが見つかりませんでした。</span>
    </a>
    <meta itemprop="position" content="2" />
  </li>
</ol><div class="main preview-back">
    <h2 class="title h2" style="text-align: center;">お探しのページが見つかりませんでした。</h2>
    <p style="text-align: center;">あなたが指定した、ページまたはファイルが見つかりません。</p>
    <?php include '/hdd/aic/edit.php'; ?>
    <br>
    <h2 class="title h2" style="text-align: center;">もしかして...</h2>
<div class="admin-more">
<?php
include('/hdd/aic/admin/list.php');
ob_start();
echo '</div></div></div>'
?>