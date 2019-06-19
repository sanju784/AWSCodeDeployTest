@include('search.headtag')
<body>
@include('common.header', ['h1' => ''])
@include('common.breadcrumb', ['breads' => [['url' => '', 'text' => '']]])
<div class="container">
    <div id="mainContent" class="mainFull">
        @include('search.main_Hospital')
        @include('common.linkJuice')
    </div>
</div>

@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => '', 'text' => '']]])
@include('common.schema_Organization')
</body>
</html>
