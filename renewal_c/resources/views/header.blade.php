@include('common.tags')

<link type="text/css" rel="stylesheet" href="//d229s2sntbxd5j.cloudfront.net/epark_portal_global/css/epark_portal_global_pc.css">
<script type="text/javascript" src="//d229s2sntbxd5j.cloudfront.net/epark_portal_global/js/epark_portal_global_html.js"></script>
<script type="text/javascript" src="/common/js/epark_portal_global.js"></script>
<!--<script type="text/javascript">
/*jQuery(function(){get_epark_portal_global_header_html('karadadock');});
jQuery(function(){get_epark_portal_global_footer_html('karadadock');});*/
</script>-->

<script type="text/javascript" src="{{asset('js/ajs/debug_a.js')}}"></script>
<header>
	<div id="docSec">
		<div id="epark-global-header-box"></div>
	</div>
	<div id="mainHeader">
		<div>
			<h1>{{$title}}｜人間ドックと検診予約サイト EPARK人間ドック</h1>
			<a href="/"><img id="mainLogo" src="{{asset('img/common/hd_logo.png')}}" alt="EPARK人間ドック" width="149" height="59"></a>
			<p class="access">人間ドック・検診予約専用ダイヤル：<span>0066-9809-0000127</span></p>
			<p class="memo">通話料無料・24時間受付。予約専用の番号です。施設直通の番号ではありません。</p>
			<div class="coupon"><a class="coupon-list-btn" href="javascript:void(0)" data-badge_left="25" data-badge_top="-8">クーポン</a></div>
			<script type="text/javascript" src="{{asset('js/ajs/header_login.js')}}"></script>
		</div>
	</div>
</header>
<nav id="mainNav">
	<ul>
		<li><a class="mn1" href="/search/">人間ドック・検診を探す</a></li>
		<li><a class="mn2" href="/column/">特集・コラム</a></li>
		<li><a class="mn3" href="/qa/">ギモン解決Q&amp;A</a></li>
		<li><a class="mn4" href="/interview/">受診レポート</a></li>
		<li><a class="mn5" href="/guide/">ご利用ガイド</a></li>
	</ul>
</nav>
