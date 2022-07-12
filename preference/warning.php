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
    
<div class="preference">
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
    <style>   .preference-close {   left: 20px;   }</style><title>セットアップをやり直す</title>
<h2 class="preference-title">  
 すべての設定を消去してもよろしいですか？</h2>
</div>
<div class="preference-contents">
<div class="preference-main" id="preference-list">
  <p>テーマ設定など、すべての設定が含まれます</p>
        <div id="preference-setup-modal-end" style="display: flex;justify-content: flex-end;align-items: center;padding-bottom: 15px;">
    
        <p class="preference-submit" onclick="exit_modal_setup()" style="margin-right: 10px;">はい</p> <p class="preference-etc" onclick="exit_setup()" style="margin-right: 0px;">いいえ</p> 
  </div>
    
</div>