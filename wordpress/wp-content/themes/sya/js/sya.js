// custom scripts
(function($) {

"use strict";

var init = function(){
	"use strict";
	toggleNav();

	if (document.querySelector('.page-template-page-video')){
		toggleVideoModal();
	}
};

var toggleNav = function(){
	"use strict";
	// open nav
	$('#hamburger').click(function(){
		$('.main-navigation').addClass('show');
	});
	// close nav
	$('#closeBtn').click(function(){
		$('.main-navigation').removeClass('show');
	});
};

var toggleVideoModal = function(){
	"use strict";
	$('.video-thumb').click(function(event){
		event.preventDefault();
		console.log(event);
	});
};

window.onload = init ();
	
})(jQuery);