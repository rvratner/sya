// custom scripts
(function($) {

"use strict";


var init = function(){
	toggleNav();

	if (document.querySelector('.page-template-page-video')){
		toggleVideoModal();
	}
};

var toggleNav = function(){
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
	$('.video-thumb').click(function(event){
		event.preventDefault();
		openModal(event.target.id);
	});
	$('.play').click(function(event){
		event.preventDefault();
		openModal(event.target.id);
	});
	$('#closeVideoBtn').click(function(event){
		event.preventDefault();
		closeModal();
	});
};

var openModal = function(id){
	$('#video-modal').addClass('show');
	$('#video-modal').append('<iframe id="ytplayer" width="640" height="390" src="http://www.youtube.com/embed/' + id + '?autoplay=1&origin=http://shoutyourabortion.com" frameborder="0" showinfo="0" rel="0" modestbranding="0"/>');
};

var closeModal = function(){
	$('#video-modal').removeClass('show');
	$('#video-modal').remove('#ytplayer');
};


window.onload = init ();
	
})(jQuery);