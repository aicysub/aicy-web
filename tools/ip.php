<?php
require_once('/hdd/aic/head.html');
$ip = $_SERVER["REMOTE_ADDR"];
echo '
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
<a itemprop="item" href="/tools/ip/">
    <span itemprop="name">IPアドレスチェッカー</span>
</a>
<meta itemprop="position" content="3" />
</li>
</ol>
<h2 class="title h2">IPアドレスチェッカー</h2>';
    include '/hdd/aic/edit.php';
    echo '<div class="box">';
echo "<title>IPアドレスチェッカー - あいしぃーのさーばー</title>";
?>
<p style="text-align: center;">IPアドレス： <?php echo $ip; ?><br>
ホスト名： <?php echo gethostbyaddr($ip); ?><br>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/Windows NT 10.0/', $user_agent)) {
    $os = 'Windows 10';
} elseif (preg_match('/Windows NT 6.3/', $user_agent)) {
    $os = 'Windows 8.1 / Windows Server 2012 R2';
} elseif (preg_match('/Windows NT 6.2/', $user_agent)) {
    $os = 'Windows 8 / Windows Server 2012';
} elseif (preg_match('/Windows NT 6.1/', $user_agent)) {
    $os = 'Windows 7 / Windows Server 2008 R2';
} elseif (preg_match('/Windows NT 6.0/', $user_agent)) {
    $os = 'Windows Vista / Windows Server 2008';
} elseif (preg_match('/Windows NT 5.2/', $user_agent)) {
    $os = 'Windows XP x64 Edition / Windows Server 2003';
} elseif (preg_match('/Windows NT 5.1/', $user_agent)) {
    $os = 'Windows XP';
} elseif (preg_match('/Windows NT 5.0/', $user_agent)) {
    $os = 'Windows 2000';
} elseif (preg_match('/Windows NT 4.0/', $user_agent)) {
    $os = 'Microsoft Windows NT 4.0'; 
} elseif (preg_match('/Mac OS X ([0-9\._]+)/', $user_agent, $matches)) {
    $os = 'macOS ' . str_replace('_', '.', $matches[1]);
} elseif (preg_match('/OS ([a-z0-9_]+)/', $user_agent, $matches)) {
    $os = 'iOS ' . str_replace('_', '.', $matches[1]);
} elseif (preg_match('/Android ([a-z0-9\.]+)/', $user_agent, $matches)) {
    $os = 'Android ' . $matches[1];
} elseif (preg_match('/Linux ([a-z0-9_]+)/', $user_agent, $matches)) {
    $os = 'Linux ' . $matches[1];
} else {
    $os = '不明なOS、以下にユーザーエージェントを表示します。<br>ユーザーエージェント：'.$user_agent.')';
}

echo "OS： ".$os."</p>";
?>
</div><br>
<h2 class="h2 title">Whois検索</h2>
<br>
<div class="box" style="text-align:center;">
<br>
<input name="whois-input" type="text" class="download" placeholder="IPアドレスを入力…" value="<?php echo $ip;?>"/>
<a class="download" type="submit" style="margin-top:30px;margin-bottom:30px;" onclick="whois();">情報を取得する</a><br><br>
<p id="whois-messeage">IPアドレス、ドメインから検索可能です。</p><br>
<p class="whoisarea" id="whoisarea" style="display:none;">
</p>
</div>
<br>
<br>