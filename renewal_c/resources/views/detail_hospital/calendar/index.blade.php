{{ include('detail_hospital/headtag.html') }}
<body>
{{ include('header.html') }}
{{ include('detail_hospital/breadcrumb.html') }}
	<div class="container">
		<div id="mainContent">
            {{ include('detail_hospital/calendar/main.html') }}
		</div>
        <?php //include('banner.html') ?>
	</div><!-- .container -->
{{ include('footer.html') }}
{{ include('detail_hospital/floatcontactview.html') }}
{{ include('detail_hospital/schema_BreadcrumbList.html') }}
{{ include('parts/schema_Common.html') }}

</body>
</html>
