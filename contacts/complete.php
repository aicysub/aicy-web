<?php
include('/hdd/aic/head.html');
ob_start();
$check = ''.$_POST['contact1'].''.$_POST['contact2'].''.$_POST['contact3'].''.$_POST['contact4'].''.$_POST['contact5'].''.$_POST['contact6'].''.$_POST['contact7'].''.$_POST['contact8'].''.$_POST['contact9'].''.$_POST['contact10'].''.$_POST['contact11'].''.$_POST['contact12'].''.$_POST['contact13'].''.$_POST['contact14'].''.$_POST['contact15'].''.$_POST['contact16'].''.$_POST['contact17'].''.$_POST['contact18'].''.$_POST['contact19'].'';
$path ="/hdd/aic/contacts/data/".$_POST['contact1'].".txt";
$content = '=== お問い合わせ ==='.$_POST['contact1'].'さんから'.$_POST['contact3'].'についてのお問い合わせ'.$_POST['contact4'].''.$_POST['contact5'].''.$_POST['contact6'].''.$_POST['contact7'].''.$_POST['contact8'].''.$_POST['contact10'].''.$_POST['contact12'].''.$_POST['contact14'].''.$_POST['contact16'].''.$_POST['contact17'].''.$_POST['contact18'].'';
$time = date("Y/m/d H:i:s");
$time_file = date("Y-m-d-H-i-s");
$mail_old = $_POST['contact2'];
$mail = strstr($mail_old,'@',false); 
$name = $_POST['contact1'];
$command_old = "curl -X POST -H \"Content-Type: application/json\" -d '{\"content\": null,\"embeds\": [{\"title\": \"お問い合わせ\",\"description\": \"".$_POST['contact3']."についてのお問い合わせ\\nhttps://aic-group.sytes.net/contacts/case/$time_file/\",\"url\": \"https://aic-group.sytes.net/contacts/\",\"color\": 5814783,\"author\": {\"name\": \"".$_POST['contact1']."さんから\"}}],\"attachments\": []}' https://discord.com/api/webhooks/974727841730138193/KXgzwghhyFtOIloiy0lqfWz6k4WNuK4TUylRfz5oD6bzSkh66xjXknVP1UQ-7K-GEp5R";
    if (preg_match("/サイトのエラー/", $_POST['contact3'])) {
        $case_name = 'エラーが発生したリンク';
        $case_content = $_POST['contact3'];
        $case_content1 = '<a href="'.$_POST['contact4'].'" target="_blank">'.$_POST['contact4'].'</a>';
    }
    if (preg_match("/サイトの表示バグ/", $_POST['contact3'])) {
        $case_name = 'バグが発生したリンク';
        $case_content = $_POST['contact3'];
        $case_content1 = '<a href="'.$_POST['contact5'].'" target="_blank">'.$_POST['contact5'].'</a>';
    }
    if (preg_match("/文章修正/", $_POST['contact3'])) {
        $case_name = '修正して欲しいページのリンク';
        $case_content = $_POST['contact3'];
        $case_content1 = '<a href="'.$_POST['contact5'].'" target="_blank">'.$_POST['contact5'].'</a>';
    }
    if (preg_match("/Web問い合わせのその他/", $_POST['contact3'])) {
      $case_name = 'その他';
      $case_content = $_POST['contact3'];
      $case_content1 = '<a href="#etc">詳細はこちら</a>';
      $updir = "/hdd/aic/contacts/case/images/";
      $tmp_file = @$_FILES['contact10']['tmp_name'];
      $copy_file = date("Ymd-His") . ".$file_type" ;
      is_uploaded_file($_FILES["contact10"]["tmp_name"]);
      move_uploaded_file($tmp_file,"$updir/".$time_file.".png");
      $etc = '<h2 id="etc" class="h2 title">詳細内容</h2><br><div class="box"><p style="text-align:center;">'.$_POST['contact8'].'<br>'.$_POST['contact9'].'</p>';
  }
    $create = '
<?php include_once("/hdd/aic/head.html");
ob_start();
?>
<div class="contents">
<title>'.$name.'さんからのお問い合わせ - あいしぃーのさーばー</title>
<ol itemscope class="bread none preview" itemtype="https://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope
 itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="/">
   <span itemprop="name">ホーム</span>
    </a>
    <meta itemprop="position" content="1" />
  </li>
  <li itemprop="itemListElement" itemscope
 itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="/contacts/">
        <span itemprop="name">お問い合わせ</span>
    </a>
    </li>
    <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <meta itemprop="position" content="3" />
    <a itemprop="item" href="/contacts/case/'.$time_file.'/">
        <span itemprop="name">'.$name.'さんからのお問い合わせ（'.$time.'）</span>
    </a>
  </li>
</ol>
<style>
  #etc {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
  }
  #contacts {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
    pointer-events: none;
  }
  #etc i,#contacts i {
    color: var(--main-text);
  }
  </style>
<div class="main preview-back">
<div class="unei preview-back">
<table border="0">
    <tbody><tr>
      <th>お問い合わせ内容</th>
      <th>'.$case_name.'</th>
      <th>お問い合わせ日時</th>
    </tr>
    <tr>
      <td>'.$case_content.'</td>
      <td>'.$case_content1.'</td>
      <td>'.$time.'</td>
      </tr>
      <tr>
      <th>お名前</th>
      <th>メールアドレス</th>
    </tr>
    <tr>
    <td>'.$name.'</td>
    <td>*******'.$mail.'</td>
    </tr>
  </tbody></table>
  <table class="mobile-table" border="0">
    <tbody><tr>
      <th>お問い合わせ内容</th>
      <td>'.$case_content.'</td>
      <th>'.$case_name.'</th>
      <td>'.$case_content1.'</td>
      <th>お問い合わせ日時</th>
      <td>'.$time.'</td>
    </tr>
    <tr>
      <th>お名前</th>
      <td>'.$name.'</td>
      <th>メールアドレス</th>
      <td>*******'.$mail.'</td>
    </tr>
  </tbody></table>
  </div>
  <br>
  '.$etc.'
</div>
</div>
<style>
.footers h2 {
display: none;
}
</style>
';
touch('/hdd/aic/contacts/case/'.$time_file.'.php');
    if (preg_match('/bit.ly/', $content)) {
    $command = "";
    $message = 'スパムのおそれがあります。';
    $title = '送信できませんでした - あいしぃーのさーばー';
    $color = 'red';
    echo '<title>'.$title.'</title>  <div class="main">
    <div class="box"><p style="text-align:center;border: 10px solid '.$color.'">'.$message.'</p>';
    unlink('/hdd/aic/contacts/case/'.$time_file.'.php');
    $preview = '/hdd/aic/contacts/error.php';
        echo '</div>      <style>
      .preview {
display:none !important;
box-shadow: none !important;
}
.preview-back {
background: transparent !important;
border: none !important;
box-shadow: none !important;
}
      </style>  <div class="open-box">
    <input type="checkbox" id="switch" class="on-off" />
    <label for="switch" style="text-align:center;" type="submit" id="プレビュー" class="open-label download title">プレビュー</label>
    <div class="open">
        <div class="yt-log">';
    include($preview);
    return FALSE;
} else {
    $file_open = fopen( "/hdd/aic/contacts/case/".$time_file.".php", "w");
    $command = $command_old;
    $title = '送信が完了しました！ - あいしぃーのさーばー';
    $bread = '送信が完了しました！';
    $color = 'green';
    $icon = 'circle-check';
    $more = '<p style="text-align:center;"><a href="/contacts/case/'.$time_file.'/">詳細はこちら</a></p>';
    $preview = '/hdd/aic/contacts/case/'.$time_file.'.php';
}
if(!isset($_POST['contact1'])){
    $command = "";
    $message = '名前またはメールアドレスが入力されていません。';
    $title = '送信できませんでした - あいしぃーのさーばー';
    $bread = '送信できませんでした';
    $color = 'red';
    $icon = 'triangle-exclamation';
    $more = '';
    echo '<title>'.$title.'</title> <br> <div class="contents"> <div class="main">';
    echo '    <div class="box" style="border: 10px solid '.$color.'"><p style="text-align:center;"> <i style="color '.$color.'" class="fa-solid fa '.$icon.'"></i> '.$message.'</p> '.$more.'<br><p  style="text-align:center;" ><a href="/contacts/">やり直す</a></p>';
    unlink('/hdd/aic/contacts/case/'.$time_file.'.php');
    $preview = '/hdd/aic/contacts/error.php';
        echo '</div>      <style>
      .preview {
display:none !important;
box-shadow: none !important;
}
.preview-back {
background: transparent !important;
border: none !important;
box-shadow: none !important;
}
      </style>  <div class="open-box">
    <input type="checkbox" id="switch" class="on-off" />
    <label for="switch" style="text-align:center;" type="submit" id="プレビュー" class="open-label download title">プレビュー</label>
    <div class="open">
        <div class="yt-log">';
    include($preview);
    return FALSE;
}else{

$file_open = fopen( "/hdd/aic/contacts/case/".$time_file.".php", "w");    $command = $command_old;
    $message = '送信が完了しました！';
    $title = '送信が完了しました！ - あいしぃーのさーばー';
    $bread = '送信が完了しました！';
    $color = 'green';
    $icon = 'circle-check';
    $more = '<p style="text-align:center;"><a href="/contacts/case/'.$time_file.'/">詳細はこちら</a></p>';
    $preview = '/hdd/aic/contacts/case/'.$time_file.'.php';
}
if(!isset($_POST['contact2'])){
    $command = "";
    $message = '名前またはメールアドレスが入力されていません。';
    $title = '送信できませんでした - あいしぃーのさーばー';
    $bread = '送信できませんでした';
    $color = 'red';
    $icon = 'triangle-exclamation';
    $more = ' ';
    echo '<title>'.$title.'</title> <br> <div class="contents"> <div class="main">';
    echo '    <div class="box" style="border: 10px solid '.$color.'"><p style="text-align:center;"> <i style="color '.$color.'" class="fa-solid fa '.$icon.'"></i> '.$message.'</p> '.$more.'<br><p  style="text-align:center;" ><a href="/contacts/">やり直す</a></p>';
    unlink('/hdd/aic/contacts/case/'.$time_file.'.php');
    $preview = '/hdd/aic/contacts/error.php';
        echo '</div>      <style>
      .preview {
display:none !important;
box-shadow: none !important;
}
.preview-back {
background: transparent !important;
border: none !important;
box-shadow: none !important;
}
      </style>  <div class="open-box">
    <input type="checkbox" id="switch" class="on-off" />
    <label for="switch" style="text-align:center;" type="submit" id="プレビュー" class="open-label download title">プレビュー</label>
    <div class="open">
        <div class="yt-log">';
    include($preview);
    return FALSE;
}else{

$file_open = fopen( "/hdd/aic/contacts/case/".$time_file.".php", "w");    $command = $command_old;
   $title = '送信が完了しました！ - あいしぃーのさーばー';
   $bread = '送信が完了しました！';
   $color = 'green';
   $icon = 'circle-check';
   $more = '<p style="text-align:center;"><a href="/contacts/case/'.$time_file.'">詳細はこちら</a></p>';
   fwrite( $file_open, "$create");
   fclose($file_open);
   $preview = '/hdd/aic/contacts/case/'.$time_file.'.php';
}
@exec($command,$output);
?>
<div class="contents">
    <title><?php echo $title;?></title>
<ol itemscope class="bread none" itemtype="https://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="/">
        <span itemprop="name">ホーム</span>
    </a>
    <meta itemprop="position" content="1" />
  </li>
  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="/contacts/">
        <span itemprop="name">お問い合わせ</span>
    </a>
    </li>
    <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <meta itemprop="position" content="3" />
    <a itemprop="item" href="<?php echo $_SERVER['REQUEST_URI']; ?>">
        <span itemprop="name"><?php echo $bread; ?></span>
    </a>
  </li>
</ol>
<style>
  #etc {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
  }
  #contacts {
    background-color: var(--nav-focus);
    color: var(--main-text);
    transform: scale(1.05);
    pointer-events: none;
  }
  #events i,#contacts i {
    color: var(--main-text);
  }
  </style>
    <div class="main">
    <div class="box" style="border: 10px solid <?php echo $color;?>"><p style="text-align:center;"> <i style="color:<?php echo $color;?>" class="fa-solid fa-<?php echo $icon;?>"></i> <?php echo $message;?></p>
    <?php echo $more;
    ?>
    <style>
      .preview {
display:none !important;
box-shadow: none !important;
}
.preview-back {
background: transparent !important;
border: none !important;
box-shadow: none !important;
}
      </style>
    </div>
    <div class="open-box">
    <input type="checkbox" id="switch" class="on-off" />
    <label for="switch" style="text-align:center;" type="submit" id="プレビュー" class="open-label download title">プレビュー</label>
    <div class="open">
        <div class="yt-log">
    <?php
include($preview);
    ?>
    </div></div></div>
    <div class="modals" id="modals">