@include('guide.headtag')
<body>
@include('common.header', ['h1' => 'ご利用ガイド'])
@include('common.breadcrumb', ['breads' => [['url' => '', 'text' => 'ご利用ガイド']]])
	<div class="container">
		<div id="mainContent" class="mainFull">
		@include('guide.main')
		</div>
	</div>

@include('common.search3')
@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'guide/', 'text' => 'ご利用ガイド']]])
@include('common.schema_Organization')
</body>
</html>
