(function($) {

$(function(){

    var topBtn = $('#page-top');
    topBtn.hide();
    //スクロールが600に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

//人間ドック学会機能評価認定施設アイコン
    $('ul.cate li.assessment').click(function() {
        location.href = "/assessment/"
    });

//特殊状況
var asMgn = 10;
//if ( $('#floatContactView').length ) asMgn = 110;
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - asMgn;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });

});


})(jQuery);
