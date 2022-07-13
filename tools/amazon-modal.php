<div class="preference-modal">
  <style>
    .contents {
      backdrop-filter: blur(20px);
      background: var(--site-background);
    }
    #saved {
      opacity: 0;
    }
    </style>
    <script>
      $('#anime-none-change-pc').text(' アニメ ON');
      $('#dark-change-pc').text(' ダークモード');
      $('#anime-change-pc').text(' アニメ OFF');
      $('#white-change-pc').text(' ホワイトモード');
      $('#anime-none-change').text(' アニメ ON');
      $('#dark-change').text(' ダークモード');
      $('#anime-change').text(' アニメ OFF');
      $('#white-change').text(' ホワイトモード');
      </script>
<i class="fa-solid fa-xmark preference-close" onclick="preference_close()" id="preference-close"></i>
<div class="preference">
  <?php  if (PHP_OS === 'Darwin') {
      echo "  <style>   .preference-close {   right: 20px;   }</style>";
  } else {
    echo "  <style>   .preference-close {   left: 20px;   }</style>";
  }
  ?>
  <script>
        $(document).ready(function(){
          setTimeout(function() {
           checkWidth = function(){
          var browserWidth = $(window).width();
          var boxW = $(".preference-modal").width();
          var plusPxW = ((browserWidth - boxW)/2);
          $(".preference-modal").css({"left": plusPxW + "px"});
      };
       
      checkHeight = function(){
          var browserHeight = $(window).height();
          var boxH = $(".preference-modal").height();
          var plusPxH = ((browserHeight - boxH)/2);
          $(".preference-modal").css({"top": plusPxH - 70 + "px"});
      };
      $(function(){
          checkWidth();
          $(window).resize(checkWidth);
      });
       
      $(function(){
          checkHeight();
          $(window).resize(checkHeight);
      })
    }, 499);
    });
    </script>
<title>国内倉庫発行とは？ - あいしぃーのさーばー</title>
<h2 class="preference-title">国内倉庫発行とは？</h2>
</div>
<div class="preference-contents">
<div class="preference-main">
  <p class="preference-main-title">国内倉庫発行とは？</p><br>
  <p>国内倉庫発行とは、国内（日本）にあるAmazonの倉庫のことを指します。</p>
  <p>通常の検索では、海外商品も出るのですが怪しい商品が多いのも事実です。</p>
  <p>そこで、国内のみの商品を出せば安全（もちろん絶対ではありません。）だと思うのでこのようなツールを作りました。</p>
  <p>入力ボックスに検索したい言葉を入力していただければ、国内倉庫発行のみの商品を表示します。</p>
  <br>
</div>
</div>
