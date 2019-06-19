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

<link rel="icon" href="{{asset('img/common/favicon.ico')}}" type="image/vnd.microsoft.icon">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/common/apple-touch-icon.png')}}">

<!--[if lt IE]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="{{asset('css/rakuraku/reset.css')}}" >
<link rel="stylesheet" href="{{asset('css/rakuraku/style.css')}}" >

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
<img src="{{asset('img/common/hd_logo.png')}}" alt="EPARK人間ドック">
</header>
</div>

<div class="lead_wrap">
<div class="lead_container">
<h1><img src="{{asset('img/rakuraku/h1_logo.png')}}" alt="おすすめ人間ドックらくらく相談窓口"></h1>
</div>
</div>


<div id="form_container">
<h2>入力内容をご確認ください。</h2>
{!! Form::open(['action' => 'RakurakuController@complete', 'id'=>"form_1"]) !!}

<table>
<tr>
<th>お名前<img src="{{asset('img/rakuraku/icon_required.png')}}" width="45" height="30" alt="必須"></th>
<td>{{$name}}</td>
</tr>
<tr>
<th>メールアドレス<img src="{{asset('img/rakuraku/icon_required.png')}}" width="45" height="30" alt="必須"></th>
<td>{{$email}}</td>
</tr>
<tr>
<th>メールアドレス確認<img src="{{asset('img/rakuraku/icon_required.png')}}" width="45" height="30" alt="必須"></th>
<td>{{$email2}}</td>
</tr>
<tr>
<th>お電話番号<img src="{{asset('img/rakuraku/icon_required.png')}}" width="45" height="30" alt="必須"></th>
<td>{{$phone}}</td>
</tr>
<tr>
<th>人間ドック・検診をお受けになりたいエリアのご希望</th>
<td>{{$area}}</td>
</tr>
<tr>
<th>金額のご希望<img src="{{asset('img/rakuraku/icon_required.png')}}" width="45" height="30" alt="必須"></th>
<td><span>{{$amount}}</span> <span>円以内</span></td>
</tr>
<tr>
<th>受診する期間のご希望<img src="{{asset('img/rakuraku/icon_required.png')}}" width="45" height="30" alt="必須"></th>
<td>{{$date1}} から{{$date2}}</td>
</tr>
<tr>
<th>ご希望のコース種別</th>
<td>
<ul class="chk_list">
@foreach($chk_list as $list)
<li>{{$list}}</li>
@endforeach
</ul>
</td>
</tr>
<tr>
<th>ご要望など<br>（自由にご記入ください）</th>
<td>{{$textArea}}</td>
</tr>
</table>

<div class="ac">
<p class="mb_20">希望条件をご確認のうえ、「送信する」ボタンをクリックしてください。</p>
<p>
<a href="javascript:history.back()" id="return_input">修正する</a>
{{Form::submit('送信する', ['id' => 'to_confirm'])}}
</p>

</div>

{!! Form::close() !!}
</div><!-- /#form_container -->

<div class="footer_wrap">
<footer>Copyright &copy; EPARK人間ドック <br>All rights reserved.</footer>
</div>


</div><!-- /#wrapper  -->
</body>
</html>
