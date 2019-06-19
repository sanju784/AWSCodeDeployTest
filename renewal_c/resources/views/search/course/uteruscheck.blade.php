@include('search.headtag')
<body>
@include('common.header', ['h1' => '子宮がん検診の予約'])
@include('common.breadcrumb', ['breads' => [['url' => 'uteruscheck', 'text' => '子宮がん検診の予約']]])
<div class="container">
    <div id="mainContent" class="mainFull">
        @include('common.linkJuice')
    </div>
</div>

@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'uteruscheck', 'text' => '子宮がん検診の予約']]])
@include('common.schema_Organization')
</body>
</html>
