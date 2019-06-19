<?php include('headtag.html') ?>
<body>
<?php include('../header.html') ?>
	<div class="container">
		<div id="mainContent">
			<nav id="breadcrumb">
				<ul>
					<li><a href="/">トップページ</a></li>
					<li><a href="../">マイページ</a></li>
					<li>会員情報</li>
				</ul>
			</nav>
			<article id="mypage">
				<h1 class="mTitle">会員さんのマイページ</h1>
				<ul class="tab">
					<li><a href="/mypage/">マイページトップ</a></li><li><a href="/mypage/accept.php">予約検診履歴</a></li><li><a href="/mypage/favorite.php">検討中リスト</a></li><li class="current"><a href="/mypage/information.php">会員情報</a></li>
				</ul>
				<h2 class="sTitle">会員情報</h2>
				<section>
					<h3>ログイン情報</h3>
					<table class="fm">
						<tbody>
							<tr>
								<th>会員ID</th>
								<td>hogehoge@hoge.com</td>
							</tr>
							<tr>
								<th>パスワード</th>
								<td>**********</td>
							</tr>
						</tbody>
					</table>
					<p class="center">※メールアドレスを会員IDとして使用している場合、メールアドレスを変更すると会員IDも変更されます。</p>
					<p class="btn"><a href="" class="greenBtn01">パスワードを変更する</a></p>
				</section>
				<section>
					<h3>メールアドレス</h3>
					<table class="fm">
						<tbody>
							<tr>
								<th>会員ID</th>
								<td>hogehoge@hoge.com</td>
							</tr>
						</tbody>
					</table>
					<p class="center">※メールアドレスを会員IDとして使用している場合、メールアドレスを変更すると会員IDも変更されます。</p>
					<p class="btn"><a href="" class="greenBtn01">メールアドレスを変更する</a></p>
				</section>
				<section>
					<h3>会員情報</h3>
					<table class="fm">
						<tbody>
							<tr>
								<th>お名前</th>
								<td>山田　太郎</td>
							</tr>
							<tr>
								<th>よみがな</th>
								<td>やまだ　たろう</td>
							</tr>
							<tr>
								<th>性別</th>
								<td>男性</td>
							</tr>
							<tr>
								<th>生年月日</th>
								<td>2000年1月1日</td>
							</tr>
							<tr>
								<th>ご住所</th>
								<td>郵便番号　012-3456 <br>都道府県　東京都<br>市区群　　中央区<br>町村番地　日本橋本町4丁目15番1号<br>建物名　　タカコービル6F
								</td>
							</tr>
							<tr>
								<th>連絡先電話番号</th>
								<td>0123456789</td>
							</tr>
							<tr>
								<th>メール情報配信</th>
								<td>受け取る</td>
							</tr>
						</tbody>
					</table>
					<p class="btn"><a href="/mypage/edit/" class="greenBtn01">会員情報を変更する</a></p>
				</section>
				<h2 class="sTitle">利用停止手続き</h2>
					<p class="center"><a href="/mypage/stop/" id="suspension">利用停止手続き</a></p>
			</article>
		</div>
	</div><!-- .container -->
<?php include('../footer.html') ?>
</body>
</html>
