<html>
@include('keisai.headtag')
<body>
@include('common.header', ['title' => '掲載をご希望の医療機関の皆さまへ'])
@include('keisai.breadcrumb')
<div class="container">
    <div id="mainContent">
        @include('keisai.main_finish')
    </div>
</div><!-- .container -->
@include('common.footer_single')
</body>
</html>
