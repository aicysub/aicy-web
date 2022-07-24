<?php header('Content-Type: text/css; charaset=utf-8');
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', FALSE );
header('Pragma:no-cache');
$copyright = '/* Copyright (c) 2022 AIC_Group. */
/* License -> https://aic-group.sytes.net/license/ */

';
echo $copyright;
echo ':root {';
if (isset($_COOKIE['dark'])){
 echo '--accent: #1565C0;';
} else {
 echo ' --accent: #2196F3;';
}
echo '}';
?>