@include('cp.headtag')
<body>
@include('common.header', ['title' => '「世界対がんデー」キャシュポ補助キャンペーン'])
	<div class="container">
		<div id="mainContent" class="mainFull">
		@include('cp.main')
		</div>
	</div><!-- .container -->
@include('common.footer')
@include('cp.schema_BreadcrumbList')
@include('parts.schema_Common')
</body>
</html>
