let windowScrollPosition;

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

	let current = "/";

	if ($(document).scrollTop() >= $('#about').offset().top - 10) {
		current = 'about';
	}
	if ($(document).scrollTop() >= $('#projekte').offset().top - 10) {
		current = 'projekte';
	}
	if ($(document).scrollTop() >= $('#youtube').offset().top - 10) {
		current = 'youtube';
	}
	if ($(document).scrollTop() >= $('#kontakt').offset().top - 10) {
		current = 'kontakt';
	}

	if (current !== windowScrollPosition) {
		$(".navEntry").removeClass("active");
		$('a[href="#' + current + '"]').addClass("active");

		history.replaceState('', document.title, current);
		windowScrollPosition = current;
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
	history.replaceState('', document.title, window.location.pathname);
	if (window.location.pathname !== '/') {
		let target = $('#' + window.location.pathname.slice(1));
		if (target.length) {
			$('html, body').scrollTop(target.offset().top);
		}
	}
	scrollHandler();
	$('a[href*="#"]:not([href="#"])').click(linkHandler);
	$(document).scroll(scrollHandler);
	$(".navEntry").addClass("transition");
});