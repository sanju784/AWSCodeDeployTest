<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="人間ドック,料金,費用,健康診断,脳ドック,がん検診">
<meta name="description" content="「おすすめ人間ドックらくらく相談窓口」は、人間ドック、健康診断のプランをメールでご紹介するサービスです。ご希望の料金、日時、エリアなどを入力して待つだけで、条件に合ったプランがメールで届きます。人間ドックと検診予約サイト EPARK人間ドックです。">
<title>おすすめ人間ドックらくらく相談窓口｜人間ドックと検診予約サイト EPARK人間ドック</title>

<meta property="fb:app_id" content="1269029063242219" />
<meta property="og:title" content="おすすめ人間ドックらくらく相談窓口｜人間ドックと検診予約サイト EPARK人間ドック" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.docknet.jp/rakuraku/" />
<meta property="og:site_name"  content="EPARK人間ドック" />
<meta property="og:description" content="「おすすめ人間ドックらくらく相談窓口」は、人間ドック、健康診断のプランをメールでご紹介するサービスです。ご希望の料金、日時、エリアなどを入力して待つだけで、条件に合ったプランがメールで届きます。人間ドックと検診予約サイト EPARK人間ドックです。" />
<meta property="og:image" content="http://www.docknet.jp/ogp-logo.gif" />
<meta property="article:publisher" content="https://www.facebook.com/epark.dock/" />

<link rel="icon" href="{{ asset('img/common/favicon.ico') }}" type="image/vnd.microsoft.icon">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/common/apple-touch-icon.png') }}">

<!--[if lt IE]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="{{ asset('css/rakuraku/reset.css') }}" >
<link rel="stylesheet" href="{{ asset('css/rakuraku/style.css') }}" >

<script src="{{ asset('js/rakuraku/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/rakuraku/jquery.ui.core.min.js') }}"></script>
<script src="{{ asset('js/rakuraku/jquery.ui.datepicker.min.js') }}"></script>
<script src="{{ asset('js/rakuraku/jquery.ui.datepicker-ja.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/rakuraku/jquery-ui.min.css') }}" >

<script src="{{ asset('js/rakuraku/rakuraku.js') }}"></script>


<script>
  $(function() {
    $("#datepicker").datepicker();
    $("#datepicker").datepicker("option", "showOn", 'both');
    $("#datepicker").datepicker("option", "buttonImageOnly", true);
    $("#datepicker").datepicker("option", "buttonImage", "{{asset('img/rakuraku/ico_calendar.png')}}");
    $("#datepicker").datepicker("option", "onClose", function(){ $(this).blur(); } );
  });
  $(function() {
    $("#datepicker2").datepicker();
    $("#datepicker2").datepicker("option", "showOn", 'both');
    $("#datepicker2").datepicker("option", "buttonImageOnly", true);
    $("#datepicker2").datepicker("option", "buttonImage", "{{asset('img/rakuraku/ico_calendar.png')}}");
    $("#datepicker2").datepicker("option", "onClose", function(){ $(this).blur(); } );
  });
</script>



<script src="{{ asset('js/rakuraku/jquery.validationEngine.js') }}"></script>
<script src="{{ asset('js/rakuraku/jquery.validationEngine-ja.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/rakuraku/validationEngine.jquery.css') }}">

<script>
$(function(){
    jQuery("#form_1").validationEngine('attach', {
      promptPosition:"bottomLeft"
    });
  });
</script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KJ8W3P"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KJ8W3P');</script>
<!-- End Google Tag Manager -->

</head>
<body>

<div id="wrapper">

<div class="header_wrap">
<header>
<img src="{{asset('img/rakuraku/hd_logo.png') }}" alt="EPARK人間ドック">
</header>
</div>

<div class="lead_wrap">
<div class="lead_container">
<h1><img src="{{asset('img/rakuraku/h1_logo.png')}}" alt="おすすめ人間ドックらくらく相談窓口"></h1>
<h2>おすすめ人間ドックらくらく相談窓口とは？</h2>
<h3>検査の内容は？ 料金がわからない… そんなお悩みを解消します！</h3>
<div class="lead_txt">
<img src="{{ asset('img/rakuraku/illust_lead.png') }}" alt="">
「おすすめ人間ドックらくらく相談窓口」は、あなたのご希望に沿った人間ドック、健康診断のプラン・料金などをメールでご紹介するサービスです。<br>
ご希望の料金、日時、エリアなどを入力して待つだけで、条件に合った医院、コースがメールで届きます。オペレーターとメールや電話でやり取りして質問していただくことも可能。<br>
検診内容や費用など、わからない事が多い人間ドック選びをお手伝いします。
</div>
</div>
</div>

<div class="step_wrap">
<ul>
<li><img src="{{ asset('img/rakuraku/fig_step1.png') }}" alt="STEP1 ご希望の条件を入力して送信 ご希望の条件を入力して「送信する」をクリック！"></li>
<li><img src="{{ asset('img/rakuraku/fig_step2.png') }}" alt="STEP2 コースをご紹介するメールが届きます EPARK人間ドックから条件に合った人間ドック・健康診断のコースを紹介するメールが届きます。"></li>
<li><img src="{{ asset('img/rakuraku/fig_step3.png') }}" alt="STEP3 コースが決まったらお申込み コースが決まったらメール内のURLからオンラインで申し込み！"></li>
</ul>
</div>

<div id="form_container">
<h2>人間ドックの希望条件を入力してください。</h2>
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
   </div>
@endif
{!! Form::open(['action' => 'RakurakuController@confirm', 'id' => "form_1"]) !!}

<table>
<tr>
<th>
{{Form::label('name', 'お名前')}}<img src="{{ asset('img/rakuraku/icon_required.png') }}" width="45" height="30" alt="必須">
</th>
<td>
{{Form::text('name', '', ['placeholder' => '例：山田太郎', 'id' => "form-validation-field-0", 'class' => "validate[required]", 'maxlength' => "50"])}}
</td>
</tr>
<tr>
<th>
{{Form::label('email', 'メールアドレス') }}<img src="{{ asset('img/rakuraku/icon_required.png') }}" width="45" height="30" alt="必須">
</th>
<td>
{{Form::text('email', '', ['id'=>"email1", 'placeholder'=>"例：mail@docknet.jp", 'class' => "validate[required,custom[email]]", 'maxlength' => "100"])}}
<span class="formonly">
<br>docomo、au、softbankなど各キャリアのメールアドレスをご利用の場合は「@eparkdock.com」ドメインを受信できるように設定ください。</span></td>
</tr>
<tr>
<th>
{{Form::label('email2', 'メールアドレス確認')}}<img src="{{ asset('img/rakuraku/icon_required.png') }}" width="45" height="30" alt="必須"></th>
<td>
{{Form::text('email2', '', ['id'=>"email2", 'placeholder'=>"例：mail@docknet.jp", 'class' => "validate[required,custom[email],equals[email1]]", 'maxlength'=>"100"])}}
</tr>
<tr>
<th>
{{Form::label('phone', 'お電話番号')}}<img src="{{ asset('img/rakuraku/icon_required.png') }}" width="45" height="30" alt="必須"></th>
<td>
{{Form::text('phone', '', ['placeholder'=>"例：03-1234-5678", 'class' => "validate[required]", 'maxlength' => "50", 'id' => "form-validation-field-1"])}}
</tr>
<tr>
<th>人間ドック・検診をお受けになりたいエリアのご希望</th>
<td>
{{Form::text('area', '', ['class'=>"free_kibou_area", 'placeholder'=>"例：東京都新宿区 最大200文字"]) }}
</tr>
<tr>
<th>金額のご希望<img src="{{ asset('img/rakuraku/icon_required.png') }}" width="45" height="30" alt="必須"></th>

<td class="price">
{{Form::select('amount', array(""=>'選択してください',"5,000"=>'5,000',"10,000"=>'10,000',"20,000"=>'20,000',"30,000"=>'30,000',"40,000"=>'40,000',"50,000"=>'50,000', "60,000"=>'60,000',"70,000"=>'70,000',"80,000"=>'80,000',"90,000"=>'90,000',"100,000"=>'100,000',"150,000"=>'150,000',"200,000"=>'200,000',"300,000"=>'300,000',"400,000"=>'400,000',"500,000"=>'500,000',"1,000,000"=>'1,000,000',"2,000,000"=>'2,000,000'), "", ['class'=> "validate[required]", 'id'=>"form-validation-field-2"])}}
<span>円以内</span>
</td>
</tr>
<tr>
<th>受診する期間のご希望<img src="{{ asset('img/rakuraku/icon_required.png') }}" width="45" height="30" alt="必須"></th>
<td class="date">
<input type="text" id="datepicker" name="datepicker1" readonly="readonly" class="validate[required]"><br><span>から</span><br><input type="text" id="datepicker2" name="datepicker2" readonly="readonly" class="validate[required]">
</td>
</tr>
<tr>
<th>ご希望のコース種別</th>
<td><ul class="chk_list">

<li>{{Form::checkbox("chk_cat[]", "人間ドック", null, ['id'=>"chk_cat_dock"])}}人間ドック</li>
<li>{{Form::checkbox("chk_cat[]","脳ドック", null, ['id'=>"chk_cat_braindock"])}}脳ドック</li>
<li>{{Form::checkbox("chk_cat[]","PET検診", null,['id'=>"chk_cat_pet"])}}PET検診</li>
<li>{{Form::checkbox("chk_cat[]","心臓ドック", null, ['id'=>"chk_cat_heartdock"])}}心臓ドック</li>
<li>{{Form::checkbox("chk_cat[]","レディースドック", null,['id'=>"chk_cat_ladydock"])}}レディースドック</li>
<li>{{Form::checkbox("chk_cat[]","婦人科検診", null, ['id'=>"chk_cat_ladycheck"])}}婦人科検診</li>
<li>{{Form::checkbox("chk_cat[]","乳がん検診", null, ['id'=>"chk_cat_breastcheck"])}}乳がん検診</li>
<li>{{Form::checkbox("chk_cat[]","子宮がん検診", null,['id'=>"chk_cat_uteruscheck"])}}子宮がん検診</li>
<li>{{Form::checkbox("chk_cat[]","胃がん検診", null, ['id'=>"chk_cat_stomachcheck"])}}胃がん検診</li>
<li>{{Form::checkbox("chk_cat[]","大腸がん検診", null, ['id'=>"chk_cat_coloncheck"])}}大腸がん検診</li>
<li>{{Form::checkbox("chk_cat[]","肺がん検診", null, ['id'=>"chk_cat_lungcheck"])}}肺がん検診</li>
<li>{{Form::checkbox("chk_cat[]","健康診断", null, ['id'=>"chk_cat_healthcheck"])}}健康診断</li>
</ul>
</td>
</tr>
<tr>
<th>ご要望など<br>（自由にご記入ください）</th>
<td>
{{Form::textarea("free_youbou",'', ['class'=>"free_youbou", 'placeholder'=>"最大1000文字"])}}
</tr>
</table>


<div class="agreement">
<p class="mb_10"><a href="/agreement/" target="_blank">ご利用規約</a></p>
<p>個人情報の取り扱いについて</p>
<ul class="privacy-ul">
<li>ご入力いただく個人情報は、お問い合わせのために利用します。</li>
<li>ご入力いただいた情報をシステム上で保管・管理するため、当社の選定基準を満たした事業者に委託する場合がございます。これ以外の場合において、皆様の個人情報をご本人の同意なく第三者に提供することはございません。</li>
<li>ご入力いただいた個人情報に関して、利用目的の通知、個人情報の開示、訂正、追加、削除、利用停止、消去、第三者提供停止（「開示等」といいます）を求めることができます。なお、開示等に応じる窓口は当該の問い合わせフォームになります。</li>
</ul>
<p class="chk"><label for="chk_agreement"><input type="checkbox" name="agreement" id="chk_agreement" value="同意" class="validate[required]">個人情報の取り扱いおよび<a href="/privacy/" target="_blank">プライバシーポリシー</a>に同意する<img src="{{asset('img/rakuraku/icon_required.png') }}" width="45" height="30" alt="必須"></label></p>
</div>

<div class="ac">
<p>
{{Form::submit('確認画面へ進む', ['id' => 'to_confirm'])}}
</p>
</div>

{!! Form::close() !!}
</div><!-- /#form_container -->

<div class="footer_wrap">
<footer>Copyright &copy; EPARK人間ドック <br>All rights reserved.</footer>
</div>

</div><!-- /#wrapper  -->

<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "BreadcrumbList",
"itemListElement":
	[
		{
			"@type": "ListItem",
			"position":1,
			"item": {
				"@id":"https://www.docknet.jp/",
				"name":"人間ドックと検診予約サイト EPARK人間ドック"
			}
		}
		,{
			"@type": "ListItem",
			"position":2,
			"item": {
				"@id":"https://www.docknet.jp/rakuraku/",
				"name":"おすすめ人間ドックらくらく相談窓口"
			}
		}
	]
}
</script>
</body>
</html>
