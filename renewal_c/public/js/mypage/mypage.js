
function lfCheckStr(name) {
	var x = document.form1.elements[name];
	var val = x.value;
    str = "";
    c = "";
    n = "";
    txt = '＋－～（）＠！＃＄％＆＊／＝？＾＿‘｛｜｝．’';
    zen = '+-~()@!#$%&*/=?^_`{|}.' + "'";
    for (i=0; i<val.length; i++){
        c = val.charAt(i);
        var reg_ex = /[Ａ-Ｚａ-ｚ０-９]/g;
        c = c.replace(reg_ex, String.fromCharCode(c.charCodeAt(0) - 0xFEE0));
        n = txt.indexOf(c,0);
        if (n >= 0){
            c = zen.charAt(n);
        }
        str += c;
    }
    x.value = str;
}

function lfCheckZip() {
	lfCheckStr('zip1');
	lfCheckStr('zip2');
	AjaxZip3.zip2addr('zip1','zip2','state','address','other_address')
}

$(function() {

	$('p.more+div').hide();
	$('p.more').click(function(){
		$(this).next().slideToggle(200);
		$(this).toggleClass('close');

	});

	$('.green+dd .details p.recommend').click(function(){
	  $(this).next().slideToggle();
	  if ( $(this).hasClass('open') ) $(this).removeClass('open');
	  else $(this).addClass('open');
	});


	$('input[name=use_name]').change(function(){
		$('#nickname_box').slideToggle();
	});

	$('input[name=contact_name]').change(function(){
		if ( $('#contact_name3').is(':checked') && !$('#contact_name3').is(':visible') ) $('#contact_name_other').slideDown();
		else $('#contact_name_other').slideUp();
	});

	$(".photo li").click( function(){
		var li=$(this);
		if( li.hasClass("mainphoto") )return;

		var hospital=li.attr("hospital");
		img=li.find("img");
		$("#mainphoto_"+hospital).attr({
			"src":img.attr("src"),
			"alt":img.attr("alt")
		});
	});
});

$(window).load(function () {
	if ($('input[name=use_name]:checked').val() == 1) {
		$('#nickname_box').css('display', 'block');
	}
	if ($('input[name=contact_name]:checked').val() == 4) {
		$('#contact_name_other').css('display', 'block');
	}
});


/* 満足・不満足ボタン */
$(function(){

	$('.openRating').click(function(){
		$(this).next('div').fadeIn();
	});

	$('.ssRating .close').click(function(){
		$('.ssRating').fadeOut();
	});

	$('.orangeBtn01').click(function(){
		var list = $(this).parents('.list');
		var value =  $(this).attr("value");
		var comment = "";
		var rating = "";
		if (value != "2") {
			comment = $(this).parent().find('textarea').val();
			if (value == "1") {
				rating = $(this).parent().find('input:radio:checked').val();
			}
		}
		var history = $(this).data('history');
		$.ajax({
			url : './manzoku.php',
            type: 'post',
            dataType: 'json',
            data: {
				target_url: history.url,
                member_id: history.member_id,
				service_id: history.service_id,
				appoint_id: history.appoint_id,
				satisfaction_rating: value,
				rating_question: rating,
				rating_comment: comment
            },
        })
        .done(function (response) {
			if (response.error_code == null) {
				list.find('.before').hide();
				list.find('.answered').show();
				if (value == "1") {
					list.find('.answered').find('#fumanzoku').show();
				} else if (value == "2") {
					list.find('.answered').find('#dotti').show();
				} else if (value == "3") {
					list.find('.answered').find('#manzoku').show();
				} else {
				}
			} else {
				alert("満足度の登録に失敗しました。");
			}
			$('.ssRating').fadeOut();
			return;
        });
    });
});
