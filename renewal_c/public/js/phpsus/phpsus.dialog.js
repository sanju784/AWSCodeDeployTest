/**
 *  phpsus
 *  jquery.blockUI.js
 */
var PHPSUS = (PHPSUS||{});
PHPSUS.dialog = function(){
	// protected
	var dlgTitleHeight = 20;
	var dlgWidth = 640;
	var dlgHeight = 480;
	var dlgUrl = '/js/phpsus/loading.php';
	var onCloseEvnt = function(){ return true; };
	var onUpdateEvnt = function(){ return true; };

	// public
	return {
		init: function(){
			$("body").append(
				//
				'<div id="phpsusDialog" style="display: none; overflow: hidden;">'+
				'<div class="bar"><button id="dialogClose" onClick="PHPSUS.dialog.close()" type="button" style="">'+
				'<img class="close" src="/images/ui/cross.png" alt="閉じる" /></button>'+
				'<div class="title"></div></div>'+
				'<iframe src="/js/phpsus/loading.php" style="width:100%;border: none; frame-border:none;" />'+
				'</div>'
			);
		},
		open: function( arg ){
			var w	= (arg.width	||dlgWidth);
			var h	= (arg.height	||dlgWidth);
			var t	= (arg.titleheight	||dlgTitleHeight);
			var url	= (arg.url		||dlgUrl);

			if(arg.onClose){ onCloseEvnt = arg.onClose; }
			if(arg.onUpdate){ onUpdateEvnt = arg.onUpdate; }

			$.blockUI({message:$("#phpsusDialog"), css:{
				top:  ($(window).height() - h) /2 + 'px',
		        left: ($(window).width() - w) /2 + 'px' ,
				"height":h+"px","width":w+"px", "border": "solid 2px #ffffff ","background-color":"tranceparent" }});
				$("#phpsusDialog .bar").css('height',""+(t+2)+"px" );
				$("#phpsusDialog .title").css('height',""+(t+2)+"px" );
				$("#phpsusDialog iframe").attr("src" ,url).css('height',""+(h-t-4)+"px" );
		},
		close: function()
		{
			if( onCloseEvnt() ){ $.unblockUI();}
		},
		setTitle: function ( txt ){
			$("#phpsusDialog .title").html( txt );
		}
	};
}();