/**
 * main js file
 */
'use strict';

// mobile menu dropdown
$('.mobile-menu').on('click', function() {
	$('.mobile-dropdown').slideToggle('fast');
});

// check if required inputs are valid in forms
Array.prototype.forEach.call(document.forms, function(form) {
  form.querySelector('input[type="submit"]').addEventListener('click', function() {
    form.querySelectorAll(':required').forEach(function(input) {
      if (!input.checkValidity()) {
        input.classList.add('invalid-input');
      }

      input.addEventListener('input', function() {
        if (input.checkValidity()) {
          input.classList.remove('invalid-input');
        } else {
          input.classList.add('invalid-input');
        }
      });
    });
  });
});

// distributors accorion
$('.distributors-accordion label').on('click', function() {
	// toggle accordion content
	$(this).next().slideToggle('fast');

  // set checkbox to checked
	$(this).prev().prop('checked')
		? $(this).prev().prop('checked', false)
		: $(this).prev().prop('checked', true);

	// close any other open accordions
	$('.distributors-content-container').not($(this).next()).slideUp('fast');
});
