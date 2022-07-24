<?php 
// Copyright (c) 2022 AIC-Group. All rights reserved.
// このファイルはGPLライセンスの対象ではありません。
// Sorry, the GPL does not apply.
header("Content-Type: text/css; charaset=utf-8");
header( "Cache-Control: no-store, no-cache, must-revalidate" );
header( "Cache-Control: post-check=0, pre-check=0", FALSE );
header("Pragma:no-cache");
$original_css = '
.is-style-good-box::before,
.is-style-bad-box::before,
.is-style-profile-box::before,
.is-style-comment-box::before,
.is-style-ok-box::before,
.comment-box::before,
.ok-box::before,
.blank-box.bb-ok .fa::before,
.blank-box.bb-point .fa::before,
.fab-ok::before,
.fab-lightbulb::before,
.fab-clock::before,
.fab-check-circle-o::before,
.list-check-circle-o li::before,
.fab-check-square-o::before,
.list-check-square-o li::before,
.fab-arrow-circle-o-right::before,
.list-arrow-circle-o-right li::before,
.fab-play-circle-o::before,
.list-play-circle-o li::before,
.fab-hand-o-right::before,
.list-hand-o-right li::before,
.fab-star-o::before,
.list-star-o li::before,
.fab-heart-o::before,
.list-heart-o li::before,
.fab-caret-square-o-right::before,
.list-caret-square-o-right li::before,
.fab-square-o::before,
.list-square-o li::before,
.fab-circle-o::before,
.list-circle-o li::before,
.fab-dot-circle-o::before,
.list-dot-circle-o li::before,
.fab-plus-square-o::before,
.list-plus-square-o li::before,
.fab-minus-square-o::before,
.list-minus-square-o li::before,
.fab-times-circle-o::before,
.list-times-circle-o li::before,
.fab-window-close-o::before,
.list-window-close-o li::before,
.search-form div.sbtn::after
 {
  font-family: "Font Awesome 5 Free";
  font-weight: 400;
 }

.is-style-comment-box::before,
.comment-box::before {
  content: "\f075";
 }

.is-style-ok-box::before,
.ok-box::before,
.fab-ok::before,
.bb-ok .bb-label .fa::before {
  content: "\f111";
 }

.fab-check-circle-o::before,
.list-check-circle-o li::before {
  content: "\f058";
 }

.fab-check-square-o::before,
.list-check-square-o li::before {
  content: "\f14a";
 }

.fab-arrow-circle-o-right::before,
.list-arrow-circle-o-right li::before {
  content: "\f35a";
 }

.fab-play-circle-o::before,
.list-play-circle-o li::before {
  content: "\f144";
 }

.fab-star-o::before,
.list-star-o li::before {
  content: "\f005";
 }

.fab-heart-o::before,
.list-heart-o li::before {
  content: "\f004";
 }

.fab-square-o::before,
.list-square-o li::before {
  content: "\f0c8";
 }

.fab-circle-o::before,
.list-circle-o li::before {
  content: "\f111";
 }

.fab-plus-square-o::before,
.list-plus-square-o li::before {
  content: "\f0fe";
 }

.fab-minus-square-o::before,
.list-minus-square-o li::before {
  content: "\f146";
 }

.fab-times-circle-o::before,
.list-times-circle-o li::before {
  content: "\f057";
 }

.fab-window-close-o::before,
.list-window-close-o li::before {
  content: "\f410";
 }

.is-style-information-box::before,
.is-style-question-box::before,
.is-style-alert-box::before,
.is-style-memo-box::before,
.is-style-ng-box::before,
.information-box::before,
.information::before,
.question-box::before,
.question::before,
.alert-box::before,
.alert::before,
.memo-box::before,
.profile-box::before,
.ng-box::before,
.good-box::before,
.bad-box::before,
.fab-info-circle::before,
.fab-question-circle::before,
.fab-exclamation-circle::before,
.fab-pencil::before,
.fab-edit::before,
.fab-comment::before,
.fab-bad::before,
.fab-graduation-cap::before,
.fab-book::before,
.fab-envelope::before,
.fab-flag::before,
.fab-ban::before,
.fab-bolt::before,
.fab-calendar::before,
.fab-cutlery::before,
.fab-heart::before,
.list-heart li::before,
.fab-camera::before,
.fab-search::before,
.fab-folder::before,
.fab-tag::before,
.fab-trophy::before,
.fab-car::before,
.fab-truck::before,
.fab-bicycle::before,
.fab-motorcycle::before,
.fab-bus::before,
.fab-plane::before,
.fab-train::before,
.fab-subway::before,
.fab-taxi::before,
.fab-file-text::before,
.fab-jpy::before,
.fab-usd::before,
.fab-eur::before,
.fab-ship::before,
.fab-thumbs-up::before,
.fab-thumbs-down::before,
.fab-check::before,
.list-check li::before,
.fab-bell::before,
.fab-star::before,
.list-star li::before,
.fab-bookmark::before,
.fab-download::before,
.fab-coffee::before,
.fab-user::before,
.btn-l::after,
.ranking-items .ranking-item .ranking-item-link-buttons a::after,
.btn-wrap.btn-wrap-l > a::after,
.toggle-button::before,
.fab-check-circle::before,
.list-check-circle li::before,
.fab-check-square::before,
.list-check-square li::before,
.fab-caret-right::before,
.list-caret-right li::before,
.fab-arrow-right::before,
.list-arrow-right li::before,
.fab-angle-right::before,
.list-angle-right li::before,
.fab-angle-double-right::before,
.list-angle-double-right li::before,
.fab-arrow-circle-right::before,
.list-arrow-circle-right li::before,
.fab-play-circle::before,
.list-play-circle li::before,
.fab-chevron-right::before,
.list-chevron-right li::before,
.fab-chevron-circle-right::before,
.list-chevron-circle-right li::before,
.fab-square::before,
.list-square li::before,
.fab-circle::before,
.list-circle li::before,
.fab-plus::before,
.list-plus li::before,
.fab-plus-circle::before,
.list-plus-circle li::before,
.fab-plus-square::before,
.list-plus-square li::before,
.fab-minus::before,
.list-minus li::before,
.fab-minus-circle::before,
.list-minus-circle li::before,
.fab-minus-square::before,
.list-minus-square li::before,
.fab-times::before,
.list-times li::before,
.fab-times-circle::before,
.list-times-circle li::before,
.fab-window-close::before,
.list-window-close li::before,
.fab-paw::before,
.list-paw li::before,
.search-form div.sbtn:before,
.slick-prev.slick-arrow::before,
.slick-next.slick-arrow::before,
.fa-exclamation-triangle::before {
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
 }

.is-style-memo-box::before,
.memo-box::before,
.fab-pencil::before {
  content: "\f303";
 }

.bb-memo .fa::before {
  content: "\f303";
 }

.fab-cutlery::before {
  content: "\f2e7";
 }

.fab-window-close::before,
.list-window-close li::before {
  content: "\f410";
 }

.blank-box.bb-amazon .fa::before,
.fab-amazon::before,
.fab-btc::before,
.fab-apple::before,
.fab-android::before,
.fab-wordpress::before {
  font-family: "Font Awesome 5 Brands";
  font-weight: 400;
}
* {
  transition-duration: 0.3s;
  transition-timing-function: ease;
  transition-property: color, background-color, display, div, position, span, font-size, text-decoration, box-shadow, border-color, filter, border-radius, background-image, transform, margin, margin-top, margin-bottom, margin-right, margin-left, padding-bottom, outline, opatity;
  scrollbar-width: auto;
  scrollbar-color: var(--accent) transparent;
  scrollbar-darkshadow-color: rgb(0 0 0/12%);
  scroll-padding: 1%;
  scrollbar-shadow-color: rgb(0 0 0/12%);
  scroll-behavior: smooth;
}
:root {
  --main-text: #614A5E;
  --corsor-color: #26292c78;
  --shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
  --hover-shadow: rgba(0, 0, 0, 0.5) 0px 4px 40px;
  --background-secondary: #F5F5F5;
  --focus: rgba(3, 102, 214, 0.3);
  --accent: #A06A54;
  --border: 2px solid #BDBDBD;
  --border-color: #BDBDBD;
  --background-primary: #FFF;
  --background-secondary: #F5F5F6;
}
body,body.public-page {
background-image: none;
  background: var(--background-secondary);
}
img,.wp-block-image:not(.is-style-rounded) > a, .wp-block-image:not(.is-style-rounded) img {
border-radius: 1em;
}
.author-thumb img {
border-radius: 50%;
border: 3px solid var(--accent);
box-shadow: var(--shadow);
}
.ect-vertical-card .entry-card-wrap {
display: contents !important;
}
.ect-vertical-card .entry-card-wrap .entry-card-thumb img,.card-thumb img {
aspect-ratio: 16 / 9 !important;
}
.sidebar:not(#slide-in-sidebar) .widget-sidebar {
box-shadow: none;
}
.author-box {
background: var(--background-primary);
box-shadow: var(--shadow);
border-radius: 2em;
}
.sidebar:not(#slide-in-sidebar) .widget-sidebar {
border-radius: 2em;
}
main .wp-block-image:not(.is-style-rounded) img,.entry-content .toc-list > li::before {
filter: drop-shadow(0px 5px 15px rgba(0, 0, 0, 0.15));
margin-bottom: 30px;
}
.sidebar:not(#slide-in-sidebar) .widget-sidebar .search-box,main .search-box {
box-shadow: var(--shadow);
border-radius: 5000px;
border: var(--border);
}
.eye-catch img,.ect-vertical-card .entry-card-wrap .entry-card-thumb img {
  filter: drop-shadow(0px 5px 15px rgba(0, 0, 0, 0.15));
  border-radius: 2em;
}
input.search-edit {
border-radius: 5000px;
padding-left: 20px;
}
button.search-submit {
border-radius: 5000px;
background-color: var(--accent);
}
.author-box .sns-follow-buttons a.follow-button {
background-color: var(--accent);
margin-right: 8px;
box-shadow: var(--shadow);
}
.author-box .sns-follow-buttons a.follow-button:hover {
background-color: var(--wp--preset--color--blue);
}
.sns-follow-buttons a {
opacity: 1;
}
.main {
border-radius: 2em;
box-shadow: var(--shadow);
width: 810px;
padding-left: 50px;
padding-right: 50px
}
.entry-content h1,.entry-title, .archive-title {
background: var(--accent);
color: #fff;
border-left: none;
border-bottom: none;
border-radius: 5000px;
padding-left: 30px;
padding-right: 30px;
padding-bottom: 20px;
padding-top: 20px;
}
.sidebar-scroll {
top: 50px;
}
main .author-box {
  background: var(--background-secondary);
  box-shadow: none;
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 20px;
  padding-bottom: 20px;
  margin-top: 10px;
  margin-bottom: 10px;
}
.a-wrap {
background: var(--background-secondary);
border-radius: 2em;
padding-left: 20px;
padding-right: 20px;
padding-top: 15px;
padding-bottom: 10px;
box-shadow: none;
}
.home:not(.page) .main, .sidebar {
  box-shadow: none;
}
table th, table td, .page-numbers, .page-numbers.dots, .tagcloud a, .list.ecb-entry-border .entry-card-wrap, .related-entries.recb-entry-border .related-entry-card-wrap, .carousel .a-wrap, .pager-post-navi.post-navi-border a.a-wrap, .article .toc, .a-wrap .blogcard, .author-box, .comment-reply-link, .ranking-item {
border-color: transparent;
}
.blogcard {
padding: 5px;
}
table tr:nth-of-type(2n+1), .page-numbers.dots, .a-wrap:hover, .pagination a:hover, .pagination-next-link:hover, .widget_recent_entries ul li a:hover, .widget_categories ul li a:hover, .widget_archive ul li a:hover, .widget_pages ul li a:hover, .widget_meta ul li a:hover, .widget_rss ul li a:hover, .widget_nav_menu ul li a:hover, .pager-links a:hover span, .tag-link:hover, .tagcloud a:hover {
background-color: var(--background-secondary);
box-shadow: var(--shadow);
}
.related-list p {
margin-left: 50px;
}
button#comment-reply-btn,.comment-form .form-submit input {
background-color: var(--accent);
border: 3px solid var(--accent);
box-shadow: none;
margin-top: 30px;
}
button#comment-reply-btn:hover,.comment-form .form-submit input:hover {
color: var(--main-text);
background-color: transparent;
box-shadow: var(--shadow);
}
.related-entry-heading::before, .comment-title::before,.date-tags .post-date > span[class^="fa"], .date-tags .post-update > span[class^="fa"] {
background-color: var(--accent);
box-shadow: rgba(0,0,0,0.24) 0px 3px 8px;
}
#comment {
border: 3px solid var(--accent);
margin: auto;
border-radius: 2em;
margin-top: 15px;
box-shadow: var(--shadow);
padding-left: 30px;
padding-top: 20px;
padding-bottom: 20px;
padding-right: 30px;
max-width: 100%;
max-height: 20em;
min-width: 50%;
min-height: 5em;
display: block;
}
.related-entry-heading, .comment-title {
background-color: transparent;
color: #333;
border-bottom: 3px solid var(--accent);
padding-bottom: 10px;
padding-left: 15px;
}
.entry-content h2,.widget-below-sns-buttons-title.main-widget-label,.entry-content h4,.entry-content h6 {
background-color: transparent;
color: #333;
font-size: 1.2em;
border-bottom: 3px solid var(--accent);
padding-bottom: 10px;
padding-left: 20px;
border-left: none;
margin-bottom: 25px
}
.entry-content h4:before,.entry-content h4:after {
display: none;
}
.author-info span[aria-hidden]{
display: inline-block;
color: #fff;
border-radius: 50%;
width: 40px;
height: 40px;
line-height: 40px;
text-align: center;
background: var(--accent);
font-size: 1.3em;
box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
.author-name {
  font-size: 18px;
}
.author-info {
border-bottom: 3px solid var(--accent);
display: inline;
padding-bottom: 18px;
padding-left: 10px;
padding-right: 10px;
}
.fixed-header #navi {
  background: var(--accent);
}
.fixed-header #navi .item-label {
  color: #fff;
}
.ect-vertical-card .entry-card-wrap:hover {
  box-shadow: var(--hover-shadow);
  opacity: 1;
  background: var(--background-primary);
}
.ect-vertical-card .entry-card-wrap:hover,table tr:nth-of-type(2n+1), .page-numbers.dots, .a-wrap:hover, .pagination a:hover, .pagination-next-link:hover, .widget_recent_entries ul li a:hover, .widget_categories ul li a:hover, .widget_archive ul li a:hover, .widget_pages ul li a:hover, .widget_meta ul li a:hover, .widget_rss ul li a:hover, .widget_nav_menu ul li a:hover, .pager-links a:hover span, .tag-link:hover, .tagcloud a:hover,
button#comment-reply-btn:hover, .comment-form .form-submit input:hover,.wp-block-button__link:hover,.entry-card:hover {
transform: translateY(-12px);
box-shadow: var(--hover-shadow);
}
.widget-related-entry-cards.widget-entry-cards.no-icon.cf.border-square {
padding-left: 20px;
padding-right: 20px;
padding-bottom: 15px;
box-shadow: var(--shadow);
border-radius: 0 0 2em 2em;
}
.sidebar h2, .sidebar h3 {
margin: 0;
border-radius: 5000px;
padding-left: 30px;
}
.is-code-row-number-enable pre.hljs, .is-code-row-number-enable pre.hljs#highlight-demo {
  border: var(--border);
}
.wp-block-code {
  border-radius: 1em;
  background: var(--background-secondary);
  color: var(--main-text);
  box-shadow: var(--shadow);
  border: var(--border);
}
.hljs-string, .hljs-bullet, .hljs-subst, .hljs-title, .hljs-section, .hljs-emphasis, .hljs-type, .hljs-built_in, .hljs-builtin-name, .hljs-selector-attr, .hljs-selector-pseudo, .hljs-addition, .hljs-variable, .hljs-template-tag, .hljs-template-variable {
color: var(--wp--preset--color--green);
}
.hljs-attribute, .hljs-symbol, .hljs-regexp, .hljs-link {
  color: var(--wp--preset--color--pink);
}
.hljs-tag, .hljs-keyword, .hljs-selector-tag, .hljs-literal, .hljs-strong, .hljs-name {
color: var(--wp--preset--color--red);
}
.entry-date {
color: #888;
}
#spotlight {
background-color: #000000b5;
backdrop-filter: saturate(180%) blur(20px);
}
#spotlight .header,#spotlight .arrow, #spotlight .footer {
background-color: var(--accent);
}
.entry-card, .related-entry-card {
margin-bottom: 20px;
margin-top: 20px;
background: var(--background-primary);
padding-top: 20px;
padding-left: 30px;
padding-right: 30px;
padding-bottom: 10px;
border-radius: 2em;
box-shadow: var(--shadow);
}
.ect-vertical-card .entry-card-wrap .post-date, .ect-vertical-card .entry-card-wrap .post-update {
margin-bottom: 10px;
margin-right: 15px;
}
.entry-card-title {
color: #333;
text-align: center;
}
.related-entry-card-wrap .related-entry-card {
  background: transparent;
  box-shadow: none;
  margin: 0;
  padding: 0;
}
.popular-entry-card {
  padding-left: 30px;
  padding-right: 30px;
  background: var(--background-primary);
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 2em;
  box-shadow: var(--shadow);
}
.popular-entry-cards .a-wrap {
  background: transparent !important;
  box-shadow: none !important;
}
.widget-entry-cards.ranking-visible .card-thumb::before {
border-radius: 50%;
margin-left: 5px;
margin-top: 5px;
box-shadow: rgba(0,0,0,0.24) 0px 3px 8px;
}
.is-code-row-number-enable pre.hljs::before {
padding: 0.48em 0
}
.entry-content .toc {
background-color: var(--background-secondary);
box-shadow: var(--shadow);
border-radius: 2em;
border: 1px solid var(--border-color) !important;
}
.entry-content .toc-list > li::before {
color: var(--accent);
}
.entry-content .toc-title::before {
background-color: var(--accent);
}
.entry-content .toc-list li {
list-style-type:none;	
}
.entry-content .toc-title::before {
box-shadow: rgba(0,0,0,0.24) 0px 3px 8px;
}
.entry-content .toc a {
border-bottom: none;
padding-bottom: 10px;
}
.blogcard, .ecb-entry-border .entry-card-wrap, .page-numbers, .pagination-next-link, .comment-btn, .index-tab-buttons .index-tab-button, .border-square a, .author-box,#index-tab-1:checked ~ .index-tab-buttons .index-tab-button[for="index-tab-1"], #index-tab-2:checked ~ .index-tab-buttons .index-tab-button[for="index-tab-2"], #index-tab-3:checked ~ .index-tab-buttons .index-tab-button[for="index-tab-3"], #index-tab-4:checked ~ .index-tab-buttons .index-tab-button[for="index-tab-4"] {
border-color: transparent;
border: none;
}
#index-tab-1:checked ~ .index-tab-buttons .index-tab-button[for="index-tab-1"], #index-tab-2:checked ~ .index-tab-buttons .index-tab-button[for="index-tab-2"], #index-tab-3:checked ~ .index-tab-buttons .index-tab-button[for="index-tab-3"], #index-tab-4:checked ~ .index-tab-buttons .index-tab-button[for="index-tab-4"] {
letter-spacing: 0;
}
.index-tab-buttons {
margin-bottom: 10px;
background: var(--background-primary);
border-radius: 2em;
padding: 20px;
}
#index-tab-1:checked ~ .index-tab-buttons .index-tab-button[for="index-tab-1"], #index-tab-2:checked ~ .index-tab-buttons .index-tab-button[for="index-tab-2"], #index-tab-3:checked ~ .index-tab-buttons .index-tab-button[for="index-tab-3"], #index-tab-4:checked ~ .index-tab-buttons .index-tab-button[for="index-tab-4"] {
background: var(--accent);
}
.index-tab-buttons .index-tab-button {
border-radius: 2px;
background-color: var(--background-secondary);
margin: 0;
user-select: none;
}
.index-tab-buttons .index-tab-button[for="index-tab-1"] {
  border-radius: 500px 2px 2px 500px;
}
.index-tab-buttons .index-tab-button[for="index-tab-3"] {
  border-radius: 2px 500px 500px 2px;
}
';
if(!isset($_GET['original'])){
$copyright = '/* Copyright (c) 2022 AIC-Group. All rights reserved. */

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
 $copyright = '/* Copyright (c) 2022 AIC_Group. All rights reserved */
/* Sorry, the GPL does not apply. */
/* 以下のCSSコードは、GPLライセンスの対象ではありません。 */
    ';
echo $copyright;
echo $original_css;
    }
    ?>