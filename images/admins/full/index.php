<?php
include("/hdd/aic/head.html");
?>
<title>/admins/full/ - あいしぃーのさーばー</title>
<div class="contents"><div class="main">
    <h2 class="title h2">一覧</h2>
<?php
//ディレクトリ名
$jpg = glob('/hdd/aic/images/admins/full/*jpg');

foreach($jpg as $jpgv) {
  echo "<div class=\"none\"  style=\"text-align:cente; margin: auto;\"><a href = \"" .$jpgv."\" target = \"_blank\">";
  echo "<img class=\"none\" src= \"" .$jpgv."\" style=\"margin: auto;\" loading=\"lazy\" width=\"400px\"></a>";
echo "<br><br>";
echo "<a href = \"" .$jpgv."?download\" target = \"_blank\" >ダウンロード <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i></a></div><br>";
}
$png = glob('/hdd/aic/images/admins/full/*png');
foreach($png as $pngv) {
  echo "<div class=\"none\" style=\"text-align:center;margin: auto;\"><a href = \"" .$pngv."\" target = \"_blank\">";
  echo "<img class=\"none\" src= \"" .$pngv."\" style=\"margin: auto;\" loading=\"lazy\" width=\"400px\"></a>";
echo "<br><br>";
echo "<a href = \"" .$pngv."?download\" target = \"_blank\" >ダウンロード <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i></a></div><br>";
}
$svg = glob('/hdd/aic/images/admins/full/*svg');
foreach($svg as $svgv) {
  echo "<div class=\"none\" style=\"text-align:center;margin: auto;\"><a href = \"" .$svgv."\" target = \"_blank\">";
  echo "<img class=\"none\" src= \"" .$svgv."\" style=\"margin: auto;\" loading=\"lazy\" width=\"400px\"></a>";
echo "<br><br>";
echo "<a href = \"" .$svgv."?download\" target = \"_blank\" >ダウンロード <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i></a></div><br>";
}
$ico = glob('/hdd/aic/images/admins/full/*ico');
foreach($ico as $icov) {
  echo "<div class=\"none\" style=\"text-align:center;margin: auto;\"><a href = \"" .$icov."\" target = \"_blank\">";
  echo "<img class=\"none\" src= \"" .$icov."\" style=\"margin: auto;\" loading=\"lazy\" width=\"400px\"></a>";
echo "<br><br>";
echo "<a href = \"" .$icov."?download\" target = \"_blank\" >ダウンロード <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i></a></div><br>";
}
$gif = glob('/hdd/aic/images/admins/full/*gif');
foreach($gif as $gifv) {
  echo "<div class=\"none\" style=\"text-align:center;margin: auto;\"><a href = \"" .$gifv."\" target = \"_blank\">";
  echo "<img class=\"none\" src= \"" .$gifv."\" style=\"margin: auto;\" loading=\"lazy\" width=\"400px\"></a>";
echo "<br><br>";
echo "<a href = \"" .$gifv."?download\" target = \"_blank\" >ダウンロード <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i></a></div><br>";
}
?>
</div>