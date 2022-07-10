function isIE() {
    var userAgent = window.navigator.userAgent.toLowerCase();
    if ( userAgent.indexOf( 'msie' ) !== -1 || userAgent.indexOf( 'trident' ) !== -1 ) {
    return true;
    }
    return false;
    }
    document.addEventListener('DOMContentLoaded', function () {
    if ( isIE() ) {
    window.location.href('/ie.html')
    }
    }); 
$.ajaxSetup({

  cache: false
 });
  $('body').css('display','none');
 $(function(){
    var $footer = $('.navbar');
    if ($footer.css('position') == 'sticky') {
      var lp = 0;
      $(window).on('.navbar', function(){
        var cp = $(this).scrollTop();
        if (lp < cp) {
           $footer.css('bottom', '2%');
        } else if (lp > cp) {
            $footer.css('bottom', '15%');
        }
        lp = cp;
      });
    }
  });
  window.addEventListener("mousewheel", e => {
    { passive: false }
    if (e.deltaX === 0) {
        e.stopPropagation()
        e.preventDefault()
        window.scrollBy(e.deltaY, 0)
    }
})
  $(function(){
    var topBtn=$('#page_top');
    topBtn.hide();
  $(window).scroll(function(){
    if($(this).scrollTop()>80){
      topBtn.fadeIn("slow");
    }else{
      topBtn.fadeOut("slow");
    }
});
});
document.addEventListener('DOMContentLoaded', () => {
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('#navbar-burger'), 0);
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {
        const target = el.dataset.target;
        const $target = document.getElementById(target);
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
  
      });
    }); 
  
  });
  $("#navbar-burger").click(function () {

    $(".footers").toggleClass("footer-none");
    $("#navbarBasicExample").toggleClass("is-active");
    $("nav-menu").toggleClass("is-active");
});

!function(n){"use strict";n.loadCSS||(n.loadCSS=function(){});var o=loadCSS.relpreload={};if(o.support=function(){var e;try{e=n.document.createElement("link").relList.supports("preload")}catch(t){e=!1}return function(){return e}}(),o.bindMediaToggle=function(t){var e=t.media||"all";function a(){t.addEventListener?t.removeEventListener("load",a):t.attachEvent&&t.detachEvent("onload",a),t.setAttribute("onload",null),t.media=e}t.addEventListener?t.addEventListener("load",a):t.attachEvent&&t.attachEvent("onload",a),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(a,3e3)},o.poly=function(){if(!o.support())for(var t=n.document.getElementsByTagName("link"),e=0;e<t.length;e++){var a=t[e];"preload"!==a.rel||"style"!==a.getAttribute("as")||a.getAttribute("data-loadcss")||(a.setAttribute("data-loadcss",!0),o.bindMediaToggle(a))}},!o.support()){o.poly();var t=n.setInterval(o.poly,500);n.addEventListener?n.addEventListener("load",function(){o.poly(),n.clearInterval(t)}):n.attachEvent&&n.attachEvent("onload",function(){o.poly(),n.clearInterval(t)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:n.loadCSS=loadCSS}("undefined"!=typeof global?global:this);

function lazyLoadScript(scriptSrc) {

    var scrollFirstTime = 1;

    window.addEventListener("scroll", oneTimeFunction, false);

    function oneTimeFunction() {
        if (scrollFirstTime === 1) {

            scrollFirstTime = 0;
            var adScript = document.createElement("script");
            adScript.src = scriptSrc;

            document.body.appendChild(adScript);
            window.removeEventListener("scroll", oneTimeFunction, false);

        }
    }
}
$(function(){
  $("a[href='"+location.pathname+"']").removeAttr('href');
});
$(function(){
  $("a[href^='#']").click(function(){
  var $parent = $(this).closest('.container');
  var $index = $("button", $parent).index(this);
  var $box = $(".scroll", $parent);
  var $tareget = $("p", $box).eq($index);
  var dist = $tareget.position().top - $box.position().top;
  console.log("target:"+$tareget.position().top +" ,$box:" + $box.position().top);
  $box.stop().animate({
    scrollTop: $box.scrollTop() + dist
  });
});
});

/*! loadCSS. [c]2020 Filament Group, Inc. MIT License */
(function(w){
	"use strict";
	var loadCSS = function( href, before, media, attributes ){
		var doc = w.document;
		var ss = doc.createElement( "link" );
		var ref;
		if( before ){
			ref = before;
		}
		else {
			var refs = ( doc.body || doc.getElementsByTagName( "head" )[ 0 ] ).childNodes;
			ref = refs[ refs.length - 1];
		}

		var sheets = doc.styleSheets;
		if( attributes ){
			for( var attributeName in attributes ){
				if( attributes.hasOwnProperty( attributeName ) ){
					ss.setAttribute( attributeName, attributes[attributeName] );
				}
			}
		}
		ss.rel = "stylesheet";
		ss.href = href;
		ss.media = "only x";
		function ready( cb ){
			if( doc.body ){
				return cb();
			}
			setTimeout(function(){
				ready( cb );
			});
		}
		ready( function(){
			ref.parentNode.insertBefore( ss, ( before ? ref : ref.nextSibling ) );
		});
    	var onloadcssdefined = function( cb ){
			var resolvedHref = ss.href;
			var i = sheets.length;
			while( i-- ){
				if( sheets[ i ].href === resolvedHref ){
					return cb();
				}
			}
			setTimeout(function() {
				onloadcssdefined( cb );
			});
		};

		function loadCB(){
			if( ss.addEventListener ){
				ss.removeEventListener( "load", loadCB );
			}
			ss.media = media || "all";
		}
		if( ss.addEventListener ){
			ss.addEventListener( "load", loadCB);
		}
		ss.onloadcssdefined = onloadcssdefined;
		onloadcssdefined( loadCB );
		return ss;
	};
	if( typeof exports !== "undefined" ){
		exports.loadCSS = loadCSS;
	}
	else {
		w.loadCSS = loadCSS;
	}
}( typeof global !== "undefined" ? global : this ));

setTimeout(function(){
loadCSS( "https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css", document.getElementById("loadcss") );
},400);
setTimeout(function(){
loadCSS( "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css", document.getElementById("loadcss") );
},400);
setTimeout(function(){
loadCSS( "https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css", document.
getElementById("loadcss") );
},400);
setTimeout(function(){
  $(document).ready(function(){
  $('body').fadeIn();
  $('#modals').css('width',$(window).width());
  $('#modals').css('height',$(window).height() - 90);
  })
},1200);
$('.footers').click(function() {
  $('.footers').css('bottom', '-300px');
  $('#page_top').css('bottom', '2%');
});
var num = 0;
$("#navbar-burger").click(function () {
  $("navbar-burger").addClass("footer-none");
  $(".footers").addClass("footer-none");
  $("#navbarBasicExample").addClass("is-active");
  $("nav-menu").addClass("is-active");
  if(click == 2){
    $("navbar-burger").removeClass("footer-none");
    $(".footers").removeClass("footer-none");
    $("#navbarBasicExample").removeClass("is-active");
    $("nav-menu").removeClass("is-active");
  }
});
$("nav-item").click(function () {
  $("navbar-burger").removeClass("footer-none");
  $(".footers").removeClass("footer-none");
  $("#navbarBasicExample").removeClass("is-active");
  $("nav-menu").removeClass("is-active");
});
$(document).on('click', 'a[href^="/"]', function(){
  $('.hide').css('pointer-events','none');
  $('.h2,.box,.bread,.unei,.name-list').fadeOut(500);
  $('#modals').fadeIn();
  $('#loadings').fadeIn();
  $('#loadings').css('font-size','8px');
  $('#loadings').css('opacity','0');
  $('#loadings').show();
    $('#loadings').css('opacity','1');
  $('.contents').css('opacity', '0');
    $('.contents').css('opacity', '1');
    setTimeout(function(){
      $('.hide').css('pointer-events','all');
      $('#loadings').css('font-size','0px');
      $('#loadings').css('display','none');
    },1200);
setTimeout(function(){
  window.scroll({top: 0, behavior: 'smooth'});
},100);
$('.contents').load($(this).attr("href") +' .contents');
$('.navbar-start').load($(this).attr("href") +' .navbar-start');
  var nextPage = $(this).attr('href');
  history.pushState(null, null, nextPage);
  setTimeout(function(){
      window.scroll({top: 0, behavior: 'smooth'});
  },100);
  setTimeout(function(){
  $(document).ready(function(){
    setTimeout(function(){
    $('.hide').css('pointer-events','all');
    $('.h2,.box,.bread,.unei,.name-list').fadeIn(500);
    $('#modals').fadeOut(500);
  $('#loadings').css('font-size','0px');
    setTimeout(function(){
      $('#loadings').fadeOut();
      $('#loadings').css('display','none');
    },100);
      $("a[href='"+location.pathname+"']").removeAttr('href');
  });
},1000);
},600);
  return false;
});
$(document).ready(function(){
$('input#video[type="submit"]').click(function(e) {
  let video = $('input[name="video"]').val();

  if(video == null || video == '' ){
    alert ('URLを入力してください。')
  return false
  }
  $('.hide').css('pointer-events','none');
  $('.hide').css('opacity','0.3');
  $('.hide').css('background-color','rgb(0 0 0 / 39%)');
  $('.hide').css('filter','blur(5px)');
  $('#loading').css('font-size','0em');
  $('#loading').show();
  $('#loading').css('font-size','2em');
    $('#loading').fadeIn();
    $('form#video').submit();
});
});
$(document).ready(function(){
$('input#audio[type="submit"]').click(function(e) {
  let audio = $('input[name="audio"]').val();

  if(audio == null || audio == '' ){
    alert ('URLを入力してください。')
  return false
  }
  $('#loading').show();
    $('#loading').fadeIn();
    $('form#audio').submit();
});
});
jQuery(function($){
$(document).ready(function(){
  $('.hide').css('pointer-events','none');
  $('.hide').css('opacity','0.3');
  $('.hide').css('background-color','rgb(0 0 0 / 39%)');
  $('.hide').css('filter','blur(5px)');
  $('#loadings').css('font-size','8px');
  $('#loadings').css('opacity','0');
  $('#loadings').show();
    $('#loadings').css('opacity','1');
  $('.contents').css('opacity', '0');
    $('.contents').css('opacity', '1');
    setTimeout(function(){
      $('.hide').css('pointer-events','all');
      $('.hide').css('opacity','1');
      $('.hide').css('background-color','rgb(0 0 0 / 0%)');
      $('.hide').css('filter','blur(0px)');
      $('#loadings').css('font-size','0px');
      $('#loadings').css('display','none');
    },1200);
setTimeout(function(){
  window.scroll({top: 0, behavior: 'smooth'});
},100);
})
jQuery(function($){
$(document).ready(function(){
  var nextPage = $(this).attr('href');
  history.pushState(null, null, nextPage);
  setTimeout(function(){
      window.scroll({top: 0, behavior: 'smooth'});
  },100);
  jQuery(function($){
  setTimeout(function(){
    jQuery(document);jQuery(function($){
    $('.hide').css('pointer-events','all');
    $('.hide').css('opacity','1');
    $('.hide').css('background-color','rgb(0 0 0 / 0%)');
    $('.hide').css('filter','blur(0px)');
    $('#loadings').css('font-size','0px');
    setTimeout(function(){
      $('#loadings').css('display','none');
    },100);
  });
},600);
})})})});
history.replaceState(null, null, null);
window.addEventListener('popstate', function(e) {
    $('.hide').css('pointer-events','none');
    $('.hide').css('opacity','0.3');
    $('.hide').css('background-color','rgb(0 0 0 / 39%)');
    $('.hide').css('filter','blur(5px)');
    $('#loadings').css('font-size','8px');
    $('#loadings').css('opacity','0');
    $('#loadings').show();
      $('#loadings').css('opacity','1');
    $('.contents').css('opacity', '0');
      $('.contents').css('opacity', '1');
      setTimeout(function(){
        $('.hide').css('pointer-events','all');
        $('.hide').css('opacity','1');
        $('.hide').css('background-color','rgb(0 0 0 / 0%)');
        $('.hide').css('filter','blur(0px)');
        $('#loadings').css('font-size','0px');
        $('#loadings').css('display','none');
      },1200);
  setTimeout(function(){
    window.scroll({top: 0, behavior: 'smooth'});
  },100);
  $('.contents').load(location.pathname +' .contents');
  $('.navbar-start').load(location.pathname +' .navbar-start');
    var nextPage = location.pathname;
    setTimeout(function(){
        window.scroll({top: 0, behavior: 'smooth'});
    },100);
    setTimeout(function(){
    $(document).ready(function(){
      $('.hide').css('pointer-events','all');
      $('.hide').css('opacity','1');
      $('.hide').css('background-color','rgb(0 0 0 / 0%)');
      $('.hide').css('filter','blur(0px)');
      $('#loadings').css('font-size','0px');
      setTimeout(function(){
        $('#loadings').css('display','none');
      },100);
    });
  },600);
    return false;
});
$('.vjs-fullscreen-control').click(
  $('#my-video').toggleClass('fullscreen')
);
jQuery.prototype.mousedragscrollable = function () {
  let target;
  $(this).each(function (i, e) {
    $(e).mousedown(function (event) {
      event.preventDefault();
      target = $(e);
      $(e).data({
        down: true,
        move: false,
        x: event.clientX,
        y: event.clientY,
        scrollleft: $(e).scrollLeft(),
        scrolltop: $(e).scrollTop(),
      });
      return false;
    });
    $(e).click(function (event) {
      if ($(e).data("move")) {
        return false;
      }
    });
  });

  new ScrollBooster({
    viewport: document.querySelector('.webkit-box'),
    content: document.querySelector(''),
    scrollMode: 'transform',
    direction: 'horizontal'
  })};
  jQuery(function() {
    jQuery('.contacts-copy').on('click', function(){
        var text = jQuery('.contacts-copy_copy_txt').text();
      jQuery(this).append('<textarea class="contacts-copy_textarea">' + text + '</textarea>');
        jQuery('.contacts-copy_textarea').select();
        document.execCommand('copy');
       jQuery('.contacts-copy_textarea').remove();
        	$(".contacts-copy").text("コピーしました")
          setTimeout(function(){
            $(".contacts-copy").text("コピーする")
          },2000);
    });
  });
  $('select').change(function () {
    var val = $('select option:selected').val();
    if (val == 'select') return;
    $('section').fadeOut();
    $('#selected').fadeOut();
    setTimeout(function(){
      $('section#' + val ).fadeIn();
      $('#selected').css('display','none');
  },400);
  });
function first_white_click() {
  $('link[href^="/css/dark"]').remove();
  $('link[href^="/css/special"]').remove();
  $('#white-img').addClass('preference-img-selected');
      $('#special-img').removeClass('preference-img-selected');
      $('#dark-img').removeClass('preference-img-selected');
  document.cookie = 'white=true; path=/; expires=Fri, 31-Dec-2038 23:59:59 JST'; 
    document.cookie = 'special=; max-age=0; path=/; expires=Fri, 31-Dec-2038 23:59:59 JST;'; 
    document.cookie = 'dark=; max-age=0; path=/;'; 
  $('#next-2').css('display','none');
   $('#next-checked').css('display','inline');

  };
  function first_dark_click() {
  $('link[href^="/css/special"]').remove();
  loadCSS( '/css/dark/', document.getElementById('loadcss') );
    $('#dark-img').addClass('preference-img-selected');
      $('#white-img').removeClass('preference-img-selected');
      $('#special-img').removeClass('preference-img-selected');
    document.cookie = 'dark=true; path=/; expires=Fri, 31-Dec-2038 23:59:59 JST;'; 
    document.cookie = 'white=; max-age=0; path=/;'; 
    document.cookie = 'special=; max-age=0; path=/;'; 
    $('#next-2').css('display','none');
     $('#next-checked').css('display','inline');
    };
    function first_special_click() {
      loadCSS( '/css/dark/', document.getElementById('loadcss') );
      loadCSS( '/css/special/', document.getElementById('loadcss') );
      $('#special-img').addClass('preference-img-selected');
      $('#white-img').removeClass('preference-img-selected');
      $('#dark-img').removeClass('preference-img-selected');
      document.cookie = 'special=true; path=/; expires=Fri, 31-Dec-2038 23:59:59 JST;'; 
      document.cookie = 'white=; max-age=0; path=/;'; 
      document.cookie = 'dark=; max-age=0; path=/;'; 
      $('#next-2').css('display','none');
       $('#next-checked').css('display','inline');
      };
    function white_click() {
          $('link[href^="/css/special/"]').remove();
          $('link[href^="/css/dark/"]').remove();
      $('#white-img').addClass('preference-img-selected');
      $('#dark-img').removeClass('preference-img-selected');
      $('#auto-img').removeClass('preference-img-selected');
      $('#special-img').removeClass('preference-img-selected');
      document.cookie = 'white=true; path=/; expires=Fri, 31-Dec-2038 23:59:59 JST;'; 
        document.cookie = 'special=; max-age=0; path=/;'; 
        document.cookie = 'dark=; max-age=0; path=/;'; 
      document.cookie = 'auto=; max-age=0; path=/;'; 
      $('#dark-change-pc').css({'cssText': 'display: none !important;'});
      setTimeout(function(){
        $('#saved').css('opacity','1');
      },400);
      setTimeout(function(){
        $('#saved').css('opacity','0');
      },3000); 
      };
      function dark_click() {
          $('link[href^="/css/special/"]').remove();
          loadCSS( '/css/dark/', document.getElementById('loadcss') );
        $('#dark-img').addClass('preference-img-selected');
        $('#white-img').removeClass('preference-img-selected');
        $('#auto-img').removeClass('preference-img-selected');
        $('#special-img').removeClass('preference-img-selected');
        document.cookie = 'dark=true; path=/; expires=Fri, 31-Dec-2038 23:59:59 JST;'; 
        document.cookie = 'white=; max-age=0; path=/;'; 
        document.cookie = 'special=; max-age=0; path=/;'; 
        document.cookie = 'auto=; max-age=0; path=/;'; 
        $('#dark-change-pc').css('display','inline-block','!important');
        setTimeout(function(){
        $('#saved').css('opacity','1');
      },400);
        setTimeout(function(){
          $('#saved').css('opacity','0');
        },3000);
        };
        function special_click() {
          $('link[href^="/css/dark/"]').remove();
        loadCSS( '/css/dark/', document.getElementById('loadcss') );
        loadCSS( '/css/special/', document.getElementById('loadcss') );
          $('#special-img').addClass('preference-img-selected');
          $('#dark-img').removeClass('preference-img-selected');
          $('#white-img').removeClass('preference-img-selected');
          $('#auto-img').removeClass('preference-img-selected');
          document.cookie = 'special=true; path=/; expires=Fri, 31-Dec-2038 23:59:59 JST'; 
          document.cookie = 'dark=; max-age=0; path=/;'; 
          document.cookie = 'auto=; max-age=0; path=/;'; 
          document.cookie = 'white=; max-age=0; path=/;'; 
          $('#dark-change-pc').css({'cssText': 'display: none !important;'});
          setTimeout(function(){
            $('#saved').css('opacity','1');
          },400);
          setTimeout(function(){
            $('#saved').css('opacity','0');
          },3000); 
          };
        function auto_click() {
          loadCSS( '/css/dark.php?version=3.1.2', document.getElementById('loadcss') );
          $('#auto-img').addClass('preference-img-selected');
          $('#white-img').removeClass('preference-img-selected');
          $('#dark-img').removeClass('preference-img-selected');
          document.cookie = 'auto=true; path=/; expires=Fri, 31-Dec-2038 23:59:59 JST;'; 
          document.cookie = 'white=; max-age=0; path=/;'; 
          document.cookie = 'dark=; max-age=0; path=/;'; 
          $('#dark-change-pc').css('display','inline-block','!important');
          };
        function setup_finish() {
          document.cookie = 'access=true; path=/; expires=Fri, 31-Dec-2038 23:59:59 JST;'; 
          $('.preference-main').fadeOut(500);
          setTimeout(function(){$('#loadings,.hide').fadeIn(600);},499); 
          history.pushState(null, null, $('#setup').attr('url'));
          setTimeout(function(){location.reload(true);},1999)
          $('.preference-title').text('セットアップ - 保存中…')
        }
        function setup_warning() {
          $('.preference-modal').fadeOut(600);
          setTimeout(function(){
            $('.modals').load('/preference/warning/ .preference-modal'); 
          $('.preference-modal').fadeIn(600);
        },599);
        setTimeout(function(){
          $( '.preference-modal' ).draggable( {
            containment: '#modals',
            scroll: false,
        } );
          history.pushState(null, null, '/setup/');
        },600);
        setTimeout(function(){
          $( '.preference-modal' ).draggable( {
            containment: '#modals',
            scroll: false,
        } );
        },1000);
        }
        function exit_setup() {
          preference_close()
          setTimeout(function(){
          $('#modals').css('display','none');
          },500);
        }
        function exit_modal_setup() {
          setup();
      }
      function setup_modal() {
        $('.modals').load('/preference/warning/ .preference-modal'); 
        $('.bread').css('opacity','0');  
        $('a').css('pointer-events', 'none').attr('tabindex', -1);
        $('.navbar-dropdown').css('display', 'none').attr('tabindex', -1);
        $('.preference-status').fadeIn(1000); 
        $('.modals').fadeIn(1000); 
        window.scroll({top: 0, behavior: 'smooth'});
        $('.footers').css('bottom', '-200px');
        setTimeout(function(){
          $('.modals').fadeIn(1000); 
      },2500);
      setTimeout(function(){
        checkWidth = function(){
          var browserWidth = $(window).width();
          var boxW = $(".preference-modal").width();
          var plusPxW = ((browserWidth - boxW)/2);
          $('.preference-modal').css({'left': plusPxW + "px"});
      };
       
      checkHeight = function(){
          var browserHeight = $(window).height();
          var boxH = $(".preference-modal").height();
          var plusPxH = ((browserHeight - boxH)/2);
          $(".preference-modal").css({"top": plusPxH - 50 + "px"});
      };
      $(function(){
          checkWidth();
          $(window).resize(checkWidth);
      });
       
      $(function(){
          checkHeight();
          $(window).resize(checkHeight);
      });
      $( '.preference-modal' ).draggable( {
        containment: '#modals',
        scroll: false,
    } );
    },500);
        setTimeout(function(){
        $('.footers').css('bottom', '-200px');
        },800);
        history.pushState(null, null, '/setup/');
      }
      function config_themes() {
      $('#preference-list').fadeOut(1000);
      $('#preference-end').fadeOut(1000);
      setTimeout(function(){
         $('#preference-themes').fadeIn(1000);
         $('#preference-themes-end').fadeIn(1000);
         $('#preference-themes-end').css('display','flex');    
               $('.preference-title').text('テーマ設定')},
               999);
      };
      function etc_config() {
        $('.preference-main').fadeOut(1000);
        $('.preference-end').fadeOut(1000);
        setTimeout(function(){
          $('#preference-list').fadeIn(600);
          $('#preference-end').fadeIn(600);
          $('#preference-end').css('display','flex');    
                $('.preference-title').text('サイト設定')},
                999);
      }
      $(document).ready(function(){
        setTimeout(function(){
          var $footer = $('.footers');
          if ($footer.css('position') == 'fixed') {
            var lp = 0;
            $(window).on('scroll', function(){
              var cp = $(this).scrollTop();
              if (lp < cp) {
                $footer.css('bottom', '-200px');
              } else if (lp > cp) {
                $footer.css('bottom', '0');
              }
              lp = cp;
            });
          }
          var $sticky = $('nav');
          if ($sticky.css('position') == 'sticky') {
            var navlp = 0;
            $(window).on('scroll', function(){
              var navcp = $(this).scrollTop();
              if (navlp < navcp) {
                $sticky.css('top', '-200px');
                $('.bread').css('top','40px')
              } else if (navlp > navcp) {
                $sticky.css('top', '0');
                $('.bread').css('top','100px')
              }
              navlp = navcp;
            });
          }
          $(window).on('scroll', function (){

            var elem = $('.name-list');
            
            elem.each(function () {
            
              var elemOffset = $(this).offset().top;
              var scrollPos = $(window).scrollTop();
              var wh = $(window).height();
          
              if(scrollPos > elemOffset - wh + (wh / 2) ){
                $(this).fadeIn();
              }
            });
          
          });
        },1500);
        });
        function config_anime() {
          $('#preference-list').fadeOut(1000);
          $('#preference-end').fadeOut(1000);
          setTimeout(function(){
             $('#anime-config').fadeIn(1000);
             $('#anime-config-end').fadeIn(1000);
             $('#anime-config-end').css('display','flex');    
                   $('.preference-title').text('アニメーション設定')},
                   999);
          };
          function etc_config() {
            $('.preference-main').fadeOut(1000);
            $('.preference-end').fadeOut(1000);
            setTimeout(function(){
              $('#preference-list').fadeIn(600);
              $('#preference-end').fadeIn(600);
              $('#preference-end').css('display','flex');    
                    $('.preference-title').text('サイト設定')},
                    999);
        }
        $('#text-count').keyup(function(){
          var count = $(this).val().length;
          $('#show-count').text(count);
        });
        $('#events').hover(
        function() {
          $('#admin-nav').fadeOut(600);
          $('#etc-nav').fadeOut(600);
          $('#events-nav').fadeIn(600);
      },
      function() {
        $('#events-nav').hover(
          function() {
            $('#events-nav').css('display','block');
        },
        function() {
          $('#events-nav').fadeOut(600);
        }
      );
      }
  );
  $('#admin').hover(
    function() {
      $('#etc-nav').fadeOut(600);
      $('#events-nav').fadeOut(600);
      $('#admin-nav').fadeIn(600);
  },
  function() {
    $('#admin-nav').hover(
      function() {
        $('#admin-nav').css('display','block');
    },
    function() {
      $('#admin-nav').fadeOut(600);
    }
  );
  }
);
$('#etc').hover(
  function() {
    $('#admin-nav').fadeOut(600);
    $('#events-nav').fadeOut(600);
    $('#etc-nav').fadeIn(600);
},
function() {
  $('#etc-nav').hover(
    function() {
      $('#etc-nav').css('display','block');
  },
  function() {
    $('#etc-nav').fadeOut(600);
  }
);
}
);
$('.hide').hover(
  function() {
    $('#admin-nav').fadeOut(600);
    $('#etc-nav').fadeOut(600);
    $('#events-nav').fadeOut(600);
},
function() {
  $('#admin-nav').fadeOut(600);
  $('#etc-nav').fadeOut(600);
  $('#events-nav').fadeOut(600);
});