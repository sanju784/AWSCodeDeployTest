@include('search.headtag')
<body>
@include('common.header', ['h1' => '人間ドックの予約'])
@include('common.breadcrumb', ['breads' => [['url' => 'dock', 'text' => '人間ドックの予約']]])
<div class="container">
    <div id="mainContent" class="mainFull">
        @include('common.linkJuice')
    </div>
</div>

@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'dock', 'text' => '人間ドックの予約']]])
@include('common.schema_Organization')
</body>
</html>
