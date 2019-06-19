@extends('common.headtag')

@section('title', "《予約可》{$baseInfo->name}の{$courseBasic->course_name}検査コース詳細｜人間ドックと検診予約サイト EPARK人間ドック")
@section('description', "{$baseInfo->name}（{$baseInfo->pref_name}{$baseInfo->district_name}）{$courseBasic->course_name}の詳細情報です。詳しい検査内容や、検査コースの特徴などを分かりやすく説明しております。また、空き状況カレンダーからご希望日をクリックしてご予約できます。人間ドック・各種検診予約サイトの「EPARK人間ドック」。")
@section('keywords', "{$baseInfo->name},{$courseBasic->course_name},検査コース,詳細")

@section('meta_data')
@endsection

@section('stylesheet_content')
@endsection

@section('script_content')
@endsection
