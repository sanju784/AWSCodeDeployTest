<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
        <link type="text/css" rel="stylesheet" href="//d229s2sntbxd5j.cloudfront.net/epark_portal_global/css/epark_portal_global_pc.css">
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ningenstyle.css">
</head>

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
			<h1>人間ドック学会 機能評価認定施設｜人間ドックと検診予約サイト EPARK人間ドック</h1>
			<a href="/"><img id="mainLogo" src="<?php bloginfo('template_url'); ?>/img/hd_logo.png" alt="EPARK人間ドック" width="149" height="59"></a>
			<p class="access">人間ドック・検診予約専用ダイヤル：<span>0066-9809-0000127</span></p>
			<p class="memo">通話料無料・24時間受付。予約専用の番号です。施設直通の番号ではありません。</p>
			<div class="coupon">
                <a class="coupon-list-btn" style=" background-image: url('<?php bloginfo('template_url'); ?>/img/btn_coupon.png');" href="javascript:void(0)" data-badge_left="25" data-badge_top="-8">クーポン</a></div>
            <div class="connect"><a class="join" href="/mypage/">
                    <img src="<?php bloginfo('template_url'); ?>/img/hd_mypage.png" style="margin-top: 8px" alt="マイページ" width="97" height="18"></a><a class="login" href="">
                    <img src="<?php bloginfo('template_url'); ?>/img/hd_logout.png" style="margin-top: 7px" alt="ログアウト" width="101" height="19"></a><div class="redframe" id="hdWordSearch"><input type="search" id="hdWordSearchBox">
                    <input type="image" src="<?php bloginfo('template_url'); ?>/img/search_icon.png" alt="送信" name="hdSearchBtn" id="hdSearchBtn"></div></div>

		</div>
	</div>




</header>

	<div id="content" class="site-content">
