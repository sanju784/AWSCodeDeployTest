{{--{{ IF ga_gapid }}--}}

<script>
var dataLayer = dataLayer || [];
dataLayer.push({
  "eparkId": "ga_gapid",
  "accountId": "ga_accountid"
});
</script>

{{--{{ END IF }}--}}


{{--{{ IF ga_appoint_code }}

@if(ga_appoint_code)
<script>
var dataLayer = dataLayer || [];
dataLayer.push({
  "reservationId": "{{ ga_appoint_code }}",
  "order_price": "{{ ga_course_price }}",
  "order_id": "{{ ga_order_id }}",
  "pid": "{{ ga_category_no }}"
});
</script>
@endif

{{ END IF }}--}}

<!-- Google Tag Manager -->
<!--
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KJ8W3P"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KJ8W3P');</script>
-->
<!-- End Google Tag Manager -->


