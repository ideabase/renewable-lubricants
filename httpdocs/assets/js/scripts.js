/**
 * main javascript file
 */

 // mobile menu dropdown
$(".mobile-menu").on('click', function() {
	$(".mobile-dropdown").slideToggle("fast");
});

// accordion
$(".accordion label").on('click', function() {
	// toggle clicked label's content
	$(this).next().slideToggle();

	// close other accordion content
	$(".accordion-content").not($(this).next()).slideUp();
});
