@include('assessment.headtag')
<body>
@include('common.header', ['h1' => '人間ドック学会 機能評価認定施設'])
@include('common.breadcrumb', ['breads' => [['url' => '', 'text' => '人間ドック学会 機能評価認定施設']]])
	<div class="container">
		<div id="mainContent" class="mainFull">
            @include('assessment.main')
		</div>
	</div><!-- .container -->
@include('common.search3')
@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'assessment/', 'text' => '人間ドック学会 機能評価認定施設']]])
@include('common.schema_Organization')
</body>
</html>
