$(function() {

	// Cache the Window object
	var $window = $(window);

	// Parallax Backgrounds
	// Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641

	$('section[data-type="background"]').each(function(){
		var $bgobj = $(this); // assigning the object

		$(window).scroll(function() {

			// Scroll the background at var speed
			// the yPos is a negative value because we're scrolling it UP!
			var yPos = -($window.scrollTop() / $bgobj.data('speed'));

			// Put together our final background position
			var coords = '50% '+ yPos + 'px';

			// Move the background
			$bgobj.css({ backgroundPosition: coords });

		}); // end window scroll
	});

function navScroll(menuItem, whereTo) {
	$(menuItem).click(function() {
		$('html, body').animate({
			scrollTop: $(whereTo).offset().top -80
		}, 2000);
	});
}

navScroll(".navbar-brand","#page");
navScroll(".footer-home","#page");
navScroll(".menu-item-23","#birch_pointe_rates");
navScroll(".menu-item-22","#photo-gallery");
navScroll(".menu-item-21","#score_card");
navScroll(".menu-item-20","#birch_pointe_about_us");
navScroll(".menu-item-24","#birch_pointe_location");



});
