@include('detail_hospital.course.headtag_Detail')
<body>
@include('common.header', ['h1' => "《予約可》{$baseInfo->name}の「{$courseBasic->course_name}」検査コース詳細"])
@include('common.breadcrumb', ['breads' => $breads])
<div class="container">
    <div id="mainContent" class="mainFull">
        @include('detail_hospital.course.main_Detail')
        @include('common.linkJuice')
    </div>
</div>
@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => $breads])
@include('common.schema_Organization')
</body>
</html>
