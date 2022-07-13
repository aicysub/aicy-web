<?php require("/hdd/aic/head.php"); ?>
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
    <a itemprop="item" href="/tools/">
        <span itemprop="name">ツール</span>
    </a>
    <meta itemprop="position" content="2" />
  </li>
  <li itemprop="itemListElement" itemscope
  itemtype="https://schema.org/ListItem">
<a itemprop="item" href="/tools/amazon/">
    <span itemprop="name">Amazon検索ツール</span>
</a>
<meta itemprop="position" content="3" />
</li>
</ol>
<title>Amazon検索ツール - あいしぃーのさーばー</title>
<h2 class="h2 title">Amazon検索ツール</h2>
<?php require("/hdd/aic/edit.php"); ?>
<div class="box" style="text-align:center;">
<p class="none" style="text-align:center;font-size:18px;">Amazonで検索したい言葉を入力するだけで、国内倉庫発行のみの商品を検索することができます！<br><a onclick="amazon_modal();">国内倉庫発行とは？</a></p>
<br>
<input class="download" name="amazon-search" required> <input class="download" type="submit" value="検索" onclick="amazon_search();"><br>
<p id="moji" style="display:none;color:#f44336;"><br>文字を入力してください！</p>
<br><p style="font-size:15px">（このツールにはAmazonアソシエイトリンクが使用されています。）</p>
</div>