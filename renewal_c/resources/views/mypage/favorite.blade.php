@include('mypage.headtag')
<body>
<script type="text/javascript" src="{{asset('js/ajs/popup.js')}}"></script>
@include('detail_hospital.course.parts_popup')
@include('header', ['title' => 'お気に入り'])
	<div class="container">
		<div id="mainContent">
			<nav id="breadcrumb">
				<ul>
					<li><a href="/">人間ドックと検診予約サイト EPARK人間ドック</a></li>
					<li><a href="/mypage/">マイページ</a></li>
					<li>お気に入り</li>
				</ul>
			</nav>

			<div style="line-height:0;"><a href="https://www.epark.jp/campaign/family/kosodate?utm_source=www.docknet.jp&utm_medium=banner&utm_campaign=201710premium_children&utm_content=mypage&utm_term=20180329" target="_blank"><img src="https://www.epark.jp/event/family/forDev/mtm_kosodate_1200_60.png" alt="EPARKの子育て割" style="width:100%;"></a></div>

			<article id="mypage">
				<h1 class="mTitle">{{--{{ display_name }}--}}さんのマイページ</h1>
				<ul class="tab">
					<li class="current"><a href="/mypage/">マイページトップ</a></li><li><a href="{{asset('mypage/accept')}}">予約履歴</a></li><li><a href="{{asset('mypage/favorite')}}">お気に入り</a></li><li><a href="{{asset('mypage/information')}}">会員情報</a></li>
				</ul>
					<section id="my_hospital">
						<h2 class="sTitle">お気に入りの医療機関</h2>
						{{--<dl class="list">
							{{ BEGIN MY_HOSPITAL }}
							<dt class="dTitle blue"><a href="/detail_hospital/{{ code }}/basic.html">{{ name }}</a><span>（{{ pref_name }} {{ district_name }}）</span></dt>
							<dd>
								<div class="iconBlock">
									<ul class="cate">
										{{ BEGIN hospital_icon }}
										<li>{{ icon_name }}</li>
										{{ END }}
										{{ IF icon_special }}
										<li class="assessment">{{ icon_special }}</li>
										{{ END IF }}
									</ul>
								</div>
								<ul class="photo">
									<li class="mainphoto"><img src="{{ img1 }}" alt="{{ alt1 }}" id="mainphoto_{{ hospital_no }}"></li>
									<li hospital="{{ hospital_no }}"><img src="{{ img1 }}" alt="{{ alt1 }}"></li>
									<li hospital="{{ hospital_no }}"><img src="{{ img2 }}" alt="{{ alt2 }}"></li>
									<li hospital="{{ hospital_no }}"><img src="{{ img3 }}" alt="{{ alt3 }}"></li>
									<li hospital="{{ hospital_no }}"><img src="{{ img4 }}" alt="{{ alt4 }}"></li>
								</ul>
								<div class="details">
									<p>{{ description }}　<a href="/detail_hospital/{{ code }}/basic.html">続きを見る</a></p>
									<p class="update">更新日：{{ ymd(updt) }}</p>
									<ul>
										<li class="address">{{ pref_name }} {{ district_name }}{{ address1 }}{{ address2 }}　<a href="/detail_hospital/{{ code }}/basic.html#access">地図</a></li>
										<li class="access">最寄り駅：{{ stations }}</li>
										<li class="holiday">休診日：{{ consultation_note }}</li>
									</ul>
								</div>
								<p class="right"><a href="{{ delete }}" class="delete delmyshop" onclick="dataLayer.push({'event':'delmyshop','action':'施設登録を削除','category':'EPARK人間ドック','label':'{{ no }} {{ name }}'});">お気に入りから削除する</a></p>
							</dd>
							{{ END }}
						</dl>--}}
					</section>


					<section id="my_course">

						<h2 class="sTitle">お気に入りの検査コース</h2>
						{{--<dl class="list">
							{{ BEGIN MY_COURSE }}
							<dt class="dTitle green">
								<div><a href="/detail_hospital/{{ hospital_code }}/detail/{{ code }}.html">{{ name }}</a></div>
								<div>
									{{ IF flg_price }}
										{{ IF flg_pre_account_facility }}
											{{ IF flg_pre_account }}
											<!-- 事前決済価格 -->
												<span class="jizenPriceIcon">事前決済価格</span><br>
												<span class="red">料金：</span>
												<span class="fs24px red">{{ number_format(pre_account_price_taxin) }}円</span><span>（税込）</span><br>
											{{ ELSE }}
												<span class="red">料金：</span>
												<span class="fs24px red">{{ number_format(price_taxin) }}円</span><span>（税込）</span><br>
											{{ END IF }}
										{{ ELSE }}
										<span class="red">料金：</span>
										<span class="fs24px red">{{ number_format(price_taxin) }}円</span><span>（税込）</span><br>
										{{ END IF }}
									{{ END IF }}
									{{ IF flg_price_memo }}<span>{{ price_memo }}</span>{{ END IF }}</div>
							</dt>
							<dd>
								<div class="iconBlock">
									<ul class="cate">
										<!-- 事前カード払いアイコン -->
										{{ IF flg_pre_account_facility }}
											{{ IF flg_pre_account}}
												{{ IF flg_local_payment }}
													<li class="jizenCardIcon">事前カード払い可</li>
												{{ ELSE }}
													<li class="jizenCardIcon">事前カード払いのみ</li>
												{{ END IF }}
											{{ END IF }}
										{{ END IF }}
										<!-- /事前カード払いアイコン -->
										{{ BEGIN course_icon }}
										<li>{{ icon_name }}</li>
										{{ END }}
										{{ IF OPTION }}<li>オプションあり</li>{{ END }}
									</ul>
									<ul class="cate gr">
										{{ BEGIN course_item_icon }}
										<li class='popup'>{{ icon_name }}</li>
										{{ END }}
									</ul>
								</div>
								<ul class="photo">
									<li class="mainphoto"><img src="{{ img1 }}" alt="{{ alt1 }}"></li>
								</ul>
								<div class="details">
									<p>{{ course_point_desc }}　<a href="/detail_hospital/{{ hospital_code }}/detail/{{ code }}.html">続きを見る</a></p>
									{{ IF osusume }}
									<p class="recommend">こんな方にオススメ</p>
									<ul>
										{{ BEGIN osusume }}
										<li>{{ inputstring }}</li>
										{{ END }}
									</ul>
									{{ END IF }}
								</div>
								<div class="moreDetails">
									{{ IF VACANCY }}
									<table>
										<tr>
											{{ BEGIN VACANCY }}
											<th>{{ mm }}月</th>
											{{ END }}
										</tr>
										<tr>
											{{ BEGIN  VACANCY }}
									        {{ IF 2appOk}}<td><a href="/detail_hospital/{{ hospital_code }}/detail/{{ code }}.html">○</a></td>{{ END IF }}
											{{ IF appOk}}<td><span style="color:blue;">○</span></td>{{ END IF }}
											{{ UNLESS appOk}}<td>×</td>{{ END IF }}
											{{ END }}
										</tr>
									</table>
									{{ END IF }}
									{{ UNLESS VACANCY }}
									{{ IF paycall }}
									<!-- ペイパーコール表示 -->
									<dl>
									<dt>このコースのご予約はお電話にて承っております。</dt>
									<dd>
									<!--<p class="title">医療機関直通ダイヤル</p>-->
									<p class="tel mt10">{{ paycall }}<br><span class="tel-num-gray">（通話料無料・24時間受付）</span></p>
									</dd>
									</dl>
									<!-- /ペイパーコール表示 -->
									{{ END IF paycall }}
									{{ UNLESS paycall }}
									<!-- IVR表示 -->
									<dl>
									<dt>こちらのコースのご予約はお電話またはメールにて承っております。</dt>
									<dd>
									<!--<p class="title">人間ドック・検診受付専用ダイヤル</p>-->
									<p class="tel">0066-9809-0000127<br><span class="tel-num-gray">（通話料無料・24時間受付）</span></p>
									<p class="mail"><a href="/contact/">メールで問い合わせる</a></p>
									</dd>
									</dl>
									<!-- IVR表示 -->
									{{ END UNLESS paycall }}
									{{ END UNLESS }}
									<div>
										<a href="/detail_hospital/{{ hospital_code }}/detail/{{ code }}.html" class="booking navyBtn01" onclick="dataLayer.push({'event':'checkvacancy','action':'空席確認（詳細確認）','category':'EPARK人間ドック','label':'{{ hospital_no }} {{ hospital_name }}'});">詳細を見て予約する</a>
										<a href="{{ delete }}" class="delete delmyshop" onclick="dataLayer.push({'event':'delmyshop','action':'コース登録を削除','category':'EPARK人間ドック','label':'{{ hospital_no }} {{ hospital_name }}'});">お気に入りから削除する</a>
									</div>
									<div class="address">
										<p><a href="/detail_hospital/{{ hospital_code }}/basic.html">{{ hospital_name }}</a><span>（{{ pref_name }}{{ district_name }}）</span></p>
										<p>{{ pref_name }} {{ district_name }}{{ address1 }}{{ address2 }}　<a href="/detail_hospital/{{ hospital_code }}/basic.html#access">地図</a></p>
									</div>
								</div>
							</dd>
							{{ END }}

						</dl>--}}

					</section>
			</article>

			{{--<script id="mypage_script_loader" type="text/javascript" src="{{ API_COUPON }}/js/script_loader/v2_mypage_src_loader.js?{{ RAND }}" data-client_id="karadadock"></script>--}}
		</div>
	</div><!-- .container -->
@include('common.footer_single')
</body>
</html>
