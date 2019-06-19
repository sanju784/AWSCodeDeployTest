<html>
@include('sitemap.headtag')
<body>
@include('common.header', ['h1' => 'サイトマップ'])
@include('common.breadcrumb', ['breads' => [['url' => '', 'text' => 'サイトマップ']]])
	<div class="container">
		<div id="mainContent" class="mainFull">
            @include('sitemap.main')
            @include('common.search3')
		</div>
	</div><!-- .container -->
@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'sitemap/', 'text' => 'サイトマップ']]])
@include('common.schema_Organization')
</body>
</html>
