<!DOCTYPE html>
<html lang="ja-JP">
<?php
  include_once('/hdd/aic/head.php');
  ?>
<div class="webkit-box">
<?php
$dir = '/hdd/aic';
include("".$dir."/admin/amukushimuru/amukushimuru.php");
include("".$dir."/admin/edamame/edamame.php");
include("".$dir."/admin/gijutsu/gijutsu.php");
include("".$dir."/admin/ginzyou-genryu/ginzyou-genryu.php");
include("".$dir."/admin/kumi/kumi.php");
include("".$dir."/admin/chasyumen/chasyumen.php");
include("".$dir."/admin/nemoyans/nemoyans.php");
include("".$dir."/admin/papurusuta/papurusuta.php");
include("".$dir."/admin/ryouma/ryouma.php");
echo '</div>';
?>