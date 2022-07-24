<!DOCTYPE html>
<html lang="ja-JP">
<head>
<?php
include_once('/hdd/aic/head.php');
?>
<meta property="og:type" content="HP" />
<meta property="og:title" content="運営紹介" />
<meta property="og:description" content="あいしぃーのサーバー運営を紹介します。" />
<meta property="og:site_name" content="あいしぃーのサーバー" />
<meta property="og:image" content="https://aic-group.sytes.net/images/aic-wordmark.png" />
</head>
<div class="admin-background">
<h2 class="title h2 fixed" style="text-align: center;">鯖主紹介</h2>
<p style="text-align: center;">あいしぃーのサーバーの鯖主をご紹介します。</p>
<br>
<div id="ads"></div>
<div class="admin-more flex admin-more-top" style="overflow-x: visible; overflow-y: visible;">
<?php
require('/hdd/aic/owner/aicy/aicy.php');
ob_start();
?>
</div>
<h2 class="title h2 fixed" style="text-align: center;">運営紹介</h2>
<p style="text-align: center;">あいしぃーのサーバーの運営をご紹介します。</p>
<div class="flex admin-more" style="overflow-x: visible; overflow-y: visible;">
<?php
require('/hdd/aic/admin/amukushimuru/amukushimuru.php');
?>
<?php
require('/hdd/aic/admin/edamame/edamame.php');
?>
<?php
require('/hdd/aic/admin/gijutsu/gijutsu.php');
?>
</div>
<div class="flex admin-more" style="overflow-x: visible; overflow-y: visible;">
<?php
require('/hdd/aic/admin/ginzyou-genryu/ginzyou-genryu.php');
?>
<?php
require('/hdd/aic/admin/mahuyu/mahuyu.php');
?>
<?php
require('/hdd/aic/admin/chasyumen/chasyumen.php');
?>
</div>
<div class="flex admin-more" style="overflow-x: visible; overflow-y: visible;">
<?php
require('/hdd/aic/admin/nemoyans/nemoyans.php');
?>
<?php
require('/hdd/aic/admin/papurusuta/papurusuta.php');
?>
<?php
require('/hdd/aic/admin/ryouma/ryouma.php');
?>
</div>
<div class="flex admin-more" style="overflow-x: visible; overflow-y: visible;">
<?php
require('/hdd/aic/admin/ropeta/ropeta.php');
?>
</div>