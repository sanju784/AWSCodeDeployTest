/**
 * 共通 編集ウインドウ操作
 * jquery版
 *
 */
var subwindowWidth  = 900;

var PHPSUS = (PHPSUS||{});
PHPSUS.subWindow = {
	margin:"0",
	height:"100%",
	isOpen: 0,
	isModef: 1,
	loadingPage:'/js/phpsus/loading.php',
	// タイトルの設置
	setTitle: function (str){
		var str = (str||'Movi USA');
		if(str){ $("#subwindow .title").html(str);}
	},
	'setModefied' : function(){ isModef=1; },
	'onChieldModef' : function(){ },
	'hitoryClear' : function(){
		frames['subwindow'].history.forward();
	}
};

function initSubWindow(path)
{
	if(!path){ path = PHPSUS.subWindow.loadingPage; }
	// サブウィンドウ用のDIVタグを作る
	$("body").append(
		'<div id="subwindow"><form id="subwin_handle">'
		+'<div class="bar"><button id="subwin_close" type="button" class="close"><div>閉じる</div></button>'
		+'<div id="subwin_title" class="title"></div></div><br claer="all" />'
		+'<iframe id="subwindow_contents" name="subwindow" frameborder=0 scrolling="AUTO" id="frame" src="' + path + '"></iframe>'
		+'</form></div>'
	);

	// サブウィンドウの閉じるボタンにイベントを設定する
	$("#subwin_close").click(function() { closeSubWindow(); });

	// 親ウィンドウのサイズが変化された時に、サブウィンドウもサイズ変更する
	$(window).resize(function(){ traceWindow();});
}

// ポップアップウインドウを表示
function popup_inner(config)
{
	if (config.width)  subwindowWidth  = config.width  + 0;

	openSubwindow();
	changeUrl(config.url);
	return false;
}

/* i-frame URL change */
function changeUrl(url)
{
	$("#subwindow_contents").attr("src", url);
}

/* i-frame 'NOW LOADING' View */
function loadingview()
{
	changeUrl(PHPSUS.subWindow.loadingPage);
}

/* i-frameにURL設定  */
function openSubwindow()
{
	// 表示アニメーション
	PHPSUS.subWindow.iSOpen = 1;
	$("#subwindow").hide(500, function(){ $("#subwindow").show(500, traceWindow); });
	//$("select ").each(function(obj){ obj.hide(); });
}

function closeSubWindow()
{
	PHPSUS.subWindow.iSOpen = 0;
	if(PHPSUS.subWindow.isModef)
	{
		PHPSUS.subWindow.onChieldModef();
		PHPSUS.subWindow.isModef = 0;
	}
	$("#subwindow").hide("fast");
	loadingview();
}

function close(){ closeSubWindow(); }

var trTimer ;
/* i-frame adjust display position  */
function traceWindow()
{
	// 現在のスクロール位置を取得する
	var pos = getScrollPosition();

	// 現在のスクリーンサイズを取得する
	var sz = getScreenSize();
	// 設定値を決める
	var height = sz.ch + (-2);
	var bar = $("div#subwindow div.bar").height() + 0;
	// スクロール位置の 8 px下からスクリーンサイズより高さが 16 px低いウィンドウに変更する
	$("#subwindow").css("top", pos.top + "px").css("height", height + "px");
	$("#subwindow").css("width",  subwindowWidth + "px");
	$("#subwindow iframe").css("height", (height - bar - 8) + "px");

	trTimer = setTimeout(traceWindow, 1000);
}

/* screen position */
function getScrollPosition()
{
    return {
	 	left: ( document.body.scrollLeft || document.documentElement.scrollLeft ),
	    top: ( document.body.scrollTop || document.documentElement.scrollTop )
    };
}

/* screen size */
function getScreenSize()
{
	var ww = document.body.scrollWidth || document.documentElement.scrollWidth;
  	var hh = document.body.scrollHeight || document.documentElement.scrollHidth;
  	var ch = document.documentElement.clientHeight;
  	var ret = { "ww" : ww, "hh" : hh, "ch" : ch };
  	return ret;
}
