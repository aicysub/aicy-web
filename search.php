<?php
require("/hdd/aic/head.php");
require("/hdd/db.php");
$word = $_GET["q"];
if (empty($_GET["q"])){
$word_view = "このサイトの全ページ一覧";
}else {
$word_view = "「".$_GET["q"]."」の検索結果";
}

    $options = [];
    $pdo = new PDO($dsn, $username, $password, $options);
          $stmt = $pdo->query(" SELECT * FROM main WHERE title LIKE '%" . $word . "%'");
          $counter = 0; 
?>
<br>
<title><?php echo $word_view; ?> - あいしぃーのさーばー</title>
<h2 class="h2 title fixed"><?php echo $word_view; ?></h2>
<br>
            <?php foreach ($stmt as $row): ?>
                                                    <div class="search">
                 <?php $counter++; ?>                                  
                <a href="<?php echo $row[2]; ?>"><?php echo $row[0]?></a><hr><p style="font-size: 0.8em;"><?php echo $row[1]?></p>
            </div><br><br>
            <?php endforeach; ?>
            <?php
  if (preg_match("/^0$/",$counter)) {
           echo '<div class="box">見つかりませんでした…</div>';
            }
            ?>
           <br> <p style="text-align:right;margin-right: 22%;font-size: 1.2em;"><?php echo $counter ?> 件見つかりました。</p><br><br>
           <script>
$(function(){
  $('[name=search]').val(('<?php echo $_GET["q"];?>'));
});
</script>