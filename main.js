function scrollHandler() {
	if ($(document).scrollTop() > $('.splash').height()*0.7 || $('nav ul').hasClass('visible')) {
		$('.navEntry').css({
			backgroundPosition: '0 100%',
		});
	} else {
		$('.navEntry').css({
			backgroundPosition: '0 0',
		});
	}
}

function linkHandler() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    	let target = $(this.hash);
    	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    	if (target.length) {
    		$('html, body').animate({
    			scrollTop: target.offset().top
        	}, 500);
        	return false;
      	}
    }
}

function navigationHandler() {
	let el = $('nav ul');
	el.toggleClass('visible');
	scrollHandler();
}


$(function() {
	scrollHandler();
	$('a[href*="#"]:not([href="#"])').click(linkHandler);
	$(document).scroll(scrollHandler);
});