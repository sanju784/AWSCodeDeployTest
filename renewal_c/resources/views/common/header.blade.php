@include('common.tags')

<link type="text/css" rel="stylesheet" href="//d229s2sntbxd5j.cloudfront.net/epark_portal_global/css/epark_portal_global_pc.css">
<script type="text/javascript" src="//d229s2sntbxd5j.cloudfront.net/epark_portal_global/js/epark_portal_global_html.js"></script>
<script type="text/javascript" src="{{ asset('js/common/epark_portal_global.js') }}"></script>
<script type="text/javascript">
/*jQuery(function(){get_epark_portal_global_header_html('karadadock');});
jQuery(function(){get_epark_portal_global_footer_html('karadadock');});*/
</script>

<script type="text/javascript" src="{{asset('js/ajs/debug_a.js')}}"></script>
<header>
    <div id="docSec">
        <div id="epark-global-header-box">
            <div class="epark-global-header-box-inner epark-global-clearfix">
                <ul class="epark-global-clearfix">
                    <li class="epark-global-header-information">
                        <a href="" target="_blank">順番待ちをスルー♪時間節約ならEPARK</a>
                    </li>
                    <li class="epark-global-header-home">
                        <a href="" class="epark-global-arrow">EPARK</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
	<div id="mainHeader">
		<div>
			<h1>{{$h1}}｜人間ドックと検診予約サイト EPARK人間ドック</h1>
			<a href="/"><img id="mainLogo" src="{{asset('img/common/hd_logo.png')}}" alt="EPARK人間ドック" width="149" height="59"></a>
			<p class="access">人間ドック・検診予約専用ダイヤル：<span>0066-9809-0000127</span></p>
			<p class="memo">通話料無料・24時間受付。予約専用の番号です。施設直通の番号ではありません。</p>
			<div class="coupon">
                <a class="coupon-list-btn" style=" background-image: url('{{asset('img/common/btn_coupon.png')}}');" href="javascript:void(0)" data-badge_left="25" data-badge_top="-8">クーポン</a></div>
            <div class="connect"><a class="join" href="/mypage/">
                    <img src="{{asset('/img/common/hd_mypage.png')}}" style="margin-top: 8px" alt="マイページ" width="97" height="18"></a><a class="login" href="">
                    <img src="{{asset('/img/common/hd_logout.png')}}" style="margin-top: 7px" alt="ログアウト" width="101" height="19"></a><div class="redframe" id="hdWordSearch"><input type="search" id="hdWordSearchBox">
                    <input type="image" src="{{asset('/img/common/search_icon.png')}}" alt="送信" name="hdSearchBtn" id="hdSearchBtn"></div></div>
			{{--<script type="text/javascript" src="{{asset('js/ajs/header_login.js')}}"></script>--}}
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
