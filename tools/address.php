<?php
require_once ("/hdd/aic/head.php");
if (empty($_GET["ip"])){
   $ip = $_SERVER["REMOTE_ADDR"];
   $oldip = $_SERVER["REMOTE_ADDR"];
  } else {
   $ip = $_GET["ip"];
   $oldip = $_GET["ip"];
  }
require_once '/hdd/vendor/autoload.php';
use GeoIp2\Database\Reader;


$ipaddress = $ip;
$country = new Reader('/hdd/vendor/GeoLite2-Country.mmdb');
$city = new Reader('/hdd/vendor/GeoLite2-City.mmdb');
$country = $country->country($ipaddress);
$city = $city->city($ipaddress);
?>
<br>
<div class="box">
〒 <?php echo $city->postal->code;?> <?php echo $city->mostSpecificSubdivision->names['ja'];?><?php echo $city->city->names['ja'];?>

</div>
<p class="center">GeoLite2ライブラリを使用しています。<br>
This product includes GeoLite2 data created by MaxMind, available from
<a href="https://www.maxmind.com" target="_blank">https://www.maxmind.com</a>.</p>