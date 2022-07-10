<meta name="description" content="あいしぃーのサーバー" />
<meta property="og:type" content="HP" />
<meta property="og:title" content="あいしぃーのご紹介" />
<meta property="og:description" content="鯖主のあいしぃーについて" />
<meta property="og:site_name" content="あいしぃーのサーバー" />
<meta property="og:image" content="https://aic-group.sytes.net/images/aic.png" />
<title>あいしぃー - あいしぃーのサーバー</title>
<?php date_default_timezone_set("Asia/Tokyo");
  if( date("Y-m-d") >= "2022-07-6" ){
    include('/hdd/aic/head.html');
    ob_start();
    echo '
    <ol itemscope class="bread none" itemtype="https://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope
          itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="/">
            <span itemprop="name">ホーム</span>
        </a>
        <meta itemprop="position" content="1" />
        <li itemprop="itemListElement" itemscope
          itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="/owner/aicy/">
            <span itemprop="name">あいしぃー</span>
        </a>
        <meta itemprop="position" content="2" />  
    </li>
    </ol>
    <style>
      #admin {
        background-color: var(--nav-focus);
        color: var(--main-text);
        transform: scale(1.05);
      }
      #aicy-footer {
        background-color: var(--nav-focus);
        color: var(--main-text);
        transform: scale(1.05);
        pointer-events: none;
        outline: none !important;
      }
      #admin i {
        color: var(--main-text);
      }
      </style>
    <div class="main">
    <div style="text-align: center;">
    <img src="/favicon.ico" style="width: 20%; border: 3px solid #906862; border-radius: 50%; box-shadow: 0 3px 3px rgb(0 0 0/12%),0 2px 3px -2px rgb(0 0 0/1%);">
    </div>
    <h2 class="title h2" style="text-align: center;">あいしぃー</h2>
    <p style="text-align: center;">AIC_Group・あいしぃーのサーバー代表</p>
    ';
    include ('/hdd/aic/edit.php');
    echo '
    <br>
    <p class="unei">AIC_Groupの代表(?)で色々鯖運営してます<br>非営利団体ですのでお金は取っていません<br>寄付は受け付けてますのでお願いします(?)<br>また、あいしぃーのさーばー・MIC(自然災害、障害情報鯖)管理人です<br>入ってねー!!<br>不定期でみんなのサーバーに遊びに行きますので、皆さん、よろしくね!!<br>サーバー運営も受け付けてますので、詳しくは、DMまでー!<h2 class="title h2" style="text-align: center;">運営も見てねー</h2>
    <div class="admin-more aicy">
    ';
    include('/hdd/aic/admin/list.php');
    echo '
    </div>
    </div>
    <div class="modals" id="modals">
    ';
  }else {
    include('/hdd/aic/owner/aicy/birthday-page.php');
  }