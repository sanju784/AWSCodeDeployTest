@include('detail_hospital.headtag_Calendar')
<body>
@include('common.header', ['h1' => "《予約可》{$baseInfo->name}の人間ドック・検診予約空き枠カレンダー"])
@include('common.breadcrumb', ['breads' => $breads])
<div class="container">
    <div id="mainContent" class="mainFull">
        @include('detail_hospital.main_Calendar')
        @include('common.linkJuice')
    </div>
</div>
@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => $breads])
@include('common.schema_Organization')
</body>
</html>
