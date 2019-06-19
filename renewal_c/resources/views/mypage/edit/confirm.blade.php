{{include('mypage/edit/headtag.html')}}
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
					<li>会員情報変更確認</li>
				</ul>
			</nav>
			<article id="mypage">
				<h1 class="mTitle">{{ display_name }}さんのマイページ</h1>
				<ul class="tab">
					<li><a href="/mypage/">マイページトップ</a></li><li><a href="/mypage/accept.html">予約履歴</a></li><li><a href="/mypage/favorite.html">お気に入り</a></li><li class="current"><a href="/mypage/information.html">会員情報</a></li>
				</ul>
				<form  name="form1" id="form1" action="./confirm.html" method="post">
				<input type="hidden" name="epark_id" value="{{ epark_id }}"/>
				<h2 class="sTitle">変更内容の確認</h2>
				<p>以下の内容で変更してもよろしいですか？<br>変更する内容に間違いがなければ、「入力内容の保存」ボタンを押してください。</p>

				{{ IF errMsg }}<div class="myp-error"><p class="warning">{{ nl2br( errMsg ) }}</p></div>{{ END IF }}

				<table class="bm fm">
					<tbody>
						<tr>
							<th>会員ID</th>
							<td>{{ txt_email }}</td>
						</tr>
						<tr>
							<th>お名前</th>
							<td>{{ txt_last_name }}　{{ txt_first_name }}</td>
						</tr>
						<tr>
							<th>よみがな</th>
							<td>{{ txt_last_kana }}　{{ txt_first_kana }}</td>
						</tr>
						<tr>
							<th>生年月日</th>
							<td>{{ ymd(txt_birthday) }}</td>
						</tr>
						<tr>
							<th>性別</th>
							<td>{{ txt_sex }}</td>
						</tr>
						<tr>
							<th>連絡先登録名</th>
							<td>{{ txt_contact }}</td>
						</tr>
						<tr>
							<th>ご住所</th>
							<td>〒{{ txt_zip }}<br>{{ txt_address }}
							</td>
						</tr>
						<tr>
							<th>連絡先電話番号</th>
							<td>{{ txt_tel }}</td>
						</tr>
						<tr>
							<th>ニックネーム</th>
							<td>{{ txt_nick_name }}</td>
						</tr>
						<tr>
							<th>EPARKメール情報配信</th>
							<td>{{ txt_optin }}</td>
						</tr>
					</tbody>
				</table>
				<p class="btn mt80 mb80">
					<a href="./" class="greenBtn01">会員情報の変更へ戻る</a>
					<input type="hidden" name="cmd-send" value="1"/>
					<a href="javascript:void(0)" class="orangeBtn01" onclick="return fnCheckSubmit();">入力内容の保存</a>
				</p>
				</form>
			</article>


		</div>
	</div><!-- .container -->
{{include('footer_single.html')}}
</body>
</html>
