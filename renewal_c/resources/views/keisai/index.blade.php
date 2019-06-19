@include('keisai.headtag')
<body>
@include('common.header', ['h1' => '掲載をご希望の医療機関の皆さまへ'])
@include('common.breadcrumb', ['breads' => [['url' => '', 'text' => '掲載をご希望の医療機関の皆さまへ']]])
	<div class="container">
		<div id="mainContent">
            @include('keisai.main')
		</div>
	</div><!-- .container -->
@include('common.footer_single')
@include('common.schema_BreadcrumbList', ['breads' => [['url' => 'keisai/', 'text' => '掲載をご希望の医療機関の皆さまへ']]])
@include('common.schema_Organization')
</body>
</html>
