<?php header('Content-Type: text/css; charaset=utf-8');
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', FALSE );
header('Pragma:no-cache');
$original_css = ':root {
   --main-text: #CDCDCD;
   --corsor-color: rgba(255, 255, 255, .535);
   --background-secondary: #26292B;
   --focus: rgb(100 172 255);
   --background-primary: #252729;
   --border: 2px solid #424343;
   --border-color: #424343;
   --input-background: #59595B;
   --opacity-color: #E5E5E67D;
   --nav-focus: #343435;
   --modal: #222224;
   --site-background: #222224;
   --nav-background: #2324254a;
   --button-background: #515254;
   --accent: #9C6963;
   --shadow: 0 22px 70px 4px rgba(0, 0, 0, 0.56);
}
 
 html {
   background-color: #16181A;
   color: #fff
 }
 
 .navbar-dropdown {
   box-shadow: 0 4px 16px rgba(17, 17, 26, .1), 0 8px 24px rgba(17, 17, 26, .1), 0 16px 56px rgba(17, 17, 26, .1);
   border-left: var(--border);
   border-right: var(--border);
   border-bottom: var(--border);
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
   background-color: #007fd9db;
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
   -moz-text-shadow: 1px 2px 0px rgba(0, 0, 0, 1);
   -webkit-text-shadow: 1px 2px 0px rgba(0, 0, 0, 1);
   -ms-text-shadow: 1px 2px 0px rgba(0, 0, 0, 1);
   text-shadow: 1px 2px 0px rgba(0, 0, 0, 1);
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