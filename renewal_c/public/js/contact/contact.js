$(function() {
	$('#send').attr('disabled', 'disabled');
	$('#send').css('background-color','#d6d3ce');
	
	$('#agree').click(function() {
		if ($(this).prop('checked') == false) {
			$('#send').attr('disabled', 'disabled');
			$('#send').css('background-color','#d6d3ce');
		} else {
			$('#send').removeAttr('disabled');
			$('#send').css('background-color','#fe8f00');
		}
	});
	if ($(".warning").length) {
		var pos = $("#form").offset();
		$('html,body').animate({
			scrollTop : pos.top
		});
		return false;
	}
});