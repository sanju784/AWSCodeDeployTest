@include('privacy.publication.headtag')
<body>
@include('common.header', ['h1' => '個人情報の取扱いに関する公表事項'])
@include('common.breadcrumb', ['breads' => [['url' => 'privacy/', 'text' => '個人情報の取扱いについて'], ['url' => '', 'text' => '個人情報の取扱いに関する公表事項']]])
<div class="container">
	<div id="mainContent" class="mainFull">
		@include('privacy.publication.main')
	</div>
</div>

@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'privacy/', 'text' => '個人情報の取扱いについて'], ['url' => 'privacy/publication/', 'text' => '個人情報の取扱いに関する公表事項']]])
@include('common.schema_Organization')
</body>
</html>
