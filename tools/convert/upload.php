<?php 
date_default_timezone_set('asia/tokyo'); clearstatcache(); 
$updir = "/hdd/aic/tools/files/";
$tmp_file = @$_FILES['convert_file']['tmp_name'];
@list($file_name,$file_type) = explode(".",@$_FILES['convert_file']['name']);
$copy_file = date("Ymd-His") . ".$file_type" ;
$str = ''.$_FILES['convert_file']['name'].'.'.$file_type.'';
$str = str_replace('.'.$file_type.'', '', $str);
if (is_uploaded_file($_FILES["convert_file"]["tmp_name"])) {
if (move_uploaded_file($tmp_file,"$updir/$copy_file")) {
header("Location: /tools/convert/".$file_type."-to-mp3?i=".date('Ymd-His')."&name=".$str."");
} else {
header("Location: /tools/convert/errror");
exit;
}
} else {
header("Location: /tools/convert/errror");
exit;
}
?>