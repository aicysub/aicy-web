<?php #header('Content-Type: text/javascript; charaset=utf-8');
echo '
<div id="title">
<title>' . wp_get_document_title() . '</title>
</div>
';
echo '<script>
$(\'head > title\').remove();
$(document).on(\'click\', \'a[href^="https://aic-group.sytes.net/blog/"]\', function(){
setTimeout(function(){
  window.scroll({top: 0, behavior: \'smooth\'});
},100);
$(\'#content\').load($(this).attr("href") +\' #content\');
$(\'#title\').load($(this).attr("href") +\' #title\');
  var nextPage = $(this).attr(\'href\');
  history.pushState(null, null, nextPage);
  setTimeout(function(){
      window.scroll({top: 0, behavior: \'smooth\'});
  },100);
  return false;
});
$(\'head > title\').remove();
$(document).on(\'click\', \'a[href^="/blog/"]\', function(){
setTimeout(function(){
  window.scroll({top: 0, behavior: \'smooth\'});
},100);
$(\'#content\').load($(this).attr("href") +\' #content\');
$(\'#title\').load($(this).attr("href") +\' #title\');
  var nextPage = $(this).attr(\'href\');
  history.pushState(null, null, nextPage);
  setTimeout(function(){
      window.scroll({top: 0, behavior: \'smooth\'});
  },100);
  return false;
});
$(\'head > title\').remove();
$(document).on(\'click\', \'a[href^="https://aic-group.sytes.net/blog/wp-admin"]\', function(){
  location.href=$(this).attr(\'href\'); 
  return false;
});
history.replaceState(null, document.getElementsByTagName(\'title\')[0].innerHTML, null);
window.addEventListener(\'popstate\', function(e) {
  setTimeout(function(){
    window.scroll({top: 0, behavior: \'smooth\'});
  },100);
  $(\'#content\').load(location.pathname +\' #content\');
  $(\'#title\').load(location.pathname +\' #title\');
    var nextPage = location.pathname;
    setTimeout(function(){
        window.scroll({top: 0, behavior: \'smooth\'});
    },100);
    return false;
});
</script>
';
