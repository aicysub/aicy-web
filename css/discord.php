<?php header('Content-Type: text/css; charaset=utf-8');
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', FALSE );
header('Pragma:no-cache');
header_register_callback(function(){
header('Content-Security-Policy: "style-src \'*\'"');
header('unsafe-inline: "https://cdn.discordapp.com/ https://*.hcaptcha.com https://hcaptcha.com/"');
header('Referrer-Policy: *');
    header_remove('X-Powered-By');
});
$original_css = '
* {
  scrollbar-width: auto;
  scrollbar-color: var(--accent) transparent;
  scrollbar-darkshadow-color: rgb(0 0 0/12%);
  scroll-padding: 1%;
  scrollbar-shadow-color: rgb(0 0 0/12%);
  transition-duration: .3s;
  transition-timing-function: ease;
  transition-property: color, transform, background-color, display, div, position, span, font-size, text-decoration, box-shadow, border-color, filter, border-radius, background-image, transform, margin, margin-top, margin-bottom, margin-right, margin-left, padding-bottom, outline;
}
*::-webkit-scrollbar {
  border-radius: 18px !important;
  z-index: -340 !important;
}

*::-webkit-scrollbar:hover {
  width: 10px !important;
  border-radius: 18px !important;
  height: 10px !important;
}

*::-webkit-scrollbar-track {
  background-color: transparent !important;
}

*::-webkit-scrollbar-thumb {
  background-color: var(--accent) !important;
  border-radius: 18px !important;
  filter: drop-shadow(0 3px 3px rgb(0 0 0/12%), 0 2px 3px -2px rgb(0 0 0/1%)) !important;
}
.theme-dark {
   --text-normal: #CDCDCD;
   --channel-text-area-placeholder: #CDCDCD;
   --background-secondary: #1F2021;
   --focus: rgb(100 172 255);
   --background-primary: #26292B;
   --border: 2px solid #424343;
   --border-color: #424343;
   --channeltextarea-background: #59595B;
   --opacity-color: #E5E5E67D;
   --nav-focus: #343435;
   --modal: #222224;
   --site-background: #222224;
   --nav-background: #A06A547a;
   --button-background: #515254;
   --shadow: rgba(0, 0, 0, 0.56) 0px 1.6px 3.6px 0px, rgba(0, 0, 0, 0.56) 0px 0.3px 0.9px 0px;
   --brand-experiment: #A06A54;
   --accent: #A06A54;
   --button-positive-background: var(--accent);
   --button-positive-background-hover: var(--nav-background);
   --brand-experiment-30a: var(--nav-background);
   --brand-experiment-200: #fff;
   --black-nav-background: #1F20217a
}
.compact-2Nkcau.wrapper-30-Nkg, .cozy-VmLDNB.wrapper-30-Nkg img {
    border-radius: 1em;
}
.theme-dark .categoryFade-3RRG67:hover, .theme-light .categoryFade-3RRG67:hover {
    backdrop-filter: blur(10px);
}
.result-pzZrwj {
    background: var(--background-primary);
    border-radius: 2em;
    box-shadow: var(--shadow);
}
.gif-2kTiNB,.result-pzZrwj {
    border-radius: 10px;
}
.lookOutlined-3yKVGo.colorRed-rQXKgM {
    background: var(--button-outline-danger-border);
    box-shadow: var(--shadow);
}
.scrollableContainer-15eg7h {
background-color: transparent;
overflow: visible;
margin-bottom: 35px;
}
.inner-NQg18Y {
    background: var(--channeltextarea-background);
    padding-left: 20px;
    padding-right: 20px;
}
.inner-NQg18Y,.contentColumnDefault-3eyv5o button[type="button"],.searchBar-jGtisZ,.lookFilled-yCfaCM.colorGreen-3y-Z79,.rem-3kT9wc.botTag-7aX5WZ {
border-radius: 2em;
box-shadow: var(--shadow);
}
[aria-label="ユーザーエリア"] button {
border-radius: 50%;
box-shadow: none;
}
.search-39IXmY {
    margin: 10px;
}
.searchBar-jGtisZ {
    background-color: var(--channeltextarea-background);
    width: 200px;
    box-shadow: var(--shadow);
}
.backdrop-2ByYRN.withLayer-2VVmpp {
    backdrop-filter: blur(12px);
}
.menu-1QACrS {
    box-shadow: var(--shadow);
    background: var(--background-secondary);
    border-radius: 1em;
    padding: 3px;
}
.colorDefault-CDqZdO.focused-3qFvc8,.interactive-1vLZ_I:focus-within, .interactive-1vLZ_I:hover,.selected-3veCBZ,.wrapper-NhbLHG:hover .content-1gYQeQ {
background: var(--brand-experiment);
box-shadow: var(--shadow);
}
.wrapper-NhbLHG:hover .content-1gYQeQ svg,.wrapper-NhbLHG:hover .content-1gYQeQ .channelName-3KPsGw {
color: #fff;
filter: #fff;
}
.interactive-1vLZ_I {
border-radius: 5000px;
}
.labelContainer-2vJzYL {
    border-radius: 1em;
    padding-left: 20px;
    padding-top: 10px;
    padding-right: 20px;
    padding-bottom: 10px;
    margin-top: 5px;
    margin-bottom: 5px;
    font-size: 70%;
}
.separator-1So4YB {
    background: var(--border-color);
    height: 1px;
    display: block;
    border-radius: 8px;
    margin-left: 5px;
    margin-top: 8px;
    margin-bottom: 8px;
    margin-right: 5px;
    border-bottom: none;
}
.container-ZMc96U.themed-Hp1KC_ {
    background: var(--background-secondary);
}
.base-3bcbY3 {
    padding-bottom: 5px;
}
.bar-2eAyLE {
box-shadow: var(--shadow);
background: var(--accent);
backdrop-filter: blur(4px);
border-radius: 5000px;
}
.wrapper-2vIMkT {
    background-color: var(--nav-background);
    border-radius: 5000px;
    box-shadow: var(--shadow);
}
.pointerEvents-9SZWKj {
    fill: var(--accent);
    filter: brightness(1.5);
}
.userPopout-2j1gM4 {
    border-radius: 1em;
    background: var(--black-nav-background);
    backdrop-filter: blur(10px);
    box-shadow: var(--shadow);
}
.bodyInnerWrapper-2bQs1k,.footer-3naVBw {
background-color: transparent;
}
.divider-1wtgZ3 {
background-color: var(--border-color);
}
.role-2TIOKu {
    background: var(--accent);
    border-radius: 5000px;
}
.embed-hKpSrO {
border-radius: 1em;
margin-left: 10px;
margin-right: 10px;
margin-top: 8px;
box-shadow: var(--shadow);
}
.compact-2Nkcau.wrapper-30-Nkg, .cozy-VmLDNB.wrapper-30-Nkg {
    padding-top: 1%;
    padding-bottom: 1%;
    border-radius: 1em;
    margin-left: 10px;
}
.container-2nx-BQ, .input-2XRLou {
    box-shadow: var(--shadow);
    border-radius: 5000px;
}
.newMessagesBar-1hF-9G {
    border-radius: 0 0 1em 1em;
box-shadow: var(--shadow);
    backdrop-filter: blur(5px);
    height: 30px;
    padding-left: 5px;
    padding-left: 5px;
    padding-right: 5px;
}
ul.channelAttachmentArea-HwpkuQ.scrollbarGhost-dCZKgZ.scrollbar-3vVt8d {
    border-radius: 1em;
    background: var(--background-secondary);
    box-shadow: var(--shadow);
}
.contentWrapper-3vHNP2 {
    border-radius: 1em;
    box-shadow: var(--shadow);
    border: var(--border);
}
.emojiItem-277VFM {
    margin: 1px;
    border-radius: 50%;
}
.categoryItemDefaultCategory-3haEDq {
    border-radius: 50%;
}
.navButton-1XuvI- {
border-radius: 5000px;
padding-left: 1em;
padding-right: 1em;
padding-top: 3px;
padding-bottom: 3px;
margin-bottom: 3px;
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