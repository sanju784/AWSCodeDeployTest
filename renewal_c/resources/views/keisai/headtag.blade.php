@extends('common.headtag')

@section('title', '掲載をご希望の医療機関の皆さまへ｜人間ドックと検診予約サイト EPARK人間ドック')
@section('description', '掲載をご希望の医療機関の皆さまのお問い合わせページ。人間ドックと検診予約サイト EPARK人間ドックです。')
@section('keywords', '掲載をご希望の医療機関の皆さまへ')

@section('meta_data')
@endsection

@section('stylesheet_content')
<link rel="stylesheet" href="{{asset('css/common/form_base.css')}}">
<link rel="stylesheet" href="{{asset('css/common/toppage.css')}}">
<link rel="stylesheet" href="{{asset('css/keisai/keisai.css')}}">
@endsection

@section('script_content')
<script src="/jquery-ui/ui.js"></script>
<script src="//ajaxzip3.github.io/ajaxzip3.js"></script>
@endsection
