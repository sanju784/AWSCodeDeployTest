document.write('<div style="position:absolute;z-index:-9999;top:-1000px;left:-1000px;" >');
document.write('<p id="isLogin">{{ isLogin }}</p>');
document.write('{{ LOGOUT }}');

<!-- 外部サイトへメッセージを投げるためのiframe -->
document.write("{{ AUTH_CODE }}");
document.write('</div>');

// windowロードイベント
window.onload = function() {
    // iframeのwindowオブジェクトを取得
    var iframe = document.getElementById('auth-code');
	if (iframe) {
	    // iframe内のコンテンツに空メッセージ送信
		iframe.contentWindow.postMessage('', '{{ sso_uri }}');
	}
};

// 認可コード受信
var onReceive = function(event) {
console.log("SSO login check : Response - code=" + event.data);
if (typeof event.data !== 'object' ) {
      if( (event.origin.indexOf("docknet.jp")>0
		 ||event.origin.indexOf("sgscloud.info")>0
         ||event.origin.indexOf("epark.jp")>0)
        && event.data.match(/[0-9a-f]+/) ){
      }else{
         return;
      }
} else {
  return;
}

	  var sso_redirect = window.location.href;
      //if( sso_redirect.indexOf("/search/") && sso_redirect.indexOf("?")<0 ){
      //    sso_redirect+="?order=1";
      //}
      sso_redirect=sso_redirect.replace(/\&/g , "%26" ) ;

	  var code = event.data;  // イベントオブジェクトのdataプロパティに認可コードを保持している
	  if (code !== '') {
		// 認可コード取得成功時の処理
		// Ajaxやリダイレクトによるログイン処理の呼出等
		window.location = '/login/sso.html' + '?code=' + code + '&sso_redirect=' + sso_redirect;
		//window.location = 'https://www.st2017.docknet.jp/login/sso.html' + '?code=' + code + '&sso_redirect=' + sso_redirect;
	} else {
		// 認可コード取得失敗時（エラーまたは未ログイン時）の処理
	}
};

// イベントの設定
if (window.addEventListener) {
    window.addEventListener('message', onReceive, false);
} else if (window.attachEvent) {  // IE8対策
    window.attachEvent('onmessage', onReceive);
}
