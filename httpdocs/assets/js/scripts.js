/**
 * main javascript file
 */

 // mobile menu dropdown
$('.mobile-menu').on('click', function() {
	$('.mobile-dropdown').slideToggle('fast');
});

// accordion
$(".accordion label").on('click', function() {
	// toggle accordion content
	$(this).next().slideToggle('fast');

	// set checkbox to checked
	$(this).prev().prop('checked')
		? $(this).prev().prop('checked', false)
		: $(this).prev().prop('checked', true);

	// close other accordions' content
	$(".accordion-content").not($(this).next()).slideUp('fast');
});
