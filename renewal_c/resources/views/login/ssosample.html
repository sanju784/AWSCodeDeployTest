{{ include('../headtag.html') }}
<body>
<p id='isLogin'>{{ isLogin }}</p>
{{ LOGOUT }}

<!-- 外部サイトへメッセージを投げるためのiframe -->
{{ AUTH_CODE }}
<script type="text/javascript">
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
	  var sso_redirect = window.location.href;
	  var code = event.data;  // イベントオブジェクトのdataプロパティに認可コードを保持している
	  if (code !== '') {
		// 認可コード取得成功時の処理
		// Ajaxやリダイレクトによるログイン処理の呼出等
		window.location = 'https://' + window.location.host + '/login/sso.html' + '?code=' + code + '&sso_redirect=' + sso_redirect;
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
</script>

</body>
</html>
