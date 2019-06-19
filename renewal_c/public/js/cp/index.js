$(function(){
	$('.qa').on('click', 'dt', function(){
		$(this).toggleClass('on').next().slideToggle();
	})
});