<?php
  if (empty($_GET["ip"])){
echo "IPアドレスが入力されていません。";
  } else {
$domain = $_GET["ip"];
$ary = array();
$comand = "whois ".$domain."";
exec($comand, $ary);
foreach($ary as $whois){
echo $whois . "<br>";
}
  }
?>