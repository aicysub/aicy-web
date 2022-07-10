<?php
//タイトルを取得したいURL
$url = $_SERVER['HTTP_REFERER'];
function getPageTitle( $url ) {
    $link = file_get_contents($url); //(1)
    $html = str_replace('https://aic-group.sytes.net/', '', $link);
    if ( preg_match( "/<title>(.*?)<\/title>/i", $html, $matches) ) { //(3)
    return $matches[1];
    } else {
        $link = file_get_contents($url);
        $html = str_replace('https://aic-group.sytes.net/', '', $link);
        preg_match( "/<title>(.*?)<\/title>/i", $html, $matches);
        echo $matches[1];
    }
}
echo getPageTitle("/hdd/aic/".getPageTitle($url)."index.php");
?>