@include('mypage.headtag')
<body>
@include('common.header', ['title' => '会員情報'])
	<div class="container">
		<div id="mainContent">
			<nav id="breadcrumb">
				<ul>
					<li><a href="/">人間ドックと検診予約サイト EPARK人間ドック</a></li>
					<li><a href="/mypage/">マイページ</a></li>
					<li>会員情報</li>
				</ul>
			</nav>

			<div style="line-height:0;"><a href="https://www.epark.jp/campaign/family/kosodate?utm_source=www.docknet.jp&utm_medium=banner&utm_campaign=201710premium_children&utm_content=mypage&utm_term=20180329" target="_blank"><img src="https://www.epark.jp/event/family/forDev/mtm_kosodate_1200_60.png" alt="EPARKの子育て割" style="width:100%;"></a></div>

			<article id="mypage">
				<h1 class="mTitle">{{--{{ display_name }}--}}さんのマイページ</h1>
				<ul class="tab">
					<li class="current"><a href="/mypage/">マイページトップ</a></li><li><a href="{{asset('mypage/accept')}}">予約履歴</a></li><li><a href="{{asset('mypage/favorite')}}">お気に入り</a></li><li><a href="{{asset('mypage/information')}}">会員情報</a></li>
				</ul>
				<h2 class="sTitle">会員情報</h2>
				<section>
					<h3>ログイン情報</h3>
					<table class="fm">
						<tbody>
							<tr>
								<th>会員ID</th>
								<td>{{--{{ email }}--}}</td>
							</tr>
							<tr>
								<th>パスワード</th>
								<td>**********</td>
							</tr>
						</tbody>
					</table>
					<p class="btn"><a href="/ajax/editpassword.html" class="greenBtn01">パスワードを変更する</a></p>
				</section>
				<section>
					<h3>メールアドレス</h3>
					<table class="fm">
						<tbody>
							<tr>
								<th>メールアドレス</th>
								<td>{{--{{ email }}--}}</td>
							</tr>
						</tbody>
					</table>
					<p class="center">※メールアドレスを会員IDとして使用している場合、メールアドレスを変更すると会員IDも変更されます。</p>
					<p class="btn"><a href="/mypage/email_edit/" class="greenBtn01">メールアドレスを変更する</a></p>
				</section>
				<section>
					<h3>会員情報</h3>
					<table class="fm">
						<tbody>
							<tr>
								<th>お名前</th>
								<td>{{--{{ last_name }}　{{first_name }}--}}</td>
							</tr>
							<tr>
								<th>よみがな</th>
								<td>{{--{{ last_kana }}　{{ first_kana }}--}}</td>
							</tr>
							<tr>
								<th>生年月日</th>
								<td>{{--{{ IF birthday }}{{ ymd(birthday) }}{{ END IF }}--}}</td>
							</tr>
							<tr>
								<th>性別</th>
								<td>{{--{{ sex }}--}}</td>
							</tr>
							<tr>
								<th>連絡先登録名</th>
								<td>{{--{{ contact }}--}}</td>
							</tr>
							<tr>
								<th>ご住所</th>
								<td>{{--〒{{ zip }}<br>{{ prefecture }}{{ address }}{{ other_address }}--}}</td>
							</tr>
							<tr>
								<th>連絡先電話番号</th>
								<td>{{--{{ tel }}--}}</td>
							</tr>
							<tr>
								<th>ニックネーム</th>
								<td>{{--{{ nick_name }}--}}<br>※ニックネームは口コミ・相談室への投稿に使用されます。</td>
							</tr>
							<tr>
								<th>EPARKメール情報配信</th>
								<td>{{--{{ optin }}--}}</td>
							</tr>
						</tbody>
					</table>
					<p class="btn"><a href="/mypage/edit/" class="greenBtn01">会員情報を変更する</a></p>
				</section>
				<!-- 事前決済対応 -->
				<section>
					<h2 class="sTitle">クレジットカード情報</h2>
					<table class="fm">
						<tbody>
							<tr>
								<th>カード番号</th>
								<td>{{--{{ card_number }}--}}</td>
							</tr>
						</tbody>
					</table>
					{{--<form name="registCard" method="post" action="{{ regist_card_uri }}">
						<p class="btn"><a href="javascript:void(0);" onclick="javascript:registCard.submit();" class="greenBtn01">クレジットカードを登録・変更する</a></p>
						<input type="hidden" class="registcard" name="access_token" id="access_token" value="{{ access_token }}" >
						<input type="hidden" class="registcard" name="serviceId" id="service_id" value="{{ service_id }}" >
						<input type="hidden" class="registcard" name="returnUrl1" id="return_url1" value="{{ return_url1 }}" >
						<input type="hidden" class="registcard" name="returnUrl2" id="return_url2" value="{{ return_url2 }}" >
						<input type="hidden" class="registcard" name="gmoShopId" id="gmo_shop_id" value="{{ gmo_shop_id }}" >
					</form>--}}

				</section>

				<section>
					<h2 class="sTitle">家族・ペット情報</h2>
					<p class="btn"><a href="https://family.epark.jp/family/registration?utm_source=www.docknet.jp&utm_medium=referral&utm_content=mypage" target="_blank" class="greenBtn01">家族・ペット情報を登録・変更する</a></p>
				</section>
				<section>
					<h2 class="sTitle">利用停止手続き</h2>
					<p class="center"><a href="/mypage/stop/" id="suspension">利用停止手続き</a></p>
				</section>
			</article>
			{{--<script id="mypage_script_loader" type="text/javascript" src="{{ API_COUPON }}/js/script_loader/v2_mypage_src_loader.js?{{ RAND }}" data-client_id="karadadock"></script>--}}
		</div>
	</div><!-- .container -->
@include('common.footer_single')
</body>
</html>
