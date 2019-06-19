<?php include('headtag.html') ?>
<body>
<?php include('../../header.html') ?>
	<div class="container">
		<div id="mainContent">
			<nav id="breadcrumb">
				<ul>
					<li><a href="/">トップページ</a></li>
					<li><a href="../">マイページ</a></li>
					<li>メールマガジン受診設定</li>
				</ul>
			</nav>
			<article id="mypage">
				<h1 class="mTitle">会員さんのマイページ</h1>
				<ul class="tab">
					<li><a href="/mypage/">マイページトップ</a></li><li><a href="/mypage/accept.php">予約検診履歴</a></li><li><a href="/mypage/favorite.php">検討中リスト</a></li><li><a href="/mypage/information.php">会員情報</a></li>
				</ul>
				<h2 class="sTitle">EPARK人間ドックメールマガジン受信設定</h2>
				<p class="mt60 center">
					<input id="mailrecieve1" type="radio" name="mailrecieve" value="1" checked=""><label for="mailrecieve1" class="radio01">受け取る</label>
					<input id="mailrecieve2" type="radio" name="mailrecieve" value="2"><label for="mailrecieve2" class="radio01">受け取らない</label>
				</p>
				<p class="btn mt80 mb80"><a href="" class="orangeBtn01">入力内容の保存</a></p>
			</article>
		</div>
	</div><!-- .container -->
<?php include('../../footer.html') ?>
</body>
</html>
