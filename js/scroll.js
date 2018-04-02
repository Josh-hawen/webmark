var $=jQuery.noConflict();

$(".current-menu-item").parent().attr('id', 'sub-menu-active');


jQuery.fn.scrollDiv = function(elem, speed) { 
	$(this).animate({
			scrollTop:  $(this).scrollTop() - $(this).offset().top + $(elem).offset().top 
	}, speed == undefined ? 1000 : speed); 
	return this; 
};

$("#sub-menu-active").scrollDiv(".current-menu-item", 500);