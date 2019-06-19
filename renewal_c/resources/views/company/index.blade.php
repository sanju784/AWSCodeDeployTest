<html>
@include('company.headtag')
<body>
@include('common.header', ['h1' => '会社概要'])
@include('common.breadcrumb', ['breads' => [['url' => '', 'text' => '会社概要']]])
	<div class="container">
		<div id="mainContent" class="mainFull">
		@include('company.main')
		</div>
	</div><!-- .container -->
@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'company/', 'text' => '会社概要']]])
@include('common.schema_Organization')
</body>
</html>
