(function ($) {
/*
 ****************************************************************************
 * File : jquery.scrollto.js 2.00
 * 
 * Copyright (C) 2005-2008 http://bizcaz.com/ All rights reserved.
 ****************************************************************************
 */
$.fn.ScrollTo = function(speed, callback) {
	var top = $(this).offset().top;

	if ('BODY' == $(this).attr('tagName')) {// for IE6
		top = 0;
	}

	var selector = 'html';

	if ($.browser.safari) {
		selector = 'body';
	}
	else if ($.browser.msie) {
		if ('undefined' != typeof document.documentElement.style.msInterpolationMode) {
			// IE7 later
		}
		else {
			selector = 'body';// IE6
		}
	}

	$(selector).animate({scrollTop: top}, speed, 'swing', callback);
};

}) (jQuery);
