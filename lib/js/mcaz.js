$(document).ready(function() {

	// Page setup
	$('#portfolio').hide();
	$('#contact').hide();
	$('#about').hide();
	$('.content').css('margin-top', '0');
	// end setup

    // Using the best ampersand
	// http://patrickhaney.com/thinktank/2008/08/19/automatic-awesompersands

	$("*:contains('&')", document.body)
        .contents()
        .each(
            function() {
                if( this.nodeType == 3 ) {
                    $(this)
                        .replaceWith( this
                            .nodeValue
                            .replace( /&/g, "<span class='amp'>&</span>" )
                        );
                }
            }
        );

	//navigation

		/******************************************
		// assigning the 'home page' header height
		// to a var so we can call it later.
		// This prevents the header height from
		// changing when #tagline is toggled.
		******************************************/

		var height = $('header').css('height');

		$('.homeLink').click(function(e) {
			e.preventDefault();
			$('.content').fadeOut(500);
			$('#tagline').fadeIn(200);
			$('header').css('height', height);
			$('#home').delay(200).fadeIn(500);
		});

		$('.contactLink').click(function(e) {
			e.preventDefault();
			$('.content').fadeOut(500);
			$('#tagline').delay(200).fadeOut(200);
			$('header').css('height', height);
			$('#contact').delay(800).fadeIn(500);
		});

		$('.portfolioLink').click(function(e) {
			e.preventDefault();
			$('.content').fadeOut(500);
			$('#tagline').delay(200).fadeOut(200);
			$('header').css('height', height);
			$('#portfolio').delay(1000).fadeIn(500);
		});

		$('.aboutLink').click(function(e) {
			e.preventDefault();
			$('.content').fadeOut(500);
			$('#tagline').delay(200).fadeOut(200);
			$('header').css('height', height);
			$('#about').delay(1000).fadeIn(500);
		});
	// end nav

	/* Responsive js starts here.
	*/

	/* getting viewport width */
    var responsive_viewport = $(window).width();

    if (responsive_viewport < 768) {

    	$('#headline').css('font-size', '2em')

    };

	if (responsive_viewport > 768) {

		$('#headline').css('width', '100%');
		$('#tagline').css('width', '25%');

		//placeholder fallback
		//via http://www.cssnewbie.com/cross-browser-support-for-html5-placeholder-text-in-forms/

		$(function() {
			$.support.placeholder = false;
			test = document.createElement('input');
			if('placeholder' in test) $.support.placeholder = true;
		});

		$(function() {
			if(!$.support.placeholder) {
				var active = document.activeElement;
				$(':text').focus(function () {
					if ($(this).attr('placeholder') != '' && $(this).val() == $(this).attr('placeholder')) {
						$(this).val('').removeClass('hasPlaceholder');
					}
				}).blur(function () {
					if ($(this).attr('placeholder') != '' && ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))) {
						$(this).val($(this).attr('placeholder')).addClass('hasPlaceholder');
					}
				});
				$(':text').blur();
				$(active).focus();
				$('form').submit(function () {
					$(this).find('.hasPlaceholder').each(function() { $(this).val(''); });
				});
			}
		});

		/* FitText.js 1.1
		*
		* Copyright 2011, Dave Rupert http://daverupert.com
		* Released under the WTFPL license
		* http://sam.zoy.org/wtfpl/
		*
		* Date: Thu May 05 14:23:00 2011 -0600
		*/

		(function( $ ){

		  $.fn.fitText = function( kompressor, options ) {

		    // Setup options
		    var compressor = kompressor || 1,
		        settings = $.extend({
		          'minFontSize' : Number.NEGATIVE_INFINITY,
		          'maxFontSize' : Number.POSITIVE_INFINITY
		        }, options);

		    return this.each(function(){

		      // Store the object
		      var $this = $(this); 
		        
		      // Resizer() resizes items based on the object width divided by the compressor * 10
		      var resizer = function () {
		        $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
		      };

		      // Call once to set.
		      resizer();

		      // Call on resize. Opera debounces their resize by default. 
		      $(window).on('resize', resizer);
		      	
		    });

		  };

		})( jQuery );

		$('#headline').fitText(.75, {
			minFontSize: '20px', maxFontSize: '200px'
		});

		$('#tagline').fitText(.6, {
			minFontSize: '8px',
			maxFontSize: '92px'
		});

	};

});