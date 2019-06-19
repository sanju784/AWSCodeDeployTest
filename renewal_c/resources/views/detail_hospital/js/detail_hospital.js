$(function() {

	var map = $('#gmap>iframe,#gearth>iframe');
	map.css('pointer-events', 'none');
	$('#gmap, #gearth').click(function() {
		map.css('pointer-events', 'auto');
	});
	map.mouseout(function() {
		map.css('pointer-events', 'none');
	})

	$('#interview>div+div').hide();
	$('.moreButton').click(function(){
		$(this).parent('div').next().slideToggle(200);
		$(this).toggleClass('close');

	});

	$('#scCourse p.recommend').click(function(){
		$(this).next().slideToggle();
		if ( $(this).hasClass('open') ) $(this).removeClass('open');
		else $(this).addClass('open');
	});

	//写真拡大表示
	/*
	$('div#photos ul li').click(function(){
		var p = $(this).find('img').attr('src');
		$('div#photos .mainPhoto').find('img').attr('src',p);
	});
	*/

	//#gmap、#gearth切替
	$("#access ul").on("click","li",function(){
		$("li.active").removeClass("active");
		$(this).addClass("active");
		var target = this.id.split("_")[1];
		$("#accessMapArea div").hide();
		$("#"+target).show();
	});

	//#floatContactView表示
	var floatContactView = $('#floatContactView');
	floatContactView.hide();
	setTimeout( function(){
		//スクロールが600に達したら#floatContactView表示
		$(window).scroll(function () {
			if ($(this).scrollTop() > 600) {
				floatContactView.fadeIn();
			} else {
				floatContactView.fadeOut();
			}
		});

//		var st=$(window).scrollTop();
//		if( st > 600) {
//			st-=110;
//			$("html, body").animate({scrollTop:st}, 250, "swing");
//		}

	},500);


	var jump=function(){
		var asMgn = 10;
		//if ( $('#floatContactView').length ) asMgn = 110;

		var speed = 500;
		var href= $(this).attr("href");
		href="#"+href.split("#")[1];
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top - asMgn;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	}

	var pn=location.pathname;
	$("a").each( function(){
		var a=$(this);
		var h=""+a.attr("href");
		if( h.indexOf(pn+"#")==0 ){
			a.click( jump );
		}
	});

	$('.mhItem').matchHeight();
	$('#option-dl>dt,#option-dl>dd').matchHeight();

	$("div.closeView").click(function(){
		$("#floatContactView").fadeOut(
			function(){ $(this).remove(); }
		);
	});

});
