@include('contact.headtag')
<body>
@include('common.header', ['title' => 'お問い合わせ'])
@include('contact.breadcrumb')
	<div class="container">
		<div id="mainContent">
            @include('contact.main_finish')
		</div>
	</div><!-- .container -->
@include('common.footer_single')
</body>
</html>
