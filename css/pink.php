<?php header('Content-Type: text/css; charaset=utf-8');
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', FALSE );
header('Pragma:no-cache');
echo ':root {';
if (isset($_COOKIE['dark'])){
 echo '--accent: #AD1457;';
} else {
 echo '--accent: #E91E63;';
}
echo '}';
?>