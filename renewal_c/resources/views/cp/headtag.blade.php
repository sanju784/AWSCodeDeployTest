@extends('common.headtag')

@section('meta_data')
<meta name="description" content="EPARK人間ドックではみなさまの健診・人間ドック補助をいたします。EPARK人間ドックの補助制度をご利用いただき、みなさまの健康管理、疾患予防にお役立てください。" />
<meta name="keywords" content="" />
@endsection

@section('title', '「世界対がんデー」キャシュポ補助キャンペーン｜人間ドックと検診予約サイト EPARK人間ドック')

@section('stylesheet_content')
<link rel="icon" href="{{asset('img/common/favicon.ico')}}" type="image/vnd.microsoft.icon">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">

<link rel="stylesheet" href="{{asset('css/common/normalize.css')}}">
<link rel="stylesheet" href="{{asset('css/common/base.css')}}">
<link rel="stylesheet" href="{{asset('css/cp/index.css')}}">
@endsection

@section('script_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('js/common/jquery-3.3.1.min.js')}}"><\/script>')</script>
<!--[if lt IE 9]>
<script src="/common/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="{{asset('js/common/common.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cp/index.js')}}"></script>
@endsection
