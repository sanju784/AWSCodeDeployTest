@include('detail_hospital.headtag_Index')
<body>
@include('common.header', ['h1' => "《予約可》{$baseInfo->name}の施設情報"])
@include('common.breadcrumb', ['breads' => $breads])
<div class="container">
    <div id="mainContent" class="mainFull">
        @include('detail_hospital.main_Index')
        @include('common.linkJuice')
    </div>
</div>
@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => $breads])
@include('common.schema_Organization')
</body>
</html>
