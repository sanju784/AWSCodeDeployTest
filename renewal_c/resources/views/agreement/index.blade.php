@include('agreement.headtag')
<body>
@include('common.header', ['h1' => '利用規約'])
@include('common.breadcrumb', ['breads' => [['url' => '', 'text' => '利用規約']]])
	<div class="container">
		<div id="mainContent" class="mainFull">
            @include('agreement.main')
		</div>
	</div><!-- .container -->
@include('common.footer')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'agreement/', 'text' => '利用規約']]])
@include('common.schema_Organization')
</body>
</html>
