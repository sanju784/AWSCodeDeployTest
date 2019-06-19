@include('contact.headtag')
<body>
@include('common.header', ['h1' => 'お問い合わせ'])
@include('common.breadcrumb', ['breads' => [['url' => '', 'text' => 'お問い合わせ']]])
	<div class="container">
		<div id="mainContent">
            @include('contact.main')
		</div>
	</div><!-- .container -->
@include('common.footer_single')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'contact', 'text' => 'お問い合わせ']]])
@include('common.schema_Organization')
</body>
</html>
