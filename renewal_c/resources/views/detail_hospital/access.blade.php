@include('detail_hospital.headtag_Access')
<body>
@include('common.header', ['h1' => ''])
@include('common.breadcrumb', ['breads' => $breads])
<div class="container">
    <div id="mainContent" class="mainFull">
        @include('detail_hospital.main_Access')
        @include('common.linkJuice')
    </div>
</div>
@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => '', 'text' => '']]])
@include('common.schema_Organization')
</body>
</html>
