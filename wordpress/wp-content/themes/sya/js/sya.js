// custom scripts
(function($) {

"use strict";

var init = function(){
	toggleNav();
};

var toggleNav = function(){
	console.log('in toggle nav');
	// open nav
	$('#hamburger').click(function(){
		$('.main-navigation').addClass('show');
	});
	// close nav
	$('#closeBtn').click(function(){
		$('.main-navigation').removeClass('show');
	});
};

window.onload = init ();
	
})(jQuery);