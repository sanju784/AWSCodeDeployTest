@include('privacy.headtag')
<body>
@include('common.header', ['h1' => '個人情報の取扱いについて'])
@include('common.breadcrumb', ['breads' => [['url' => 'privacy/', 'text' => '個人情報の取扱いについて']]])
<div class="container">
	<div id="mainContent" class="mainFull">
		@include('privacy.main')
	</div>
</div>

@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'privacy/', 'text' => '個人情報の取扱いについて']]])
@include('common.schema_Organization')
</body>
</html>
