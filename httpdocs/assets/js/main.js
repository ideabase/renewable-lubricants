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

/*
 * Copyright (c) 2014 Mike King (@micjamking)
 *
 * jQuery Succinct plugin
 * Version 1.1.0 (October 2014)
 *
 * Licensed under the MIT License
 */

 /*global jQuery*/
 (function($) {
	$.fn.succinct = function(options) {

		var settings = $.extend({
			size: 240,
			omission: '...',
			ignore: true
		}, options);

		return this.each(function() {

			var textDefault,
				textTruncated,
				elements = $(this),
				regex = /[!-\/:-@\[-`{-~]$/,
				init = function() {
					elements.each(function() {
						textDefault = $(this).html();

						if (textDefault.length > settings.size) {
							textTruncated = $.trim(textDefault)
								.substring(0, settings.size)
								.split(' ')
								.slice(0, -1)
								.join(' ');

							if (settings.ignore) {
								textTruncated = textTruncated.replace(regex, '');
							}

							$(this).html(textTruncated + settings.omission);
						}
					});
				};
			init();
		});
	};
})(jQuery);
