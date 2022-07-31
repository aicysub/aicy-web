<?php header('Content-Type: text/css; charaset=utf-8');
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', FALSE );
header('Pragma:no-cache');
header_register_callback(function(){
  header_remove('X-Powered-By');
});
$original_css = '@keyframes scroll {
    0% {
      transform: translateY(0)
    }
  
    100% {
      transform: translateY(0%)
    }
  }
  
  .flex,
  .admin-more {
    display: block !important;
    overflow: hidden;
  }
  
  .name-list {
    width: 100%;
    margin-bottom: 3%;
    padding: 3%;
    font-size: 15px;
  }
  
  .h2 {
    margin-left: 1%;
    margin-right: 1%;
    font-size: 25px;
    width: 98%;
    margin: auto;
  }
  
  .contents a {
    display: inline;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 100%;
  }
  
  .unei {
    font-size: 15px;
    margin-left: 0%;
    margin-right: 0%;
  }
  
  p,
  span,
  i,
  a {
    font-size: 15px;
  }
  
  .box {
    margin-left: 0%;
    margin-right: 0%;
  }
  
  .bread {
    padding: 5%;
  }
  
  .h3 {
    width: 90%;
  }
  
  .event {
    width: 100%;
  }
  
  .description {
    font-size: 15px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    width: 21em;
    padding: 2%;
  }
  
  .name {
    font-size: 1em;
    width: 20em;
  }
  
  .name-list:hover {
    transform: translateY(0px) scale(1);
  }
  
  .link {
    margin-left: 0%;
    margin-right: 0%;
    display: block;
  }
  
  .link-a {
    margin-bottom: 3%;
    font-size: 15px;
  }
  
  .navbar {
    min-height: 7em;
    border-bottom: none;
  }
  
  .navbar-brand .navbar-item,
  .navbar-tabs .navbar-item {
    font-size: 17px;
    border-radius: 8px;
    margin-top: 1.5em;
    margin-bottom: auto;
    top: auto;
  }
  
  .navbar-brand,
  .navbar-tabs {
    min-height: 7em;
    padding-top: 0.5em;
  }
  
  .navbar-brand {
    border-bottom: 3px solid #906862;
  }
  
  .navbar-brand {
    margin-bottom: auto;
    margin-top: auto;
  }
  
  @keyframes spinner {
    to {
      transform: rotate(360deg);
    }
  }
  
  #loading {
    width: 5em;
    height: 5em;
    border-radius: 50%;
    border: 0.25em solid #ccc;
    border-top-color: #333;
    animation: spinner 1.5s linear infinite;
  }
  
  .footers .is-active {
    bottom: -200px !important;
  }
  
  .admin-more-top .name-list {
    margin-top: 15%;
  }
  
  .is-active .navbar-item,
  .is-active .navbar-link {
    padding-top: 0px;
    margin: 1%;
  }
  
  .is-active .navbar-menu,
  .navbar-menu .is-active {
    animation-name: fuwa;
    animation-duration: 3.5s;
    animation-timing-function: ease;
    display: block !important;
  }
  
  .webkit-box {
    display: block;
    max-height: 20em;
    overflow: auto;
    overflow-x: hidden;
    padding-bottom: 3%;
  }
  
  .webkit-box .description {
    width: 22em;
  }
  
  .youtube audio {
    width: 100%;
  }
  
  .webkit-box .name {
    width: 22em;
    padding: 2%;
  }
  
  table {
    display: none;
  }
  
  .mobile-table {
    display: grid;
  }
  
  .mobile-table td,
  .mobile-table th,
  .mobile-table tr {
    width: 100%;
    display: grid;
  }
  
  .bread li a {
    max-width: 7em;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
  }
  
  .navbar-item.is-active .navbar-dropdown,
  .navbar-item.is-hoverable .navbar-dropdown,
  .navbar-item.is-hoverable .navbar-dropdown,
  .navbar-item.is-hoverable .navbar-dropdown * {
    visibility: visible;
  }
  
  .navbar-menu.is-active {
    height: 500px;
    overflow: auto;
  }
  
  .navbar-dropdown a.navbar-item {
    height: auto;
    padding-right: 1em;
    padding-left: 1em;
  }
  
  #pc {
    display: none;
  }
  
  #mobile {
    display: block;
  }
  
  .preference-modal {
    width: 100%;
    margin-top: 10px;
    top: 0 !important;
  }
  
  .preference-img li {
    margin-bottom: 5%;
  }
  
  .preference-img {
    display: block;
    width: 100%;
    margin-left: 5%;
  }
  
  .preference-status {
    right: auto;
    left: 0px;
    top: -1.5%;
  }
  
  #setup-1 {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: scroll;
  }
  
  .preference-end {
    justify-content: space-between;
    position: sticky;
    bottom: 3px;
  }
  
  .preference {
    position: sticky;
    top: 5px;
    z-index: 60;
  }
  
  #saved {
    display: none;
  }
  
  .preference-close {
    top: -4px;
  }
  
  .preference-main {
    overflow: scroll;
  }
  
  #mobile-config {
    display: block;
  }
  
  #link-true {
    margin-left: 0px;
  }
  .input-search {
    display: flex;
    justify-content: end;
    align-items: center;
    margin-top: -25px;
    margin-right: 0px;
  }
  .search {
    margin-left: 10px;
    margin-right: 10px;
    border-radius: 38px;
  }
  .search a{
    font-size: 1em;
}
.search a{
    font-size: 14px;
}
.bread {
    position: unset;
}
.toc-fixed {
display: none !important;
}
.news-messeage {
  width: 100%;
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