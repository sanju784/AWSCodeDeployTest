@include('search.headtag')
<body>
@include('common.header', ['h1' => '胃がん検診の予約'])
@include('common.breadcrumb', ['breads' => [['url' => 'stomachcheck', 'text' => '胃がん検診の予約']]])
<div class="container">
    <div id="mainContent" class="mainFull">
        @include('search.main_Hospital')
        @include('common.linkJuice')
    </div>
</div>

@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'stomachcheck', 'text' => '胃がん検診の予約']]])
@include('common.schema_Organization')
</body>
</html>
