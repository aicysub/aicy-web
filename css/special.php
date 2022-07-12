<?php header('Content-Type: text/css; charaset=utf-8');
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', FALSE );
header('Pragma:no-cache');
$original_css = ':root {
    --main-text: #fff;
    --background-secondary: linear-gradient(to right, #fc466b, #3f5efb);
    ;
    --background-primary: linear-gradient(to right, #c94b4b, #4b134f);
    --accent: #bd8981;
    --border: 2px solid var(--accent);
    --border-color: var(--accent);
    --nav-focus: #D4D4D47A;
    --site-background: #2f2f2f;
    --nav-background: rgba(0, 0, 0, 0) linear-gradient(to right, rgba(252, 92, 125, 0.57), rgba(106, 130, 251, 0.59)) repeat scroll 0% 0%;
    --button-background: linear-gradient(to right, #fc466b, #3f5efb);
  }
  
  a {
    color: #FFEB3B;
    font-weight: 900;
  }
  
  .navbar {
    border-bottom: 2px solid var(--accent) !important;
  }
  
  .navbar-link,
  a.navbar-item {
    color: #fff;
  }
  
  .box,
  .name-list {
    background: var(--background-secondary);
  }
  
  .event {
    background: #9d52b3;
  }
  
  .h2 {
    font-family: HeadingFonts;
    width: 50%;
    margin: auto;
    margin-top: 30px;
    padding-bottom: 15px;
    background: var(--background-secondary);
    padding-top: 10px;
    border-radius: 50000px;
    color: #fff;
    box-shadow: var(--shadow);
    padding-top: 15px;
    border-bottom: 0px;
  }
  
  .box .h2 {
    background: var(--accent);
    margin-top: 0;
    margin-left: 0;
    margin-right: 0;
    border-radius: 5000px;
    border-bottom: none;
    width: 100%;  
}
  
  .name-list:hover {
    background-color: initial;
    background-image: url(/images/admins/hover.png), var(--background-secondary);
  }
';
if(!isset($_GET['original'])){
    $css_replaces = [];
    $css_replaces[ '/@charset \"(utf|UTF)-8\";/' ] = '';
    $css_replaces[ '/(\/\*!.*?\*\/|\"(?:(?!(?<!\\\)\").)*\"|\'(?:(?!(?<!\\\)\').)*\')|\/\*.*?\*\//s' ] = '${1}';
    $css_replaces[ '/(\/\*!.*?\*\/|\"(?:(?!(?<!\\\)\").)*\"|\'(?:(?!(?<!\\\)\').)*\')\s*|\s+/s' ] = '${1} ';
    $css_replaces[ '/(\/\*!.*?\*\/|\"(?:(?!(?<!\\\)\").)*\"|\'(?:(?!(?<!\\\)\').)*\')| ([!#$%&,.:;<=>?@^{|}~]) |([!#$&(,.:;<=>?@\[^{|}~]|\A) | ([$%&),;<=>?@\]^{|}~]|\z)/s' ] = '${1}${2}${3}${4}';
    $css_replaces[ '/(\/\*!.*?\*\/|\"(?:(?!(?<!\\\)\").)*\"|\'(?:(?!(?<!\\\)\').)*\'|\([^;{}]+\))| ([+\-\/]) |([+\-\/]) | ([+\/])/s' ] = '${1}${2}${3}${4}';
    $css = preg_replace( array_keys( $css_replaces ), array_values( $css_replaces ), $original_css );
    echo $css;
  
    } else {
  echo $original_css;
    }
?>