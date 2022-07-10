<?php header('Content-Type: text/javascript; charaset=utf-8');
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', FALSE );
header('Pragma:no-cache');
date_default_timezone_set('asia/tokyo'); clearstatcache(); 
echo 'setTimeout(function(){
  let width = window.innerWidth;
if (width < 1023) {
  // tablet
  loadCSS( "/css/mobile/?v='.date("Y-m-d.h").'", document.
  getElementById("loadcss") );
}
},600);';
echo "function setup() {
          document.title = 'セットアップ読み込み中…';
          document.cookie = 'access=; max-age=0';
          const cookies = document.cookie.split(';')
          for (let i = 0; i < cookies.length; i++) {
            const cookie = cookies[i]
            const eqPos = cookie.indexOf('=')
            const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie
            document.cookie = name + '=;max-age=0'
          }
          ";
          $ua = $_SERVER['HTTP_USER_AGENT'];
          if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
              echo '$(".navbar").fadeOut();
              $(".footers").fadeOut(); 
              $(".modals").load("/preference/first/?v='.date("Y-m-d.h").' .preference-modal"); 
              setTimeout(function(){
                        $(".preference-main").css("height","calc("+window.innerHeight+"px - 175px"); 
                    },900);
                    ';
          } elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
              echo '$(".navbar").fadeOut();
              $(".footers").fadeOut(); 
              $(".modals").load("/preference/first/?v='.date("Y-m-d.h").' .preference-modal"); 
              setTimeout(function(){
                        $(".preference-main").css("height","calc("+window.innerHeight+"px - 175px"); 
                    },900);
                    ';
          } elseif ((strpos($ua, 'DoCoMo') !== false) || (strpos($ua, 'KDDI') !== false) || (strpos($ua, 'SoftBank') !== false) || (strpos($ua, 'Vodafone') !== false) || (strpos($ua, 'J-PHONE') !== false)) {
              echo '$(".navbar").fadeOut();
              $(".footers").fadeOut(); 
              $(".modals").load("/preference/first/?v='.date("Y-m-d.h").' .preference-modal"); 
              setTimeout(function(){
                        $(".preference-main").css("height","calc("+window.innerHeight+"px - 175px"); 
                    },900);
                    ';
          }else {
            echo '$(".modals").load("/preference/first/?v='.date("Y-m-d.h").' .preference-modal"); ';
          }
          echo "
          setTimeout(function(){
            $('.bread').css('opacity','0');
            $('a').css('pointer-events', 'none').attr('tabindex', -1);
          $('#top').fadeOut(1000);
          $('#blog').fadeOut(1000);
          $('#events').fadeOut(1000);
          $('#admin').fadeOut(1000);
          $('#etc').fadeOut(1000);
          $('#pc').fadeOut(1000);
          $('#loadings').fadeIn(400);
          $('.preference-main').fadeOut(1000);
          history.pushState(null, null, '/setup/');
        },800);
        setTimeout(function(){
          $('.modals').fadeIn(1000); 
          document.title = 'セットアップ - あいしぃーのさーばー';
          $('#setup-1').fadeIn(1000); 
";
$ua = $_SERVER['HTTP_USER_AGENT'];
if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
    echo '$(".navbar").fadeOut();
    $(".footers").fadeOut(); 
    $(".modals").load("/preference/first/ .preference-modal"); 
    setTimeout(function(){
              $(".preference-main").css("height","calc("+window.innerHeight+"px - 175px"); 
          },900);
          ';
} elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
    echo '$(".navbar").fadeOut();
    $(".footers").fadeOut(); 
    $(".modals").load("/preference/first/ .preference-modal"); 
    setTimeout(function(){
              $(".preference-main").css("height","calc("+window.innerHeight+"px - 175px"); 
          },900);
          ';
} elseif ((strpos($ua, 'DoCoMo') !== false) || (strpos($ua, 'KDDI') !== false) || (strpos($ua, 'SoftBank') !== false) || (strpos($ua, 'Vodafone') !== false) || (strpos($ua, 'J-PHONE') !== false)) {
    echo '$(".navbar").fadeOut();
    $(".footers").fadeOut(); 
    $(".modals").load("/preference/first/ .preference-modal"); 
    setTimeout(function(){
              $(".preference-main").css("height","calc("+window.innerHeight+"px - 175px"); 
          },900);
          ';
        }
          echo "
          jQuery(function($) {
          $( '.preference-modal' ).draggable( {
        containment: '#modals',
            scroll: false,
        } );
        ";
        echo '        checkWidth = function(){
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
      });';
        echo "
          $( '.preference-modal' ).resizable();
        });
        },2500);
          window.scroll({top: 0, behavior: 'smooth'});
          $('.footers').css('bottom', '-200px');
          setTimeout(function(){
          $('.footers').css('bottom', '-200px');
          },800);
          setTimeout(function(){
            $('#setup').fadeIn(1000);
          },999);
          setTimeout(function(){
            $('#setup').css('display', 'flex');
            },1100);
        }";
        echo "
        function config() {
            $('.modals').load('/preference/?v=".date('Y-m-d.h')." .preference-modal'); 
            ";
            $ua = $_SERVER['HTTP_USER_AGENT'];
            if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
                // スマートフォンからアクセスされた場合
                echo '$(".navbar").fadeOut();
                $(".footers").fadeOut(); 
                setTimeout(function(){
                    $(".preference-main").css("height","calc("+window.innerHeight+"px - 175px"); 
                    $("#setup-3").css("display","none");
                    $("#preference-list").css("padding-top",""+$(".preference-contents").height() / 4+"px"); 
                    $("#preference-list").css("padding-bottom",""+$(".preference-contents").height() / 4+"px"); 
                    $(".preference").css("top","0");
                },300);
                      ';
            } elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
                echo '$(".navbar").fadeOut();
                $(".footers").fadeOut(); 
                setTimeout(function(){
                    $(".preference-main").css("height","calc("+window.innerHeight+"px - 175px"); 
                    $("#setup-3").css("display","none");
                    $("#preference-list").css("padding-top",""+$(".preference-contents").height() / 4+"px"); 
                    $("#preference-list").css("padding-bottom",""+$(".preference-contents").height() / 4+"px"); 
                    $(".preference").css("top","0");
                },300);
                      ';
            } elseif ((strpos($ua, 'DoCoMo') !== false) || (strpos($ua, 'KDDI') !== false) || (strpos($ua, 'SoftBank') !== false) || (strpos($ua, 'Vodafone') !== false) || (strpos($ua, 'J-PHONE') !== false)) {
                echo '$(".navbar").fadeOut();
                $(".footers").fadeOut(); 
                setTimeout(function(){
                    $(".preference-main").css("height","calc("+window.innerHeight+"px - 175px"); 
                    $("#setup-3").css("display","none");
                    $("#preference-list").css("padding-top",""+$(".preference-contents").height() / 4+"px"); 
                    $("#preference-list").css("padding-bottom",""+$(".preference-contents").height() / 4+"px"); 
                    $(".preference").css("top","0");
                },300);
                      ';  
            }
            echo "
            $('.bread').css('opacity','0');  
            $('a').css('pointer-events', 'none').attr('tabindex', -1);
            $('.navbar-dropdown').css('display', 'none').attr('tabindex', -1);
            $('.modals').fadeIn(1000); 
            window.scroll({top: 0, behavior: 'smooth'});
            $('.footers').css('bottom', '-200px');
            setTimeout(function(){
              $('.modals').fadeIn(1000); 
          },2500);
          setTimeout(function(){
          $( '.preference-modal' ).draggable( {
        containment: '#modals',
            scroll: false,
        } );
        ";
        echo '        checkWidth = function(){
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
      });';
        echo "
        },190);
            setTimeout(function(){
            $('.footers').css('bottom', '-200px');
            },800);
            history.pushState(null, null, '/preference/');
          }
        ";
        echo "
        function preference_close() {
            $('#modals').fadeOut(300);  
            $('.preference-modal').addClass('modals-close');
             $('.footers').css('bottom', '0px'); 
                    history.pushState(null, null, $('#setup').attr('url'));
                    $('a').css('pointer-events', 'all').attr('tabindex', 1);
                    $('.navbar-dropdown').css('display', 'block').attr('tabindex', 1);
                    $('.bread').css('opacity','1');   
                    $('.preference-status').fadeOut(1000); 
                    setTimeout(function(){
                    $('.preference-modal title').remove();
                  },300);
                    setTimeout(function(){
                        ";
                        $ua = $_SERVER['HTTP_USER_AGENT'];
                        if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
                            echo '$(".navbar").fadeIn();
                            $(".footers").fadeIn(); 
                            ';
                        } elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
                            echo '$(".navbar").fadeIn();
                            $(".footers").fadeIn(); 
                            ';
                        } elseif ((strpos($ua, 'DoCoMo') !== false) || (strpos($ua, 'KDDI') !== false) || (strpos($ua, 'SoftBank') !== false) || (strpos($ua, 'Vodafone') !== false) || (strpos($ua, 'J-PHONE') !== false)) {
                            echo '$(".navbar").fadeIn();
                            $(".footers").fadeIn(); 
                                  ';  
                        }
                        echo "
                    $('.preference-modal').remove();
                  },300);
                  setTimeout(function(){
                    $('#modals').css('display','none');  
                },300);
            setTimeout(function(){
            $('#modals').fadeOut(300);  
        },999);
    }
            ";
        ?>