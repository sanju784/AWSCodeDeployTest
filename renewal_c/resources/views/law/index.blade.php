@include('law.headtag')
<body>
@include('common.header', ['h1' => '特定商取引法に基づく表示'])
@include('common.breadcrumb', ['breads' => [['url' => '', 'text' => '特定商取引法に基づく表示']]])
	<div class="container">
		<div id="mainContent" class="mainFull">
		@include('law.main')
		</div>
	</div><!-- .container -->
@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'law/', 'text' => '特定商取引法に基づく表示']]])
@include('common.schema_Organization')
</body>
</html>
