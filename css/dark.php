<?php header('Content-Type: text/css; charaset=utf-8');
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', FALSE );
header('Pragma:no-cache');
header_register_callback(function(){
  header_remove('X-Powered-By');
});
$original_css = ':root {
   --main-text: #CDCDCD;
   --background-secondary: #26292B;
   --focus: rgb(100 172 255);
   --background-primary: #1F2021;
   --border: 2px solid #424343;
   --border-color: #424343;
   --input-background: #59595B;
   --opacity-color: #E5E5E67D;
   --nav-focus: #343435;
   --modal: #222224;
   --site-background: #222224;
   --button-background: #515254;
   --shadow: rgba(0, 0, 0, 0.56) 0px 1.6px 3.6px 0px, rgba(0, 0, 0, 0.56) 0px 0.3px 0.9px 0px;
}
 
 html {
   background-color: #16181A;
   color: #fff
 }
 
 .navbar-item,
 .navbar-link {
   color: var(--main-text)
 }
 
 a.navbar-item:hover,
 .navbar-item.has-dropdown.is-active .navbar-link,
 .navbar-item.has-dropdown:focus .navbar-link,
 .navbar-item.has-dropdown:hover .navbar-link,
 .navbar-dropdown a.navbar-item:focus,
 .navbar-dropdown a.navbar-item:hover,
 .navbar-link.is-active,
 .navbar-link:focus,
 .navbar-link:focus-within,
 .navbar-link:hover,
 a.navbar-item.is-active,
 a.navbar-item:focus,
 a.navbar-item:focus-within,
 a.navbar-item:hover {
  background-color: var(--accent);
   color: #fff
 }
 
 a.navbar-item:hover i,
 .navbar-item.has-dropdown.is-active .navbar-link,
 .navbar-item.has-dropdown:focus .navbar-link,
 .navbar-item.has-dropdown:hover .navbar-link i,
 .navbar-link.is-active,
 .navbar-link:focus,
 .navbar-link:focus-within,
 .navbar-link:hover,
 a.navbar-item.is-active,
 a.navbar-item:focus,
 a.navbar-item:focus-within,
 a.navbar-item:hover i {
   color: #fff
 }
 
 a.navbar-item:hover .navbar-link:not(.is-arrowless)::after {
   border-color: #fff
 }
 
 
 button.is-primary.is-hovered,
 .button.is-primary:hover {
   color: var(--main-text)
 }
 
 .h3 {
   background: #181A1D
 }
 
 .name {
   color: var(--main-text)
 }
 
 .color {
   display: block
 }
 
 .white {
   display: none
 }
 
 code {
   background-color: var(--background-secondary);
   box-shadow: var(--shadow)
 }
 
 .link-a {
   background: #0f59a8;
   border: 3px solid #fff;
   color: #fff;
   margin-right: 3%
 }
 
 .link a {
   color: #fff;
   margin-right: 3%
 }
 
 a.link-a:hover {
   background: #0095ff;
   border: 3px solid #fff;
   transform: translateY(-7px) rotate(5deg)
 }
 
 a:hover {
   color: #906862
 }
 
 .download {
   background: #26292c;
   color: #fff
 }
 
 .download[type="submit"]:hover {
   background: #26292c;
   cursor: pointer;
   color: #fff;
   box-shadow: var(--shadow)
 }
 
 .yt-log {
   background: #26292c
 }
 
 #loading {
   border: 1em solid #d6d6d7;
   border-top-color: #906862;
   background: #26292c6b;
   box-shadow: var(--shadow)
 }
 
 #loadings {
   border: 1em solid #d6d6d7;
   border-top-color: #906862;
   background: #26292c6b
 }
 
 .link-a {
   border: 3px solid #585167
 }
 
 .h2 {
   text-shadow: 1px 1px 0 #906862, -1px -1px 0 #906862, -1px 1px 0 #906862, 1px -1px 0 #906862, 0 1px 0 #906862, 0-1px 0 #906862, -1px 0 0 #906862, 1px 0 0 #906862
 }
 
 .box .h2 {
   text-shadow: 1px 1px 0 var(--background-primary),-1px -1px 0 var(--background-primary),-1px 1px 0 var(--background-primary),1px -1px 0 var(--background-primary),0 1px 0 var(--background-primary),0-1px 0 var(--background-primary),-1px 0 0 var(--background-primary),1px 0 0 var(--background-primary);
 }
 .h2 p {
   color: #F1F1F1;
 }
 
 .fa-solid,
 .fas,
 .fa-brands,
 .fab {
  text-shadow: rgba(0, 0, 0, 0.25) 2px 4px 0px;
 }
 
 @media screen and (max-width:480px) {
   .navbar-menu {
     background-color: #181C2791;
   }
 }
 
 #white-change {
   display: none;
 }
 
 #dark-change {
   display: block;
 }
 
 #white-change-pc {
   display: none;
 }
 
 #dark-change-pc {
   display: inline-block;
 }
 
 .preference-modal {
   box-shadow: rgb(0, 0, 0) 0px 22px 70px 4px;
 }
 .card-tools svg {
  filter: drop-shadow(rgba(0, 0, 0, 0.25) 2px 4px 0px);
}
';
if(!isset($_GET['original'])){
  $copyright = '/* Copyright (c) 2022 AIC_Group. */

  ';
  echo $copyright; 
  $css_replaces = [];
   $css_replaces[ '/@charset \"(utf|UTF)-8\";/' ] = '';
   $css_replaces[ '/(\/\*!.*?\*\/|\"(?:(?!(?<!\\\)\").)*\"|\'(?:(?!(?<!\\\)\').)*\')|\/\*.*?\*\//s' ] = '${1}';
   $css_replaces[ '/(\/\*!.*?\*\/|\"(?:(?!(?<!\\\)\").)*\"|\'(?:(?!(?<!\\\)\').)*\')\s*|\s+/s' ] = '${1} ';
   $css_replaces[ '/(\/\*!.*?\*\/|\"(?:(?!(?<!\\\)\").)*\"|\'(?:(?!(?<!\\\)\').)*\')| ([!#$%&,.:;<=>?@^{|}~]) |([!#$&(,.:;<=>?@\[^{|}~]|\A) | ([$%&),;<=>?@\]^{|}~]|\z)/s' ] = '${1}${2}${3}${4}';
   $css_replaces[ '/(\/\*!.*?\*\/|\"(?:(?!(?<!\\\)\").)*\"|\'(?:(?!(?<!\\\)\').)*\'|\([^;{}]+\))| ([+\-\/]) |([+\-\/]) | ([+\/])/s' ] = '${1}${2}${3}${4}';
   $css = preg_replace( array_keys( $css_replaces ), array_values( $css_replaces ), $original_css );
   echo $css;
 
   } else {
    $copyright = '/* Copyright (c) 2022 AIC_Group. */
    /* License -> https://aic-group.sytes.net/license/ */
    
    ';
    echo $copyright;
 echo $original_css;
   }
?>