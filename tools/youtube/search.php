<?php
define('YOUTUBE_API_KEY', 'AIzaSyCMg2VmAOCtbxwgNGSgPY_FOoaSNklp-Bg'); // APIキー (Google Developer Consoleから取得したものをセットしてください)

function json_get($url, $query = array(), $assoc = false) { // JSONデータ取得用
    if ($query) $url .= ('?' . http_build_query($query, '', '&', PHP_QUERY_RFC3986));

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url); // URL
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // リクエスト先が https の場合、証明書検証をしない (環境によって動作しない場合があるため)
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // curl_exec() 経由で応答データを直接取得できるようにする
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10); // 接続タイムアウトの秒数
    $responseString = curl_exec($curl); // 応答データ取得
    curl_close($curl);
    return ($responseString !== false) ? json_decode($responseString, $assoc) : false;
}
function h($value, $encoding = 'UTF-8') { return htmlspecialchars($value, ENT_QUOTES, $encoding); } // HTMlエスケープ出力用
function eh($value, $encoding = 'UTF-8') { echo h($value, $encoding); } // 同上
if(!isset($_GET['q'])){
    $key = $keys;
}else{
    $key = $_GET['q'];
}

$response = json_get('https://www.googleapis.com/youtube/v3/search', array(
    'key' => YOUTUBE_API_KEY,
    'channelId' => '', // チャンネルID (チャンネルで絞り込む場合)
    'q' => $key, // 検索キーワード (キーワードで絞り込む場合)
    "part" => "id,snippet",
    "order" => "viewCount",
    'maxResults' => 8, // 検索数 (5～50)
    'type' => 'video', // 結果の種類 (channel,playlist,video)
    "safeSearch" => "none",
    'regionCode' => 'JP',
), true);
if ($response === false || isset($response['error'])) {
    header("Status: 500 Internal Server Error"); }
elseif (count($response['items']) == 0) { 
    header("Status: 404 Not Found");
}
include('/hdd/aic/head.html');
?>
<body>
    <div class="contents"><div class="main">
    <title><?php echo $key?> の検索結果 - あいしぃーのさーばー</title>
        <h2 class="title h2"><?php echo $key?> の検索結果</h2>
        <?php include '/hdd/aic/edit.php'; ?>
        <form action="key" style="text-align: center;" method="post">
    <input type="text" class="download" name="keyword" value="<?php echo $key?>" required>
    <input type="submit" class="download" value="検索" required><br><br>
    <div class="box">
    <?php if ($response === false || isset($response['error'])) { ?>
        動画情報が取得できませんでした
    <?php } elseif (count($response['items']) == 0) { ?>
        <?php echo $key?> の検索結果が0件でした。
    <?php } else { ?>
        <?php foreach ($response['items'] as $item) {
            $img = $item['snippet']['thumbnails']['high']; // 画像情報 (default, medium, highの順で画像が大きくなります)
            $id = $item['id']['videoId'];
            $view_count = number_format($item['statistics']['viewCount']);
            
            $t = new DateTime($item['snippet']['publishedAt']);
            $t->setTimeZone(new DateTimeZone('Asia/Tokyo'));
            $publishedAt = $t->format('Y/m/d H時i分'); // 投稿日時 (日本時間)
            $title = htmlspecialchars_decode($item['snippet']['title']);
            ?>
            <!-- <?php echo json_encode($item, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?> -->
            <iframe width="100%" height="500" load="lazy" src="https://www.youtube.com/embed/<?php eh($id) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
            <a class="item-title" style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden; width: 100%;" href="https://youtu.be/<?php eh($id) ?>"><?php eh($title) ?></a><br>
            <span class="item-publishedAt"><?php eh($publishedAt) ?> 公開</span><br>
            <a class="download none" type="submit" href="/youtube/video?v=<?php eh($id) ?>">動画としてダウンロード</a> <a class="download none" type="submit" href="/youtube/audio?v=<?php eh($id) ?>">音声としてダウンロード</a>
            <hr>
        <?php } ?>
    <?php } ?>
</body>
</html>
<div class="modals" id="modals">