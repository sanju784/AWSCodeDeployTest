@include('mypage.headtag')
<body>
<script type="text/javascript" src="{{asset('js/ajs/popup.js')}}"></script>
@include('detail_hospital.course.parts_popup')
@include('header', ['title' => '予約検診履歴'])
	<div class="container">
		<div id="mainContent">
			<nav id="breadcrumb">
				<ul>
					<li><a href="/">人間ドックと検診予約サイト EPARK人間ドック</a></li>
					<li><a href="/mypage/">マイページ</a></li>
					<li>予約履歴</li>
				</ul>
			</nav>

			<div style="line-height:0;"><a href="https://www.epark.jp/campaign/family/kosodate?utm_source=www.docknet.jp&utm_medium=banner&utm_campaign=201710premium_children&utm_content=mypage&utm_term=20180329" target="_blank"><img src="https://www.epark.jp/event/family/forDev/mtm_kosodate_1200_60.png" alt="EPARKの子育て割" style="width:100%;"></a></div>

			<article id="mypage">
				<h1 class="mTitle">{{--{{ display_name }}--}}さんのマイページ</h1>
				<ul class="tab">
					<li class="current"><a href="/mypage/">マイページトップ</a></li><li><a href="{{asset('mypage/accept')}}">予約履歴</a></li><li><a href="{{asset('mypage/favorite')}}">お気に入り</a></li><li><a href="{{asset('mypage/information')}}">会員情報</a></li>
				</ul>

					<section>
						<h2 class="sTitle mypageAccept">予約履歴<a href="https://appointment.epark.jp/usagehistory?utm_source=www.docknet.jp&utm_medium=referral&utm_content=mypage_history_top" target="_blank">他サービス利用履歴</a></h2>
						{{--{{ BEGIN MY_ACCEPT }}
                <dl class="list">
                    <p>受診希望日：{{ ymd(start_date) }} 　申込日：{{ ymd(accept_date) }}</p>
                    {{ IF ERROR }}<p class="warning">{{ ERROR }}</p>{{ END IF }}
                    {{ UNLESS ERROR }}
                    <dt class="dTitle green mt0">
                        <div>{{ name }}</div>
                        {{ IF price_taxin }}
                            <div><span class="red">料金：</span><span class="fs24px red">{{ number_format(total_amount) }}円</span><span>（税込）</span>
                            {{ IF flg_price_memo }}<br><span>{{ price_memo }}</span>{{ END IF }}</div>
                        {{ END IF }}
                        {{ UNLESS price_taxin }}
                            <div>{{ price_memo }}</div>
                        {{ END UNLESS }}
                    </dt>
                    <dd>
                        <ul class="photo">
                            <li class="mainphoto"><img src="{{ img1 }}" alt="{{ alt1 }}"></li>
                        </ul>
                        <div class="details" style="display:none;">
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
                        <div class="details">
                            <h3>検査コース</h3>
                            <p>{{name}}：{{ IF price_taxin }}{{ number_format(price_taxin) }}円（税込）{{ END IF }}{{ UNLESS price_taxin }}{{ price_memo }}{{ END UNLESS }}</p>
                            {{ IF options }}
                            <h3>オプション</h3>
                            {{ BEGIN options }}
                            <p>{{ option_name }}：{{ number_format(option_price_tax) }}円（税込）</p>
                            {{ END }}
                            {{ END }}
                            <h3>決済方法</h3>
                            {{ IF payment_flg == '1' }}
                                <p>事前カード決済済み</p>
                            {{ ELSE }}
                                <p>現地決済</p>
                            {{ END IF }}
                        </div>
                        <div class="moreDetails" style="clear:left;">
                            <div class="address">
                                <p><a href="/detail_hospital/{{ hospital_code }}/basic.html">{{ hospital_name }}</a><span>（{{ pref_name }}{{ district_name }}）</span></p>
                                <p>{{ pref_name }} {{ district_name }}{{ address1 }}{{ address2 }}　<a href="/detail_hospital/{{ hospital_code }}/basic.html#access">地図</a></p>
                            </div>
                        </div>
                        {{ IF alive }}
                            {{ IF deadline_flg }}
                                <p class="cancelBlock">
                                    ご受診日が近いため、マイページからの変更・キャンセル受付は終了させていただきました。<br>
                                    お手数おかけいたしますが、変更・キャンセルご希望の場合は、直接{{ hospital_name }}（電話番号：{{ tel }}）へお電話ください。
                                </p>
                            {{ ELSE IF }}
                                {{ IF payment_flg == '1' }}
                                    <!--事前決済-->
                                    <p class="cancelBlock">
                                        <a href="{{ alive }}" class="delete">キャンセル</a>
                                        ※キャンセルは、{{ deadline_day }}まで受付けております。
                                    </p>
                                {{ ELSE IF }}
                                    <!--現地決済-->
                                    <p class="cancelBlock">
                                        <a href="{{ alive }}" class="delete">キャンセル・予約内容の変更</a>
                                        ※変更・キャンセルは、{{ deadline_day }}まで受付けております。
                                    </p>
                                {{ END IF }}
                            {{ END IF }}
                        {{ END IF }}

                        {{ IF manzoku_button }}
                        <!-- START:回答前 -->
                        <div class="ratingBox before">
                            <p>今回の検診についての満足度を教えてください。</p>
                            <ul>
                                <li>
                                    <div class="navyBtn01 openRating">満足</div>
                                    <div class="modalWindow ssRating" style="display:none;">
                                        <div>
                                            <p><span>「満足」を選択しました。</span><br>どういったところが満足だったか具体的にお聞かせください。（任意）</p>
                                            <textarea class="comment03" maxlength="1000"></textarea>
                                            <p>内容にお間違いなければ「送信する」ボタンを押してください。</p>
                                            <ul><li>※やり直す場合は、「閉じる」ボタンからお戻りください。</li><li>※一度投稿すると、変更・削除はできません。</li></ul>
                                            <div class="close">閉じる</div>
                                            <div class="orangeBtn01 satisfy3" value="3" data-history='{{ history }}' onclick="dataLayer.push({'event':'satisfy','action':'満足度選択','category':'EPARK人間ドック','label':'{{ hospital_no }} {{ hospital_name }}'});">送信する</div>
                                            <div class="grayBtn01">口コミにも投稿する</div>
                                        </div>
                                    <!-- /.modalWindow --></div>
                                </li>

                                <li>
                                    <div class="navyBtn01 openRating">どちらでもない</div>
                                    <div class="modalWindow ssRating" style="display:none;">
                                        <div>
                                            <p><span>「どちらでもない」を選択しました。</span><br>お間違いなければ「送信する」ボタンを押してください。</p>
                                            <ul><li>※やり直す場合は、「閉じる」ボタンからお戻りください。</li><li>※一度投稿すると、変更・削除はできません。</li></ul>
                                            <div class="close">閉じる</div>
                                            <div class="orangeBtn01 satisfy2" value="2" data-history='{{ history }}' onclick="dataLayer.push({'event':'satisfy','action':'満足度選択','category':'EPARK人間ドック','label':'{{ hospital_no }} {{ hospital_name }}'});">送信する</div>
                                            <div class="grayBtn01">口コミにも投稿する</div>
                                        </div>
                                    <!-- /.modalWindow --></div>
                                </li>

                                <li>
                                    <div class="navyBtn01 openRating">不満足</div>
                                    <div class="modalWindow ssRating" style="display:none;">
                                        <div>
                                            <p><span>「不満足」を選択しました。</span><br>どういったところが不満足だったか具体的にお聞かせください。（任意）</p>
                                            <label><input type="radio" name="rating3" value="施設">施設</label><br>
                                            <label><input type="radio" name="rating3" value="対応">対応</label><br>
                                            <label><input type="radio" name="rating3" value="検診">検診</label><br>
                                            <label><input type="radio" name="rating3" value="その他">その他</label>
                                            <textarea class="comment01" maxlength="1000"></textarea>
                                            <p>内容にお間違いなければ「送信する」ボタンを押してください。</p>
                                            <ul><li>※やり直す場合は、「閉じる」ボタンからお戻りください。</li><li>※一度投稿すると、変更・削除はできません。</li></ul>
                                            <div class="close">閉じる</div>
                                            <div class="orangeBtn01 satisfy1" value="1" data-history='{{ history }}' onclick="dataLayer.push({'event':'satisfy','action':'満足度選択','category':'EPARK人間ドック','label':'{{ hospital_no }} {{ hospital_name }}'});">送信する</div>
                                            <div class="grayBtn01">口コミにも投稿する</div>
                                        </div>
                                    <!-- /.modalWindow --></div>
                                </li>
                            </ul>
                        <!-- /.ratingBox --></div>
                        <!-- END:回答前 -->
                        {{ END IF }}


                        <!-- START:回答直後 -->
                        <div class="ratingBox answered" style="display:none">
                            <p>満足度回答済み。ご回答ありがとうございました。</p>
                            <p class="answer" id="manzoku" style="display:none">満足</p>
                            <p class="answer" id="dotti" style="display:none">どちらでもない</p>
                            <p class="answer" id="fumanzoku" style="display:none">不満足</p>
                        </div>
                        <!-- END：回答直後 -->

                        {{ IF manzoku_kaitou }}
                        <!-- START:回答後 -->
                        <div class="ratingBox answered">
                            <p>満足度回答済み。ご回答ありがとうございました。</p>
                            {{ IF manzoku }}<p class="answer" id="manzoku">満足</p>{{ END IF }}
                            {{ IF dotti }}<p class="answer" id="dotti">どちらでもない</p>{{ END IF }}
                            {{ IF fumanzoku }}<p class="answer" id="fumanzoku">不満足</p>{{ END IF }}
                        </div>
                        <!-- END：回答後 -->
                        {{ END IF }}

                    </dd>
                    {{ END UNLESS }}
                </dl>
                {{ END }}--}}
            </section>
			</article>

			{{--<script id="mypage_script_loader" type="text/javascript" src="{{ API_COUPON }}/js/script_loader/v2_mypage_src_loader.js?{{ RAND }}" data-client_id="karadadock"></script>--}}
		</div>
	</div><!-- .container -->
@include('common.footer_single')
</body>
</html>
