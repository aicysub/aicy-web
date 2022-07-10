function aicy_anime() {
    setTimeout(function(){
 $('.birthday').fadeIn(2800);
},400);
setTimeout(function(){
    $('.birthday-subtext').fadeIn(3200);
    $('#fade-1').fadeIn(3200);
},2800);
setTimeout(function(){
 $('.birthday-box').fadeIn(3800);
 admin_more();
},3900);
};
function admin_more() {
    $('.admin-more').fadeIn(3800);
    $('.h2').fadeIn(3800);
};
$(document).on('click', 'a[href^="/"]', function(){
    location.href.reload;
    $('link[href^="/owner/aicy/birthday.css"]').remove();
    $('link[href^="/owner/aicy/birthday.js"]').remove();
});