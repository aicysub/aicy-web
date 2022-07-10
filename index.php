<?php
$page = 'top.php';
$link = $_GET['p'];
if(!isset($_GET['p'])){
    $page = 'top.php';
}else{
    $link = $_GET['p'];
    $page = $_GET['p'];
}
if (preg_match("/papu/", $link)) {
$page = "admin/papurusuta/index.php";
}
if (preg_match("/rope/", $link)) {
    $page = "admin/old/ropeta/index.php";
    }else{
      $page = 'top.php';
   }
if (preg_match("/amu/", $link)) {
   $page = "admin/amukushimuru/index.php";
}
if (preg_match("/kumi/", $link)) {
    $page = "admin/kumi/index.php";
 }
 if (preg_match("/eda/", $link)) {
    $page = "admin/edamame/index.php";
 }
 if (preg_match("/cha/", $link)) {
    $page = "admin/chasyumen/index.php";
 }
 if (preg_match("/nemo/", $link)) {
    $page = "admin/old/nemoyans/index.php";
 }
 if (preg_match("/ma/", $link)) {
    $page = "admin/machatofu/index.php";
 }
 if (preg_match("/ry/", $link)) {
    $page = "admin/ryouma/index.php";
 }
 if (preg_match("/gi/", $link)) {
    $page = "admin/gijutsu/index.php";
 }
 if (preg_match("/gaki/", $link)) {
    $page = "admin/gijutsu/index.php";
 }
 if (preg_match("/.htaccess/", $link)) {
   header("Status: HTTP/1.1 503 Service Unavailable");
}
if (preg_match("/ara/", $link)) {
   $page = "admin/ginzyou-genryu/index.php";
}

@include('/hdd/aic/'.$page.'');
ob_start();
?>
