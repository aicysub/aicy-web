<?php
include("/hdd/aic/head.php");
?>
<title>あいしぃーのお誕生日 - あいしぃーのさーばー</title>
<script src="/owner/aicy/birthday.js"></script>
<script>
    $(document).ready(function(){
loadCSS( "/css/dark/<?php echo $css_v?>", document.getElementById("loadcss") );
loadCSS( "/css/special/<?php echo $css_v?>", document.getElementById("loadcss") );
setTimeout(function(){loadCSS( "/owner/aicy/birthday.css<?php echo $css_v?>", document.getElementById("loadcss") );
    aicy_anime();
},900);

});
    </script>
    <div class="birthday">
      <img src="/favicon.ico" class="aicy-icon" /><br><br>
      <p class="birthday-subtext">あいしぃー</p><br>
      <p id="fade-1">7月6日が誕生日の人</p>
      <div class="birthday-box">
      AIC_Groupの代表(?)で色々鯖運営してます<br>非営利団体ですのでお金は取っていません<br>寄付は受け付けてますのでお願いします(?)<br>また、あいしぃーのさーばー・MIC(自然災害、障害情報鯖)管理人です<br>入ってねー!!<br>不定期でみんなのサーバーに遊びに行きますので、皆さん、よろしくね!!<br>サーバー運営も受け付けてますので、詳しくは、DMまでー!
</div>
</div>
<h2 class="title h2">運営も見てねー</h2>
<div class="admin-more aicy">
    <?php include('/hdd/aic/admin/list.php'); ?>
    </div>
    </div>