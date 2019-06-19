<?php include('headtag.html') ?>
<body>
<?php include('../../header.html') ?>
	<div class="container">
		<div id="mainContent">
			<nav id="breadcrumb">
				<ul>
					<li><a href="/">トップページ</a></li>
					<li><a href="../">マイページ</a></li>
					<li>利用停止手続き</li>
				</ul>
			</nav>
			<article id="mypage">
				<h1 class="mTitle">会員さんのマイページ</h1>
				<ul class="tab">
					<li><a href="/mypage/">マイページトップ</a></li><li><a href="/mypage/accept.php">予約検診履歴</a></li><li><a href="/mypage/favorite.php">検討中リスト</a></li><li class="current"><a href="/mypage/information.php">会員情報</a></li>
				</ul>
				<h2 class="sTitle">利用停止手続き</h2>
					<p class="btn mt80 mb80"><a href="" class="greenBtn01">戻る</a><a href="" id="suspension">利用停止する</a></p>
			</article>
		</div>
	</div><!-- .container -->
<?php include('../../footer.html') ?>
</body>
</html>
