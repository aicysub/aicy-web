<?php
include("/hdd/aic/head.html");
?>
<title>ブログの画像一覧 - あいしぃーのさーばー</title>
<div class="contents"><div class="main">
    <h2 class="title h2">一覧</h2>
<?php
function getFileList($dir) {
  $files = scandir($dir);
  $files = array_filter($files, function ($file) { // 注(1)
      return !in_array($file, array('.', '..'));
  });
  $list = array();
  foreach ($files as $file) {
      $fullpath = rtrim($dir, '/') . '/' . $file; // 注(2)
      if (is_file($fullpath)) {
          $list[] = $fullpath;
      }
      if (is_dir($fullpath)) {
          $list = array_merge($list, getFileList($fullpath));
      }
  }
  return $list;
}
$jpg = getFileList('./');


echo '<div class="box">';
foreach($jpg as $jpgv) {
  if (preg_match("/index.php/", $jpgv)) {
    $jpgv = '/favicon.ico';
  }
  if (preg_match("/wpcf7_uploads/", $jpgv)) {
    $jpgv = '/favicon.ico';
  }
  echo "<div class=\"none\"  style=\"text-align:center; margin: auto;\"><a href = \"" .$jpgv."\" target = \"_blank\">";
  echo "<img class=\"none\" src= \"" .$jpgv."\" style=\"margin: auto;\" loading=\"lazy\" width=\"400px\"></a>";
echo "<br><br>";
echo "<a href = \"" .$jpgv."?download\" target = \"_blank\" >ダウンロード <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i></a></div><br>";
}
?>
</div>