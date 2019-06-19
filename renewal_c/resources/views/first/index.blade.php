@include('first.headtag')
<body>
@include('common.header', ['h1' => 'はじめての人間ドック'])
@include('common.breadcrumb', ['breads' => [['url' => '', 'text' => 'はじめての人間ドック']]])
	<div class="container">
		<div id="mainContent" class="mainFull">
		@include('first.main')
		</div>
	</div>

@include('common.search3')
@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'first/', 'text' => 'はじめての人間ドック']]])
@include('common.schema_Organization')
</body>
</html>
