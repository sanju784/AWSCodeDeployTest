{{include('mypage/edit/headtag.html')}}
<body>
{{include('header.html')}}
	<div class="container">
		<div id="mainContent">
			<nav id="breadcrumb">
				<ul>
					<li><a href="/">人間ドックと検診予約サイト EPARK人間ドック</a></li>
					<li><a href="/mypage/">マイページ</a></li>
					<li>会員情報の変更完了</li>
				</ul>
			</nav>
			<article id="mypage">
				<h1 class="mTitle">{{ display_name }}さんのマイページ</h1>
				<ul class="tab">
					<li><a href="/mypage/">マイページトップ</a></li><li><a href="/mypage/accept.html">予約履歴</a></li><li><a href="/mypage/favorite.html">お気に入り</a></li><li class="current"><a href="/mypage/information.html">会員情報</a></li>
				</ul>
				<h2 class="sTitle">会員情報の変更完了</h2>
				<p>会員情報を変更しました。</p>
				<p class="btn mt80 mb80"><a href="/mypage/information.html" class="greenBtn01">会員情報へ戻る</a></p>
			</article>
		</div>
	</div><!-- .container -->
{{include('footer_single.html')}}
</body>
</html>
