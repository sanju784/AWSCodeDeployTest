<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
@yield('meta_data')

<title>@yield('title')</title>
<link rel="dns-prefetch" href="//cdnjs.cloudflare.com">

<link rel="icon" href="{{ asset('img/common/favicon.ico') }}" type="image/vnd.microsoft.icon">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/common/apple-touch-icon.png') }}">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<link rel="stylesheet" href="{{asset('css/common/base.css')}}">
@yield('stylesheet_content')

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('js/common/jquery-3.3.1.min.js')}}"><\/script>')</script>
<!--[if lt IE 9]>
<script src="{{asset('js/common/html5.js')}}"></script>
<![endif]-->
<script type="text/javascript" src="{{asset('js/common/common.js')}}"></script>
@yield('script_content')
@include('common.ogp')
</head>
