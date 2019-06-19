{{include('mypage/edit/headtag.html')}}
<body>
{{include('header.html')}}
	<div class="container">
		<div id="mainContent">
			<nav id="breadcrumb">
				<ul>
					<li><a href="/">人間ドックと検診予約サイト EPARK人間ドック</a></li>
					<li><a href="/mypage/">マイページ</a></li>
					<li>会員情報変更</li>
				</ul>
			</nav>
			<article id="mypage">
				<h1 class="mTitle">{{ display_name }}さんのマイページ</h1>
				<ul class="tab">
					<li><a href="/mypage/">マイページトップ</a></li><li><a href="/mypage/accept.html">予約履歴</a></li><li><a href="/mypage/favorite.html">お気に入り</a></li><li class="current"><a href="/mypage/information.html">会員情報</a></li>
				</ul>
				<form name="form1" id="form1" action="./" method="POST">
				<input type="hidden" name="epark_id" value="{{ q( epark_id, 'ENT_QUOTES' ) }}"/>
				<input type="hidden" name="email" value="{{ q( txt_email, 'ENT_QUOTES' ) }}"/>
				<h2 class="sTitle">会員情報の変更</h2>

				{{ IF errMsg }}<div class="myp-error"><p class="warning">{{ nl2br( errMsg ) }}</p></div>{{ END IF }}

				<p><b class="red">【必須】</b>が付いている項目は必ず入力してください。</p>
					<table class="fm">
						<tbody>
							<tr>
								<th>EPARK会員連携</th>
								<td>{{ display_name }}さんとしてログイン済</td>
							</tr>
							<tr>
								<th>会員ID<b class="red">【必須】</b></th>
								<td>
									<input disabled="disabled" id="use_email1" type="radio" name="use_email" value="1" checked="checked"><label for="use_email1" class="radio01">メールアドレスを使用する</label><br>
									<input disabled="disabled" id="use_email2" type="radio" name="use_email" value="2"><label for="use_email2" class="radio01">メールアドレスを使用しない（メールアドレス以外のIDを指定する）</label><br>
									<input disabled="disabled" id="email" type="text" name="email" class="half" value="{{ q( txt_email, 'ENT_QUOTES' ) }}" placeholder="sample@example.com">
								</td>
							</tr>
							<tr>
								<th class="" style="line-height: 44px;">お名前<br>よみがな<br>ニックネーム</th>
								<td>
									<p><input id="firstname" type="text" name="firstname" class="name" value="{{ q( txt_last_name, 'ENT_QUOTES' ) }}" placeholder="姓" maxlength="32"><input id="familyname" type="text" name="familyname" class="name" value="{{ q( txt_first_name, 'ENT_QUOTES' ) }}" placeholder="名" maxlength="32"></p>
									<p><input id="firstnameKn" type="text" name="firstnameKn" class="name" value="{{ q( txt_last_kana, 'ENT_QUOTES' ) }}" placeholder="せい" maxlength="32"><input id="familynameKn" type="text" name="familynameKn" class="name" value="{{ q( txt_first_kana, 'ENT_QUOTES' ) }}" placeholder="めい" maxlength="32"></p>
									<input id="use_name1" type="radio" name="use_name" value="X" {{ radNick0 }} ><label for="use_name1" class="radio01">お名前を使用する</label><br>
									<input id="use_name2" type="radio" name="use_name" value="1" {{ radNick1 }} ><label for="use_name2" class="radio01">お名前を使用しない（ニックネームを指定する）</label>
									<div id="nickname_box"><span>ニックネーム<b class="red">【必須】</b></span><input id="nickname" type="text" name="nickname" class="short" value="{{ q( txt_nick_name, 'ENT_QUOTES' ) }}" maxlength="64"></div>
								</td>
							</tr>
							<tr>
								<th>生年月日<b class="red">【必須】</b></th>
								<td>
								{{ IF chkBirthday }}
									<div class="select-wrap"><select id="birthY" name="birthY">
										<option value="">----</option>{{ cmbYear }}
									</select></div>
									<div class="select-wrap"><select id="birthM" name="birthM">
										<option value="">----</option>{{ cmbMonth }}
									</select></div>
									<div class="select-wrap"><select id="birthD" name="birthD">
										<option value="">----</option>{{ cmbDay }}
									</select></div>
								{{ END IF }}
								</td>
							</tr>
							<tr>
								<th>性別<b class="red">【必須】</b></th>
								<td>
									<input id="male" type="radio" name="sex" value="0" {{ radSex0 }} ><label for="male" class="radio01">男性</label>
									<input id="female" type="radio" name="sex" value="1" {{ radSex1 }}><label for="female" class="radio01">女性</label>
								</td>
							</tr>
							<tr>
								<th>連絡先登録名</th>
								<td>
									<input id="contact_name1" type="radio" name="contact_name" value="1" {{ radContact1 }} ><label for="contact_name1" class="radio01">自宅</label>
									<input id="contact_name2" type="radio" name="contact_name" value="2" {{ radContact2 }} ><label for="contact_name2" class="radio01">勤務先</label>
									<input id="contact_name3" type="radio" name="contact_name" value="4" {{ radContact4 }} ><label for="contact_name3" class="radio01">その他</label><br>
									<div id="contact_name_other"><span>その他</span><input id="contact_name3_detail" type="text" name="contact_name3_detail" class="short" value="{{ q( txt_contact_name, 'ENT_QUOTES' ) }}" maxlength="32"></div>
								</td>
							</tr>
							<tr>
								<th>ご住所<b class="red">【必須】</b></th>
								<td>
									<div class="lh">
										郵便番号<input id="zip1" type="text" name="zip1" value="{{ q( txt_zip1, 'ENT_QUOTES' ) }}" placeholder="例：012">-<input id="zip2" type="text" name="zip2" value="{{ q( txt_zip2, 'ENT_QUOTES' ) }}" placeholder="例：3456">
										<span class="navyBtn01" onClick="lfCheckZip();">住所を検索</span>
										<br>
										都道府県<div class="select-wrap state"><select id="state" name="state"><option value="">----</option>{{ cmbPref }}</select></div>
										市区郡<input id="address" type="text" name="address" class="half" value="{{ q( txt_address, 'ENT_QUOTES' ) }}" placeholder="例：中央区" maxlength="120">
										<br>
										それ以降の住所<input id="other_address" type="text" name="other_address" class="long" value="{{ q( txt_otherAddress, 'ENT_QUOTES' ) }}" placeholder="例：日本橋本町4丁目15番11号岩月日本橋ビル3F" maxlength="120">
									</div>
								</td>
							</tr>
							<tr>
								<th>連絡先電話番号</th>
								<td>
									<input id="tel"   type="text" name="tel" class="half" value="{{ q( txt_tel, 'ENT_QUOTES' ) }}" placeholder="例：0123456789" maxlength="12">半角数字、ハイフン抜き
								</td>
							</tr>
							<tr>
								<th>EPARKメール情報配信<br><b class="red">【必須】</b></th>
								<td>
									<input id="mailrecieve1" type="radio" name="mailrecieve" value="1" {{ chkOptin }} ><label for="mailrecieve1" class="radio01">受け取る</label>
									<input id="mailrecieve2" type="radio" name="mailrecieve" value="X" {{ chkOptout }} ><label for="mailrecieve2" class="radio01">受け取らない</label>
								</td>
							</tr>
						</tbody>
					</table>
					<p>変更された情報はEPARK会員情報にも反映されます。</p>
				<p class="btn mt80 mb80">
					<a href="/mypage/information.html" class="greenBtn01">会員情報へ戻る</a>
					<input type="hidden" name="cmd-check" value="1"/>
					<a href="javascript:void(0)" class="orangeBtn01" onClick="document.form1.submit();">会員情報を変更する</a>
				</p>
				</form>
			</article>


		</div>
	</div><!-- .container -->
{{include('footer_single.html')}}
</body>
</html>
