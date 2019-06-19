<script type="text/javascript" src="/ajs/calendar.js"></script>

<article>
	
	<a name="calendar"></a>
	<div id="resultView">
		<h2 class="mTitle">{{ hospitalName }}</h2>
		{{ include('detail_hospital/parts_details.html') }}

		<div id="calender">
			<nav id="resultTab" class="greenTab">
			<ul>
				<li id="showFacilities"><a href="/detail_hospital/{{ hospitalCode }}/basic.html">施設情報</a></li>
				<li id="showCourse"><a href="/detail_hospital/{{ hospitalCode }}/course.html">検査コース</a></li>
				<li id="showCalendar" class="on"><a href="/detail_hospital/{{ hospitalCode }}/calendar.html">空き状況カレンダー</a></li>
				<li id="showPhoto"><a href="/detail_hospital/{{ hospitalCode }}/photo.html">写真</a></li>
			</ul>
			</nav>

			<div>
				<div class="nb">
					<h2>{{ yy }}年{{mm}}月の空き状況カレンダー</h2>
					<p>枠が - の場合でも、お電話にてお問い合わせください。</p>
					<nav class="btnTab">
						<ul>
						{{ BEGIN INDEX }}
						<li id="m{{ mm }}" class="{{ current }}"><a href="?mm={{ mm }}#calendar">{{ mm }}月</a></li>
						{{ END }}
						</ul>
					</nav>
				</div>

		{{ IF LISTDATA }}
				{{ IF nodata }}
				<p class="empty">データがありません</p>
				{{ END IF }}
				<table>
					{{ LISTDATA }}
					{{ BEGIN THEAD }}
					<thead>
					<!-- header -->
					<tr>
						<th rowspan="3">検査コース名</th>
						<th colspan="{{ maxDt }}">{{ mm }}月</th>
					</tr>
					<tr>
						{{ BEGIN dt }}
						<td class="{{ class }}">{{ dt }}</td>
						{{ END }}
					</tr>
					<tr>
						{{ BEGIN dt }}
						<td class="{{ class }}">{{ wd }}</td>
						{{ END }}
					</tr>
					</thead>
					{{ END THEAD }}
					{{ BEGIN TBODY }}

					<tbody>
						<tr>
						<th><a href="/detail_hospital/{{ hospital_code }}/detail/{{ code }}.html">{{ name }}</a><br>

							{{ IF flg_price }}
								{{ IF flg_pre_account_facility }}
									<!-- 事前決済価格 -->
									{{ IF flg_pre_account_course }}
										<span class="jizenPriceIcon">事前決済価格</span><br>
										<span class="red strong">{{ number_format(pre_account_price_taxin) }}円</span><span>（税込）</span><br>
									{{ ELSE }}
										<!-- 通常決済価格 -->
										<span class="red strong">{{ number_format(price_taxin) }}円</span><span>（税込）</span><br>
									{{ END IF }}
								{{ ELSE }}
									<!-- 通常決済価格 -->
									<span class="red strong">{{ number_format(price_taxin) }}円</span><span>（税込）</span><br>
								{{ END }}
							{{ END IF }}
							{{ if flg_price_memo }}<span>{{ price_memo }}</span>{{ end }}</th>
						{{ BEGIN dt }}
						<td class="{{ class }}">
							{{ IF url }}<a class="a_reserve" href="{{ url }}" {{ IF blank }}target="_blank"{{ END IF }} >{{ END }}
							{{ IF value }}{{ value }}{{ END IF }}
							{{ IF url }}</a>{{ END }}
						</td>
						{{ END dt }}
						</tr>
					</tbody>
					{{ END TBODY }}
				</table>
				
				<div class="nb">
					<nav class="btnTab">
						<ul>
						{{ BEGIN INDEX }}
						<li id="m{{ mm }}" class="{{ current }}"><a href="?mm={{ mm }}#calendar">{{ mm }}月</a></li>
						{{ END }}
						</ul>
					</nav>
				</div>
		{{ END IF LISTDATA }}

		{{ IF H.paycall }}
				<!-- ペイパーコール表示 -->
				<section class="contactPanel">
				<div class="orangeBtn01 tel">
				<p>医療機関直通ダイヤル<span>通話料無料</span><br><em>{{ H.paycall }}</em></p>
				</div>
				</section>
				<!-- /ペイパーコール表示 -->
				{{ END IF }}

		{{ UNLESS H.paycall }}
				<!-- IVR表示 -->
				<section class="contactPanel">
				<div class="orangeBtn01 tel">
				<p>EPARK人間ドック予約受付ダイヤル<span>24時間受付・通話料無料</span><br><em>0066-9809-0000127</em></p>
				</div>
				</section>
				<!-- /IVR表示 -->
				{{ END IF }}
				
			</div>
			
			{{ include('detail_hospital/parts_info.html') }}

		</div>

	{{ include('detail_hospital/parts_etc.html') }}

	</div>
</article>
