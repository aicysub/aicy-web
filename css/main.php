<?php header('Content-Type: text/css; charaset=utf-8');
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', FALSE );
header('Pragma:no-cache');
$original_css = '@font-face {
  font-family: "MainFonts";
  font-display: swap;
}

@font-face {
  font-family: "HeadingFonts";
  font-display: swap;
}

body {
  font-family: MainFonts;
}

* {
  scrollbar-width: auto;
  scrollbar-color: var(--accent) transparent;
  scrollbar-darkshadow-color: rgb(0 0 0/12%);
  scroll-padding: 1%;
  scrollbar-shadow-color: rgb(0 0 0/12%);
  scroll-behavior: smooth;
  outline: 3px solid transparent;
  transition-duration: 0s;
  transition-timing-function: ease;
  transition-property: color, background-color, display, div, position, span, font-size, text-decoration, box-shadow, border-color, filter, border-radius, background-image, transform, margin, margin-top, margin-bottom, margin-right, margin-left, padding-bottom, outline, opatity;
  font-feature-settings: "palt"1;
}

:root {
  --main-text: #272727;
  --corsor-color: #26292c78;
  --shadow: rgba(0, 0, 0, 0.133) 0px 1.6px 3.6px 0px, rgba(0, 0, 0, 0.11) 0px 0.3px 0.9px 0px;
  --hover-shadow: 10px 10px 20px 0px rgba(0, 0, 0, 0.04), -10px 0 20px 0px rgba(0, 0, 0, 0.04);
  --background-secondary: #F5F5F6;
  --focus: rgba(3, 102, 214, 0.3);
  --border: 2px solid #BDBDBD;
  --border-color: #BDBDBD;
  --background-primary: #E7E7E7;
  --input-background: #F4F4F4;
  --opacity-color: #ADADAD;
  --nav-focus: #CBCBCB;
  --accent: #906862;
  --modal: #DFDFDF;
  --site-background: #F6F6F6;
  --nav-background: #ffffff8c;
  --button-background: #FFF;
}

.name-list {
  display: none;
}

html {
  background-color: #FFFFFF;
}

br {
  user-select: none;
}

*:focus {
  outline: 3px solid var(--focus) !important;
}

*::-webkit-scrollbar {
  width: 10px;
  border-radius: 18px;
  height: 5px;
  margin: 4%;
  border-radius: 18px;
  z-index: -340;
}

*::-webkit-scrollbar:hover {
  width: 10px;
  border-radius: 18px;
  height: 10px;
}

*::-webkit-scrollbar-track {
  background-color: transparent;
}

*::-webkit-scrollbar-thumb {
  background-color: var(--accent);
  border-radius: 18px;
  filter: drop-shadow(0 3px 3px rgb(0 0 0/12%), 0 2px 3px -2px rgb(0 0 0/1%));
}

.edited {
  font-size: 18px;
  text-align: right;
  margin-right: 15%;
  margin-bottom: 1%;
}

.fade {
  animation-name: fade;
  animation-duration: 0.5s;
  animation-fill-mode: forwards;
  opacity: 0;
}

.main {
  animation: main 1s ease;
}

.navbar-dropdown#events {
  width: 20em;
}

.navbar-brand img {
  max-height: 6rem !important;
  padding: 10px;
  border-radius: 50%;
  padding-left: 10px;
  padding-right: 10px;
  animation: icon-anime infinite 1s 0.3s;
}

@media screen and (min-width: 1024px) {
  .navbar {
    min-height: 70px;
    padding-top: 4px;
  }
}

img[src="/favicon.ico"],
img[src^="/images/admins/"],
img[src^="https://cdn.discordapp.com/avatars/"] {
  animation: icon-anime infinite 1s 0.3s;
}

.navbar-item img:hover {
  background-color: #0B50CFdb;
}

h1,
h2,
h3,
h4,
h5,
h6,
p,
span,
.title,
ul {
  color: var(--main-text);
}
i {
 color: var(--accent);
}
a {
  color: #6073ca;
  font-weight: 900;
}

.navbar {
  z-index: 30;
  top: 0px;
  position: sticky;
  background: var(--nav-background);
  backdrop-filter: saturate(180%) blur(20px);
  border-bottom: var(--border);
}

.footers {
  z-index: 30;
}

.navbar-link,
a.navbar-item {
  font-size: 20px;
  height: 2em;
  margin-top: .5em;
  margin-bottom: .5em;
  border-radius: 8px;
  top: 0em;
  margin-right: 10px;
  font-weight: bolder;
  text-underline-offset: 5px;
}

a.navbar-item:hover,
.navbar-item.has-dropdown.is-active .navbar-link,
.navbar-item.has-dropdown:focus .navbar-link,
.navbar-item.has-dropdown:hover .navbar-link,
.navbar-dropdown a.navbar-item:focus,
.navbar-dropdown a.navbar-item:hover {
  background-color: #0B51CD;
  color: #fff;
  transform: scale(1.05);
  text-decoration: underline;
  outline: 1px solid var(--border-color);
}

a.navbar-item:hover i,
.navbar-item.has-dropdown.is-active .navbar-link,
.navbar-item.has-dropdown:focus .navbar-link,
.navbar-item.has-dropdown:hover .navbar-link i {
  color: #fff;
}

.navbar-link:hover:not(.is-arrowless)::after {
  border-color: #fff;
}

.navbar-dropdown:hover .navbar-link:not(.is-arrowless)::after {
  border-color: #fff;
}

.navbar-dropdown a.navbar-item {
  height: 45px;
  margin-top: 1%;
  margin-bottom: 1%;
  margin-left: 10px;
  margin-right: 10px;
  top: 0;
  padding-right: 3em;
  padding-left: 2em;
}

.button.is-primary {
  background-color: var(--accent);
  border-color: #fff0;
  color: #fff;
}

button.is-primary.is-hovered,
.button.is-primary:hover {
  background-color: #fed2d0;
  border-color: var(--accent);
  color: #000;
  text-decoration: none;
}

.button {
  border-width: 3px;
  border-radius: 18px;
  box-shadow: var(--shadow);
}

#events,
#etc {
  transition: all .3s;
}

.navbar-dropdown {
  max-height: max-content;
  border-radius: 0px 0px 20px 20px;
  border-top: 3px solid transparent;
  box-shadow: rgba(72, 72, 72, 0.18) 0px 13px 26px;
  border-left: var(--border);
  border-right: var(--border);
  border-bottom: var(--border);
  padding-left: 5%;
  padding-right: 5%;
  background: var(--background-primary);
}

.fa-solid,
.fas,
.fa-brands,
.fab,
.fa-duotone {
  margin-right: 8px;
  -moz-text-shadow: 1px 2px 0px rgba(190, 190, 190, 1);
  -webkit-text-shadow: 1px 2px 0px rgba(190, 190, 190, 1);
  -ms-text-shadow: 1px 2px 0px rgba(190, 190, 190, 1);
  text-shadow: 1px 2px 0px rgba(190, 190, 190, 1);
}

.navbar-dropdown .navbar-item {
  margin: 3%;
  border-radius: 10px;
}

.navbar-divider {
  background-color: var(--border-color);
  width: 90%;
  margin: auto;
  height: 1px;
}

button.is-primary.is-hovered,
.button.is-primary:hover {
  background-color: transparent;
  text-decoration: none;
  border-color: var(--accent);
}

.h2 {
  background-color: var(--background-secondary);
  margin-left: 15%;
  margin-right: 15%;
  border-radius: 20px 20px 4px 4px;
  position: relative;
  padding: 1rem 2rem;
  border-bottom: 6px solid #b27954;
  box-shadow: var(--hover-shadow);
  font-family: HeadingFonts;
  margin-top: 30px;
  text-align: center;
  user-select: none;
  text-shadow: 1px 1px 0 #b27954, -1px -1px 0 #b27954, -1px 1px 0 #b27954, 1px -1px 0 #b27954, 0 1px 0 #b27954, 0-1px 0 #b27954, -1px 0 0 #b27954, 1px 0 0 #b27954;
  font-weight: 900;
  color: #fff;
}

.h2 i {
  color: #fff;
}

.h2 p {
  color: #fff;
}

.event .h2 {
  margin-left: 0%;
  margin-right: 0%;
}

.h3:before {
  left: 62%;
  margin-top: 15px;
}

.h3:after {
  left: 35%;
  margin-top: 15px;
}

.h3:before,
.h3:after {
  position: absolute;
  width: 50px;
  height: 6px;
  content: \'\';
  border-top: dotted 5px #fff;
  border-bottom: dotted 4px var(--accent);
}

.footer-none {
  opacity: 0;
  display: none;
}

#amukushimuru a {
  color: #000;
}

.yt-log {
  background: #fff;
  padding: 3%;
  border: 3px solid var(--accent);
  border-radius: 0px 0px 20px 20px;
  box-shadow: var(--shadow);
}

.on-off:checked~.open-label {
  border-radius: 20px 20px 0px 0px;
}

code {
  color: #da1039;
  font-size: .875em;
  font-weight: 400;
  padding: 0.25em 0.5em 0.25em;
  border: 2px solid var(--accent);
  box-shadow: var(--shadow);
}

.name-list {
  display: block;
  padding-top: 20px;
  padding-left: 30px;
  padding-right: 30px;
  padding-bottom: 20px;
  border-radius: 3em;
  animation: kurun 1.5s ease;
  margin-right: 15px;
  user-select: none;
  margin-top: 4%;
  background: var(--background-secondary);
  margin-left: 15px;
  border: var(--border);
  box-shadow: var(--shadow);
  border-bottom: 6px solid var(--border-color);
}

a {
  color: #6984ff;
}

.color {
  font-size: 15px;
  margin-top: 1%;
  display: none;
}

.name {
  font-size: 1.6em;
  display: flex;
  align-items: center;
  border-bottom: 3px solid var(--accent);
  padding-bottom: 1%;
  color: var(--main-text);
  width: 400px;
  padding-bottom: 10px;
  padding-left: 10px;
  font-weight: 600;
  line-height: 1.125;
}

.open-label {
  margin-bottom: 0 !important;
  user-select: none;
}

.on-off:checked~.open {
  padding: 0;
}

.name h3 {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

.description {
  text-align: center;
  color: var(--main-text);
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  width: 25em;
  margin: 0;
}

.name-list:hover {
  backface-visibility: hidden;
  cursor: pointer;
  background-color: var(--accent);
  background-image: url(/images/admins/hover.png);
  background-size: 100%;
  background-position: center;
  cursor: pointer;
  box-shadow: var(--shadow);
  z-index: 300;
  animation: rotate 1s 0.3s infinite;
}

.bread:hover {
  box-shadow: var(--shadow), var(--hover-shadow);
}

.name-list:hover h3,
.name-list:hover img,
.name-list:hover p {
  opacity: 0;
}

.unei {
  font-size: 2em;
  background: var(--background-secondary);
  padding: 3%;
  border-radius: 38px;
  margin-left: 5%;
  margin-right: 5%;
}

.download[type="submit"]:hover {
  background: #fff;
  cursor: pointer;
  color: #000;
}

.flex {
  display: flex;
}

.webkit-box {
  display: -webkit-box;
}

.webkit-box .name {
  width: 14em;
}

.webkit-box .description {
  width: 23em;
}

.admin-more {
  justify-content: center;
  padding-bottom: 50px;
  padding-top: 30px;
  overflow: visible;
  text-align: center;
}

.box {
  background-color: var(--background-secondary);
  border-radius: 38px;
  box-shadow: none;
  margin-left: 20%;
  margin-right: 20%;
  font-size: 1.3em;
  padding-left: 40px;
  padding-right: 40px;
  padding-top: 30px;
  padding-bottom: 30px;
  animation: up 1.5s ease;
  color: var(--main-text);
}

.box:hover {
  background: var(--background-secondary);
  box-shadow: var(--hover-shadow);
}

.contents a::after {
  content: "\f35d";
  width: 16px;
  height: 16px;
  display: inline-block;
  margin-left: 5px;
  font-family: "Font Awesome 6 Pro";
  font-weight: 900;
  margin-right: 1%;
}

.download[type="submit"] {
  background: var(--accent);
  color: #fff;
}

.toc a::after {
  display: none;
}

.none a::after {
  display: none;
}

.toc {
  background: var(--background-secondary);
  width: 20%;
  margin: auto;
  text-align: center;
  border-radius: 18px;
  padding: 1%;
  box-shadow: var(--shadow);
  border: var(--border);
  margin-top 3%;
}

.event {
  background: var(--background-primary);
  padding: 3%;
  width: 70%;
  text-align: center;
  margin: auto;
  margin-top: 5%;
  border-radius: 18px;
  box-shadow: var(--shadow);
}

.event .h2 {
  width: 100%;
  font-size: 25px
}

.hr {
  background: var(--accent);
  height: 3px;
  box-shadow: var(--shadow);
  width: 70%;
  margin: auto;
  margin-bottom: 25px;
}

blockquote {
  color: var(--main-text);
}

.h3 {
  background: #fff;
  padding: 1%;
  display: block;
  width: 40%;
  text-align: center;
  margin: auto;
  border-radius: 18px;
  font-size: 1.1em;
  box-shadow: var(--shadow);
}

.name {
  color: var(--main-text);
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

input[type="checkbox"].on-off {
  opacity: 0;
}

.open-label {
  display: block;
}

.open {
  height: 0;
  opacity: 0;
}

.on-off {
  display: none;
}

.on-off:checked~.open {
  height: auto;
  opacity: 1;
}

.h2 .hover {
  display: none;
}

.h2:hover .nomal {
  display: none;
}

.h2:hover .hover {
  display: inline;
}

.unei .hover {
  display: none;
}

.unei:hover .nomal {
  display: none;
}

.unei:hover .hover {
  display: inline;
}

.unei .h2.hover {
  display: none;
}

.unei:hover .h2.nomal {
  display: none;
}

.unei:hover .h2.hover {
  display: inline;
  animation: fuwa .5s ease;
}

.link-a .hover {
  display: none;
}

.link-a:hover .nomal {
  display: none;
}

.link-a:hover .hover {
  display: inline;
}

.navbar .button.is-primary {
  font-size: 1.5em;
}

a .hover {
  display: none;
}

a:hover .nomal {
  display: none;
}

a:hover .hover {
  display: inline;
}

p span.hover {
  display: none;
}

p:hover span.nomal {
  display: none;
}

p:hover span.hover {
  display: inline;
}

.main a span {
  color: #6984ff;
  user-select: all;
  font-size: 1.3em;
}

.main a:hover,
a:hover span {
  color: var(--accent);
}

.link {
  margin-left: 20%;
  margin-right: 20%;
  padding: 3%;
  background: var(--background-secondary);
  border-radius: 38px;
  display: -webkit-box;
  justify-content: center;
  overflow-y: hidden;
  text-align: center;
  overflow-x: auto;
  box-shadow: var(--shadow);
}

.contents a {
  display: inline-block;
  white-space: nowrap;
  margin-right: 8px;
  font-weight: 900;
}

.download {
  box-shadow: var(--shadow);
  border-radius: 5000px;
  background: #f8f8f8;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 25px;
  padding-right: 25px;
  box-lines: none;
  outline: none;
  border: 2px solid var(--accent);
}

.youtube {
  border-radius: 18px;
  margin: 2%;
  box-shadow: var(--shadow);
  max-width: 70%;
}

.link-a {
  background: #eee;
  padding: 2%;
  display: inline;
  border-radius: 18px;
  font-size: 1.2em;
  box-shadow: var(--shadow);
  margin-right: 3%;
  cursor: pointer;
  user-select: none;
  display: block;
  box-shadow: var(--shadow);
  margin-right: 3% !important;
}

.link-a a {
  color: var(--main-text);
  margin-right: 3% !important;
}

.link-a a::after {
  display: contents;
}

.link-a:hover {
  background: #0095ff;
  color: #fff;
}

.link-a:hover a,
.link-a:hover .fa-brands,
.fab,
.link-a:hover span {
  color: #fff;
}

.name-list {
  margin-top: 0;
  margin-bottom: 0;
}

.admin-more-top .name-list {
  margin-top: 4%;
}

a.link-a:hover {
  box-shadow: 7px 8px 0px 0 #0f59a8, 13px 16px 0px 0 #0f59a8, rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;
  background: #0095ff;
  transform: scale(1.28) !important;
  color: #fff;
  margin-left: 3%;
  margin-right: 7% !important;
  ;
}

.top {
  position: fixed;
  bottom: 2%;
  background: #7759557f;
  right: 0;
  border-radius: 50%;
  font-size: 2em;
  backdrop-filter: saturate(180%) blur(20px);
  z-index: 500;
  margin-right: 15px;
  margin-bottom: 15px;
}

.top .fa-solid,
.top .fas {
  margin: 0.5em;
}

.text-border-1 {
  stroke-linejoin: round;
}

#loading {
  width: 10em;
  height: 10em;
  border-radius: 50%;
  border: 1em solid #333;
  border-top-color: var(--accent);
  animation: spinner 1.5s linear infinite;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  background: rgba(255, 255, 255, 0.409);
  z-index: 5000;
}

.icon-img {
  align-items: center;
  margin-right: 5%;
  border: 3px solid var(--accent);
  border-radius: 50%;
  box-shadow: 0 3px 3px rgb(0 0 0/12%), 0 2px 3px -2px rgb(0 0 0/1%);
  max-height: none !important;
  background: var(--background-secondary);
}

#loadings {
  width: 10em;
  height: 10em;
  border-radius: 50%;
  border: 1em solid #333;
  border-top-color: var(--accent);
  animation: spinner 1.5s linear infinite;
  position: fixed;
  left: 0;
  bottom: 0;
  margin: 1%;
  background: rgba(255, 255, 255, 0.409);
  z-index: 5000;
}

.text-border-black {
  stroke: #000;
  stroke-width: 8;
}

button.is-primary.is-hovered,
.button.is-primary:hover,
.contents a:hover {
  transform: translateY(3px);
  text-decoration: underline;
  text-underline-offset: 5px;
}

.contents .link-a {
  display: block;
}

.webkit-box {
  animation: scroll 18s linear infinite;
}

.ropeta #ropeta {
  display: none;
}

.nemoyans #nemoyans,
.machatofu #machatofu,
.ryouma #ryouma,
.papurusuta #papurusuta,
.mahuyu #mahuyu,
.gijutsu #gijutsu,
.edamame #edamame,
.chasyumen #chasyumen,
.amukushimuru #amukushimuru,
.aicy #aicy,
.ginzyou-genryu #ginzyou-genryu {
  display: none;
}

button {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 6px 14px;
  font-family: -apple-system, BlinkMacSystemFont, \'Roboto\', sans-serif;
  border-radius: 6px;
  color: #3D3D3D;
  background: #fff;
  border: none;
  box-shadow: 0px 0.5px 1px rgba(0, 0, 0, 0.1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

button:focus {
  box-shadow: 0px 0.5px 1px rgba(0, 0, 0, 0.1), 0px 0px 0px 3.5px rgba(58, 108, 217, 0.5);
  outline: 0;
}

.bread {
  margin: 20px;
  padding: 0;
  list-style: none;
  background: var(--nav-background);
  backdrop-filter: saturate(180%) blur(20px);
  padding-top: 20px;
  padding-bottom: 24px;
  padding-left: 30px;
  padding-right: 30px;
  width: fit-content;
  border-radius: 5000px;
  display: block;
  box-shadow: var(--shadow);
  position: sticky;
  top: 40px;
  z-index: 400;
}

.footers {
  position: fixed;
  bottom: 0px;
  width: 100%;
  background: var(--nav-background);
  z-index: 500;
  user-select: none;
  backdrop-filter: saturate(180%) blur(20px);
  padding-top: 10px;
  padding-bottom: 10px;
}

.footers h2 {
  text-align: center;
  margin-bottom: 5px;
  color: #FFF;
  text-shadow: 1px 1px 0 #906862, -1px -1px 0 #906862, -1px 1px 0 #906862, 1px -1px 0 #906862, 0px 1px 0 #906862, 0-1px 0 #906862, -1px 0 0 #906862, 1px 0 0 #906862;
  width: 100%;
  font-size: 1.5em;
}

.box .h2 {
  background: var(--accent);
  margin-top: 0;
  margin-left: 0;
  margin-right: 0;
  border-radius: 5000px;
  border-bottom: none;
}

.bread li {
  display: inline;
  list-style: none;
  font-weight: bold;
}

.bread li:after {
  content: \'\f0da\';
  padding: 0 .2em;
  color: var(--border-color);
  font-family: "Font Awesome 6 Pro";
  font-weight: 900;
}

.none:hover li:after {
  transform: translateY(3px);
}

.bread li:last-child:after {
  content: \'\';
}

.bread li a {
  text-decoration: none;
  color: gray;
}

.bread li:first-child a:before {
  font-family: FontAwesome;
  content: \'\f015\';
  font-weight: normal;
  font-size: 1.1em;
  color: #2e7fea;
}

.bread li a:hover {
  text-decoration: underline;
}

.navbar-link:not(.is-arrowless)::after {
  display: none;
}

.down {
  margin-right: 0;
  margin-left: 10px;
}

.navbar-link:not(.is-arrowless) {
  padding-right: .75rem;
}

/*_:lang(x)::-moz-placeholder,.admin-more,.link,.webkit-box  {
display: block ruby;
text-align: center;
overflow-x: scroll;
overflow-y: hidden;
}*/
_:lang(x)::-moz-placeholder,
.link-a a::after {
  display: block;
}

.none a {
  margin-right: 0;
}

.none a:hover,
.none a::before {
  transform: translateY(3px);
  padding-bottom: 0px;
}

*:focus::-webkit-input-placeholder {
  color: transparent;
}

*:focus::-moz-placeholder {
  color: transparent;
}

*:focus::-ms-input-placeholder {
  color: transparent;
}

*:focus::placeholder {
  color: transparent;
}

*::-webkit-input-placeholder {
  user-select: none;
}

*::-moz-placeholder {
  user-select: none;
}

*::-ms-input-placeholder {
  user-select: none;
}

*::placeholder {
  user-select: none;
}

input[type="file"],
select {
  user-select: none;
  cursor: pointer;
}

input[type="file"]:hover {
  cursor: pointer;
}

#white-change,
#dark-change,
#anime-none-change,
#anime-change,
#white-change-pc,
#dark-change-pc,
#anime-none-change-pc,
#anime-change-pc,
#config {
  padding: 1em;
  margin-right: 5px;
  margin-top: 6px;
  border-radius: 8px;
  cursor: pointer;
}

#white-change:hover,
#dark-change:hover,
#anime-none-change:hover,
#anime-change:hover,
#white-change-pc:hover,
#dark-change-pc:hover,
#anime-none-change-pc:hover,
#anime-change-pc:hover,
#config:hover {
  background-color: #007fd9db;
  color: #fff;
  transform: scale(1.05);
}

#dark-change,
#anime-change,
#dark-change-pc,
#anime-change-pc {
  display: none;
}

input,
select,
textarea,
.contacts-copy {
  padding-top: 10px;
  margin: 3px;
  border-radius: 20px;
  padding-bottom: 10px;
  padding-left: 15px;
  padding-right: 15px;
  background: var(--input-background);
  border: var(--background-primary-border);
  color: var(--main-text);
  box-shadow: var(--shadow);
  border: var(--border);
  font-size: 1em;
}

select:focus {
  border-radius: 4px;
}

textarea {
  min-width: 35%;
  min-height: 5em;
  max-width: 80%;
  max-height: 20em;
}

.contacts-copy,
.redo,
select,
.contacts-copy:hover,
.redo:hover,
select:hover,
input[type="submit"] {
  cursor: pointer;
}

.redo:hover {
  color: var(--opacity-color);
}

input:hover,
select:hover,
textarea:hover,
.contacts-copy:hover {
  background: var(--background-primary);
}

.contacts-copy_copy_txt {
  display: none;
}

.name-list a {
  height: 100%;
}

.admin-more {
  overflow-x: scroll;
  overflow-y: visible;
}

td,
th {
  padding: 3%;
  width: 20%;
  text-align: center !important;
  border-right: 1px solid var(--corsor-color);
  color: var(--main-text);
}

table {
  border: 3px solid var(--border-color);
  border-radius: 20px;
  border-collapse: separate;
}

footer p {
  color: var(--main-text);
}

.flex .admin-more {
  overflow: visible !important;
  overflow-y: visible !important;
  overflow-x: visible !important;
}

table th {
  color: var(--main-text);
  background: var(--background-primary);
  border-bottom: 3px solid var(--corsor-color);
  border-right: 1px solid var(--corsor-color);
}

table tr:first-child th:first-child {
  border-radius: 15px 0 0 0;
  border-right: 1px solid var(--corsor-color);
}

table tr:first-child th:last-child {
  border-radius: 0 15px 0 0;
  border-right: none;
}

table tbody tr:last-child th:first-child {
  border-radius: 0 0 0 15px;
}

table tbody tr:last-child th:last-child {
  border-radius: 0 0 15px 0;
}

table tr:first-child td:first-child {
  border-radius: 15px 0 0 0;
}

table tr:first-child td:last-child {
  border-radius: 0 15px 0 0;
}

table tbody tr:last-child td:first-child {
  border-radius: 0 0 0 15px;
  border-right: 1px solid var(--corsor-color);
}

table tbody tr:last-child td:last-child {
  border-radius: 0 0 15px 0;
  border-right: none;
}

table tbody tr:last-child th,
table tbody tr:last-child td {
  border-bottom: none;
  text-align: center !important;
}

.mobile-table {
  display: none;
  width: 100%;
}

.mobile-table td,
.mobile-table th {
  display: block;
  width: 100%;
}

.mobile-table tr:first-child th:first-child {
  border-radius: 15px 15px 0 0;
}

.mobile-table tbody tr:last-child th:first-child,
.mobile-table tr:first-child td:last-child {
  border-radius: 0 0 0 0;
}

.mobile-table tbody tr:last-child th {
  border-bottom: 3px solid var(--corsor-color);
}

span {
  user-select: none;
}

.redo {
  margin-left: 2%;
}

.fa-solid,
.fas {
  font-family: "Font Awesome 6 Pro";
}

#anime-change,
#anime-none-change {
  animation: anime-change infinite 3s;
}

#anime-change:hover,
#anime-none-change:hover {
  animation: anime-change infinite 0s 0s;
}

@keyframes icon-anime {
  100% {
    transform: rotate(360deg);
  }
}

@keyframes anime-change {
  0% {
    transform: translate(0, 0);
  }

  5% {
    transform: translate(-5px, -0);
  }

  10% {
    transform: translate(5px, 0);
  }

  15% {
    transform: translate(-5px, -0);
  }

  20% {
    transform: translate(5px, 0);
  }

  25% {
    transform: translate(-5px, -0);
  }

  30% {
    transform: translate(0, 0);
  }

  100% {
    transform: translate(0, 0);
  }
}

.name-list:active {
  transform: translateY(20px) scale(1);
}

.nitro-history {
  padding: 3%;
  border-radius: 18px;
}

.nitro-history:hover {
  background: var(--background-primary);
  padding: 3%;
  border-radius: 18px;
}

.nitro-history img {
  width: 10%;
  border: 3px solid var(--accent);
  border-radius: 50%;
  vertical-align: middle;
  box-shadow: 0 3px 3px rgb(0 0 0/12%), 0 2px 3px -2px rgb(0 0 0/1%);
  margin-right: 2%;
}

.admins {
  font-size: 17px;
  background: #b27954;
  color: #fff !important;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 15px;
  padding-right: 15px;
  border-radius: 5000px;
  margin: 1%;
  font-weight: 900;
  user-select: none !important;
  box-shadow: var(--shadow);
  font-size: 1em !important;
}

.admins i {
  color: #fff !important;
}

.user {
  font-size: 17px;
  background: transparent;
  color: var(--main-text) !important;
  padding: 1%;
  border-radius: 12px;
  margin: 1%;
  font-weight: 900;
  user-select: none !important;
  box-shadow: var(--shadow);
  border: 3px solid #b27954;
  font-size: 1em !important;
}

.my-video-dimensions {
  max-width: 100%;
  max-height: 100%;
  width: 100%;
  height: 30%;
  border-radius: 18px;
  box-shadow: var(--shadow);
}

.video-js {
  margin: auto;
  cursor: pointer;
  border-radius: 18px;
}

.video-js .vjs-tech {
  border-radius: 18px;
}

.video-js .vjs-big-play-button {
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(1.3);
  -webkit-transform: translate(-50%, -50%) scale(1.3);
  -ms-transform: translate(-50%, -50%) scale(1.3);
  border-radius: 50%;
  height: 17%;
  width: 4%;
}

.video-js .vjs-control-bar {
  border-radius: 0px 0px 20px 20px;
}

.vjs-fullscreen .video-js .vjs-tech,
.vjs-fullscreen .my-video-dimensions,
.vjs-fullscreen .video-js .vjs-control-bar {
  border-radius: 0px 0px 0px 0px;
}

.vjs-fullscreen * {
  border-radius: 0px 0px 0px 0px;
}

.vjs-fullscreen .vjs-big-play-button {
  height: 7.5%;
  width: 4.2%;
  font-size: 5em;
  background-color: rgba(178, 121, 84, 0.58);
  backdrop-filter: saturate(180%) blur(20px);
  box-shadow: var(--shadow);
}

.video-js:hover .vjs-big-play-button,
.video-js .vjs-big-play-button:focus {
  border-color: #b27954;
  background-color: rgba(96, 96, 96, 0.5);
  transition: all 0.3s;
}

.vjs-paused .vjs-big-play-button {
  display: block;
}

.video-js .vjs-play-progress::before {
  top: -0.15em;
  font-size: 1.9em;
}

.vjs-control:hover .vjs-play-progress.vjs-slider-bar.vjs-slider-bar::before,
.vjs-play-progress.vjs-slider-bar:hover::before {
  top: -0.2em;
}

.video-js .vjs-play-progress::before {
  top: -0.1em;
}

.video-js .vjs-control-bar {
  background-color: rgba(178, 121, 84, 0.22);
  backdrop-filter: saturate(180%) blur(20px);
}

.video-js .vjs-slider {
  background-color: transparent height: 1.25em;
  border-radius: 18px;
  backdrop-filter: saturate(180%) blur(20px);
}

.video-js .vjs-progress-holder {
  height: 1.25em;
  transition: all 0s;
}

.video-js .vjs-load-progress div {
  background: rgba(113, 113, 113, 0);
}

.video-js .vjs-play-progress {
  background-color: #fff;
  border-radius: 18px;
}

.video-js .vjs-control-bar {
  height: 6em;
}

.vjs-button>.vjs-icon-placeholder::before {
  font-size: 3.89em;
  box-shadow: none;
}

.video-js .vjs-volume-bar {
  margin: 2.43em -0.55em;
  margin-left: 9%;
}

.video-js .vjs-time-control {
  font-size: 2em;
  padding-left: 0.2em;
  padding-right: 0.2em;
}

.icons {
  width: 8%;
  vertical-align: middle;
  padding-top: 0px;
  user-select: none;
  pointer-events: none;
}

ruby[data-ruby] {
  position: relative;
}

ruby[data-ruby]::before {
  content: attr(data-ruby);
  position: absolute;
  left: -2em;
  top: -0.8em;
  right: -2em;
  text-align: center;
  font-size: .5em;
}

rt {
  display: none;
}

.line-bc {
  padding: 0;
  max-width: 50%;
  margin: auto;
  text-align: right;
  font-size: 14px;
  background: transparent;

}

.balloon6 {
  width: 100%;
  margin: 10px 0;
  overflow: hidden;
  text-align: left;
}

.balloon6 .faceicon {
  float: left;
  margin-right: -50px;
  width: 40px;
}

.balloon6 .faceicon img {
  width: 100%;
  height: auto;
  border-radius: 50%;
}

.balloon6 .chatting {
  width: 100%;
  text-align: left;
}

.says {
  display: inline-block;
  position: relative;
  margin: 0 0 0 50px;
  padding: 10px;
  max-width: 60%;
  border-radius: 12px;
  background: #fff;
}

.says:after {
  content: "";
  display: inline-block;
  position: absolute;
  top: 15px;
  left: -19px;
  border: 8px solid transparent;
  border-right: 18px solid #fff;
  -webkit-transform: rotate(35deg);
  transform: rotate(35deg);
}

.says p {
  margin: 0;
  padding: 0;
  color: #2A2A2A;
  font-size: 1.3em;
}

.mycomment {
  margin: 10px 0;
  color: #2A2A2A;
}

.mycomment p {
  display: inline-block;
  position: relative;
  margin: 0 10px 0 0;
  padding: 8px;
  max-width: 250px;
  border-radius: 12px;
  background: #30e852;
  font-size: 15px;
  color: #2A2A2A;
  font-size: 1.3em;
}

.mycomment p:after {
  content: "";
  position: absolute;
  top: 3px;
  right: -19px;
  border: 8px solid transparent;
  border-left: 18px solid #30e852;
  -webkit-transform: rotate(-35deg);
  transform: rotate(-35deg);
}

.click-show {
  text-align: center;
  background: #1c1e2047;
  display: inline-table;
  padding: 1%;
  position: absolute;
  right: 46%;
  font-size: 1.8em;
  border-radius: 18px;
  cursor: pointer;
  backdrop-filter: saturate(180%) blur(20px);
  user-select: none;
  animation-name: click-show-anime;
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
  animation-direction: alternate;
  animation-duration: 1.5s;
}

#aicy-footer {
  border-radius: 10px;
  margin-left: 5px;
  margin-right: 5px;
  padding-left: 10px;
  padding-right: 10px;
  padding-top: 3px;
  padding-bottom: 3px;
}

#aicy-footer:hover {
  background: var(--nav-focus);
}

#mobile {
  display: none;
}

#pc {
  display: block;
}

.preference-status {
  display: none;
  background: var(--accent);
  position: absolute;
  right: 0px;
  top: 0;
  padding-top: 4px;
  border-radius: 400008px;
  color: #ffff;
  font-size: 1.3em;
  padding-bottom: 5px;
  padding-left: 20px;
  padding-right: 20px;
  box-shadow: var(--shadow);
  z-index: 5000;
}

.preference-status::before {
  content: "";
  position: absolute;
  top: -30px;
  left: 64%;
  margin-left: -15px;
  border: 15px solid transparent;
  border-bottom: 15px solid var(--accent);
}

.preference-side {
  padding: 1%;
  width: 20%;
  margin: auto;
  margin-left: 3%;
}

.preference {
  background: var(--modal);
  margin: auto;
  border-radius: 38px 38px 0px 0px;
  border: var(--border);
  box-shadow: var(--hover-shadow);
}

.preference-title {
  font-size: 1.5em;
  text-align: center;
  margin-bottom: 1%;
  margin-top: 1%;
}

.preference-contents {
  margin: auto;
  background: var(--background-secondary);
  border-radius: 0px 0px 38px 38px;
  border-left: var(--border);
  border-bottom: var(--border);
  border-right: var(--border);
  box-shadow: var(--hover-shadow);
}

input[type="checkbox"]:focus,
input[type="radio"]:focus {
  outline: none !important;
}

label {
  user-select: none;
}

#white,
#dark,
#special,
#anime-true,
#anime-false {
  transform: scale(1.5);
  margin-left: 3%;
  margin-right: 2%;
  display: none;
}

.preference-main-title {
  font-size: 1.2em;
  font-family: HeadingFonts;
}

.preference-img {
  display: flex;
  width: 100%;
  text-align: center;
  margin-left: 15px;
}

.preference-img li {
  margin-right: 20px;
}

.preference-img img,.preference-img video {
  border-radius: 18px;
  cursor: pointer;
  box-shadow: var(--shadow);
  transition: 0.3s;
}

.preference-img-selected {
  outline: 3px solid var(--accent) !important;
}

.preference-submit {
  background: var(--accent);
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 25px;
  padding-right: 25px;
  border-radius: 5000px;
  display: inline;
  cursor: pointer;
  user-select: none;
  border: 3px solid var(--accent);
  box-shadow: var(--shadow);
  color: #fff;
}

.preference-submit:hover {
  background: var(--site-background);
  color: var(--main-text);
  border: 3px solid var(--accent);
  box-shadow: var(--hover-shadow);
}

.preference-close {
  position: absolute;
  top: 3px;
  font-size: 2em;
  color: var(--accent);
  border-radius: 50%;
  padding-left: 10px;
  padding-right: 10px;
  padding-top: 4px;
  padding-bottom: 4px;
  cursor: pointer;
  margin: auto;
  margin-top: 8px;
  z-index: 500;
}

.preference-close:hover {
  background: var(--background-primary);
  color: red;
}

.modals {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 70px;
  left: 0;
  backdrop-filter: blur(20px);
  display: none;
  z-index: 500;
}

.fadeout {
  animation: fadeOut 1s;
  animation-fill-mode: both;
}

.preference-end {
  border-top: var(--border);
  margin-top: 20px;
  padding-top: 15px;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  padding-bottom: 15px;
  padding-left: 20px;
  padding-right: 20px;
  background: var(--modal);
  border-radius: 0px 0px 37px 37px;
}

.preference-etc {
  background: var(--button-background);
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 20px;
  padding-right: 20px;
  border-radius: 5000px;
  display: inline;
  margin-right: 10px;
  cursor: pointer;
  user-select: none;
  box-shadow: var(--shadow);
  border: 3px solid var(--button-background);
}

.preference-etc:hover {
  background: var(--accent);
  border: 3px solid var(--accent);
  color: #fff;
}

.preference-main {
  padding-top: 20px;
  padding-left: 30px;
  padding-right: 30px;
}

.preference-modal {
  box-shadow: rgb(0 0 0 / 56%) 0px 22px 70px 4px;
  width: 50%;
  border-radius: 38px;
  position: fixed;
  animation: modal 0.5s;
}

.modals-close {
  animation: modal-close 0.5s;
}

.preference-icon {
  text-align: center;
  border-radius: 50%;
}

.preference-icon-img {
  border: 3px solid var(--accent);
  border-radius: 50%;
  background: var(--modal);
  box-shadow: var(--shadow);
}

#setup {
  display: none;
  background-color: var(--nav-focus);
  color: var(--main-text);
  transform: scale(1.05);
  margin-right: 20px;
  pointer-events: none;
}

#setup i {
  color: var(--main-text);
}

#dark-change {
  display: none;
}

#white-change {
  display: block;
}

#dark-change-pc {
  display: none;
}

#white-change-pc {
  display: inline-block;
}

#saved {
  transition: 1s;
}

#preference-modal-open {
  transition: 2s;
  z-index: 5000;
margin-right: 10px;
}

#anime-config,
#preference-themes,
#preference-themes-end,
#preference-anime-end {
  display: none;
}

.preference-list {
  width: 75%;
  margin: auto;
  margin-top: 20px;
  margin-bottom: 20px;
  box-shadow: var(--shadow);
}

.preference-list li {
  border-bottom: 2px solid var(--accent);
  padding-top: 10px;
  padding-bottom: 10px;
  font-size: 1.2em;
  margin: auto;
  text-align: center;
  background: var(--modal);
  cursor: pointer;
}

.preference-list li:hover {
  background: var(--background-primary);
}

#config-top {
  border-top: 2px solid var(--accent);
}

.preference-submit #pc {
  display: inline-block;
}

#link-true {
  pointer-events: all !important;
}

#mobile-config {
  display: none;
}

.aicy-icon {
  border-radius: 50%;
  border: 5px solid var(--accent);
  background: rgba(0, 0, 0, 0) linear-gradient(to right, rgb(252, 92, 125), rgb(106, 130, 251)) repeat scroll 0% 0%;
  box-shadow: var(--shadow);
}

.news-messeage {
  background: var(--site-background);
  color: var(--main-text);
  width: 50%;
  margin: auto;
  text-align: center;
  font-size: 1.3em;
  padding-top: 30px;
  padding-bottom: 30px;
  border-radius: 38px;
  border: 4px dashed var(--focus);
  box-shadow: var(--shadow);
}
.navbar-item.is-active .navbar-dropdown, .navbar-item.is-hoverable:focus .navbar-dropdown, .navbar-item.is-hoverable:focus-within .navbar-dropdown, .navbar-item.is-hoverable:hover .navbar-dropdown {
display: none;
}
.fa-solid.fa-face-thinking {
  color: #f4be9b;
  font-size: 3em;
}
.search {
  margin-left: 20%;
  margin-right: 20%;
  background: var(--background-primary);
  padding-top: 30px;
  padding-left: 50px;
  padding-bottom: 30px;
  font-size: 1.5em;
  border-radius: 2em;
  text-align: center;
  padding-right: 50px;
  box-shadow: var(--shadow);
  border: var(--border);
}
.search hr {
  background-color: var(--border-color);
  margin: auto;
  height: 1px;
  margin-top: 20px;
  margin-bottom: 20px;
}
.fixed {
  position: sticky;
  top: 80px;
  z-index: 4;
  background: var(--nav-background);
  backdrop-filter: saturate(180%) blur(20px);
}
.input-search {
  display: flex;
  justify-content: end;
  align-items: center;
  margin-right: 10px;
  margin-top: -5px;
}
.search a {
  font-size: 25px;
}
.search p {
  font-size: 18px;
}
i::before,i::after {
  display: inline-block;
}
pre code.hljs {
  border: none;
  background: transparent;
  box-shadow: none;
  color: var(--opacity-color);
}
.emoji {
  width: 1em;
  margin-bottom: -3px;
}
.whoisarea {
  border-radius: 2em;
  border: var(--border);
  box-shadow: var(--shadow);
  background: var(--modal);
  font-size: 14px;
  padding: 20px;
  max-height: 600px;
  overflow: auto;
  text-align: left;
}
ul li::before {
  content: "\e122";
  font-family: "Font Awesome 6 Pro";
  font-weight: 400;
  margin-right: 10px;
  color: var(--accent);
}
.preference-list li::before,.preference-img li::before {
  content: "";
  margin-right: 0px;
}
.toc-help {
margin: auto;
background: var(--modal);
padding: 50px;
border: var(--border);
margin-bottom: 30px;
border-radius: 2em;
box-shadow: var(--hover-shadow);
}
.toc-help h2 {
  border-bottom: 3px solid var(--accent);
  padding-bottom: 3px;
  width: 8em;
  margin: auto;
  text-align: center;
}
.toc-help a {
  display: contents;
}
.toc-help li {
  display: flex;
}
.toc-help a::after {
  display: none;
}
.toc-fixed {
  display: none;
  position: fixed;
  left: 20px;
  z-index: 400;
  top: 200px;
  font-size: 1.3em;
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