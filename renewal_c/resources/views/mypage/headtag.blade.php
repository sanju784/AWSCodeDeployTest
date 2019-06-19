<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=1100">

<meta name="robots" content="noindex,follow" />
<title>{{--{{ meta.title }}--}}</title>

<link rel="icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">

<link rel="stylesheet" href="{{asset('css/common/normalize.css')}}">
<link rel="stylesheet" href="{{asset('css/common/base.css')}}">
<link rel="stylesheet" href="{{asset('css/search/search.css')}}">
<link rel="stylesheet" href="{{asset('css/mypage/mypage.css')}}">
@section('script_content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('js/common/jquery-3.3.1.min.js')}}"><\/script>')</script>
<!--[if lt IE 9]>
<script src="{{asset('js/common/html5.js')}}"></script>
<![endif]-->
<script type="text/javascript" src="{{asset('js/common/common.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mypage/mypage.js?ver=20170921')}}"></script>
@endsection
</head>
