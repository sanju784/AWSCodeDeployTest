@include('search.headtag')
<body>
@include('common.header', ['h1' => '脳ドックの予約'])
@include('common.breadcrumb', ['breads' => [['url' => 'braindock', 'text' => '脳ドックの予約']]])
<div class="container">
    <div id="mainContent" class="mainFull">
        @include('search.main_Hospital')
        @include('common.linkJuice')
    </div>
</div>

@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'braindock', 'text' => '脳ドックの予約']]])
@include('common.schema_Organization')
</body>
</html>
