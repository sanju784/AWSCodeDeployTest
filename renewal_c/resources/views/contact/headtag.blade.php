@extends('common.headtag')

@section('title', 'お問い合わせ｜人間ドックと検診予約サイト EPARK人間ドック')
@section('description', 'お問い合わせページ。人間ドックと検診予約サイト EPARK人間ドックです。')
@section('keywords', 'お問い合わせ')

@section('meta_data')
<meta name="robots" content="noindex,follow">
@endsection

@section('stylesheet_content')
<link rel="stylesheet" href="{{asset('css/common/form_base.css')}}">
<link rel="stylesheet" href="{{asset('css/common/toppage.css')}}">
<link rel="stylesheet" href="{{asset('css/contact/contact.css')}}">
@endsection

@section('script_content')
<script type="text/javascript" src="/jquery-ui/ui.js"></script>
<script type="text/javascript" src="/contact/js/contact.js"></script>
@endsection
