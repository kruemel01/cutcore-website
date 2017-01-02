function scrollHandler() {
	if ($(document).scrollTop() > 500) {
		$('.navEntry').css({
			backgroundPosition: '0 0',
		});
	} else {
		$('.navEntry').css({
			backgroundPosition: '0 -100%',
		});
	}
}

function linkHandler() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    	var target = $(this.hash);
    	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    	if (target.length) {
    		$('html, body').animate({
    			scrollTop: target.offset().top
        	}, 500);
        	return false;
      	}
    }
}


$(function() {
	$('a[href*="#"]:not([href="#"])').click(linkHandler);
	$(document).scroll(scrollHandler);
});