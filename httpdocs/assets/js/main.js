/**
 * main js file
 */

// NO STATEMENTS BEFORE THIS LINE - always use strict mode
'use strict';

// mobile menu dropdown
$('.mobile-menu').on('click', function() {
	$('.mobile-dropdown').slideToggle('fast');
});
