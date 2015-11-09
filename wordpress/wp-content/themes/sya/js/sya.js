// custom scripts
(function($) {

"use strict";

var init = function(){
	toggleNav();

	if (document.querySelector('.page-template-page-video')){
		//renderYouTube();
	}
};

var toggleNav = function(){

	$('#masthead').click(function(event){
		var el = event.target.id;
		if (el == "hamburger"){
			$('.main-navigation').addClass('show');
			$('#masthead').addClass('open');
		} else {
			$('.main-navigation').removeClass('show');
			$('#masthead').removeClass('open');
		}
	 
	});
};

var toggleVideoModal = function(){
	console.log('in')
	$('.video-thumb img').click(function(event){
		console.log(event.target.data);
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

function renderYouTube(){
	var content = document.getElementById('content');

	//var pageId = "UC79fq2im1PLYP4GLQ1_QZsg"; // wimps
	var pageId = "UC-zikEgBZyUu9OhbnDlTsJQ"; // sya
	$.get( "https://www.googleapis.com/youtube/v3/search?part=snippet&channelId="+pageId+"&order=date&key=AIzaSyDAsJA_EFa4LFC9-oNjACVaOMaGFEj604E", function( data ) {
  			for (var i=0; i<data.items.length; i++){
				var youtubeId=data.items[i].id.videoId;
				// switch to high if looks bad	
				var img = data.items[i].snippet.thumbnails.medium.url;
				if (youtubeId != undefined){
					content.innerHTML += '<a class="video-thumb" data-href="'+youtubeId+'" href="#"><img src="'+img+'" id="'+youtubeId+'"  alt="video thumbnail" /><span id="'+youtubeId+'" class="play"></span></a>';
				} 
					toggleVideoModal();
			}
		});
}

var openModal = function(id){
	$('#video-modal').addClass('show');
	$('#video-modal').append('<iframe id="ytplayer" width="640" height="360" src="http://www.youtube.com/embed/' + id + '?autoplay=1&origin=http://shoutyourabortion.com" frameborder="0" showinfo="0" rel="0" modestbranding="0"/>');
};

var closeModal = function(){
	$('#ytplayer').attr('src','');
	$('#video-modal').removeClass('show');
};


window.onload = init ();
	
})(jQuery);