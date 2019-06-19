{{include('mypage/mailmagazine/headtag.html')}} 
<body>
{{include('header.html')}} 
<script type="text/javascript">
    var sent = false;
    function fnCheckSubmit() {
        if(sent) {
            alert("しばらくお待ち下さい。");
            return false;
        }
        sent = true;
        document.form1.submit();
        return true;
    }
</script>
	<div class="container">
		<div id="mainContent">
			<nav id="breadcrumb">
				<ul>
					<li><a href="/">人間ドックと検診予約サイト EPARK人間ドック</a></li>
					<li><a href="/mypage/">マイページ</a></li>
					<li>メールマガジン受診設定</li>
				</ul>
			</nav>
			<article id="mypage">
				<h1 class="mTitle">{{ display_name }}さんのマイページ</h1>
				<ul class="tab">
					<li><a href="/mypage/">マイページトップ</a></li><li><a href="/mypage/accept.html">予約履歴</a></li><li><a href="/mypage/favorite.html">検討中リスト</a></li><li><a href="/mypage/information.html">会員情報</a></li>
				</ul>
				<form name="form1" id="form1" action="./" method="POST">
					<input type="hidden" name="epark_id" value="{{ epark_id }}"/>
					<h2 class="sTitle">EPARK人間ドックメールマガジン受信設定</h2>
					<caption>
						{{ IF errMsg }}<p class="warning">{{ nl2br( errMsg ) }}</p>  	{{ END IF }}
					</caption>
					<p class="mt60 center">
						<input id="mailrecieve1" type="radio" name="mailrecieve" value="1" {{ chkOptin }} ><label for="mailrecieve1" class="radio01">受け取る</label>
						<input id="mailrecieve2" type="radio" name="mailrecieve" value="X" {{ chkOptout }} ><label for="mailrecieve2" class="radio01">受け取らない</label>
					</p>
					<input type="hidden" name="cmd-send" value="1"/>
					<p class="btn mt80 mb80"><a href="javascript:void(0)" class="orangeBtn01" onclick="return fnCheckSubmit();">入力内容の保存</a></p>
				</form>
			</article>
		</div>
	</div><!-- .container -->
{{include('footer.html')}}
</body>
</html>
