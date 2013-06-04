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
		* Copyright 2011, Dave Rupert http://daverupert.com
		*/

		(function(e){e.fn.fitText=function(t,n){var r=t||1,i=e.extend({minFontSize:Number.NEGATIVE_INFINITY,maxFontSize:Number.POSITIVE_INFINITY},n);return this.each(function(){var t=e(this);var n=function(){t.css("font-size",Math.max(Math.min(t.width()/(r*10),parseFloat(i.maxFontSize)),parseFloat(i.minFontSize)))};n();e(window).on("resize",n)})}})(jQuery)

		$('#headline').fitText(.75, {
			minFontSize: '20px', maxFontSize: '200px'
		});

		$('#tagline').fitText(.6, {
			minFontSize: '8px',
			maxFontSize: '92px'
		});

		// Portfolio section animations
		$('.portfolio-item img').click(function() {
			var imgSrc = $(this).attr('src');
	    	$(this).next().animate({ opacity : 0 }).css('display', 'none').delay(2000); // .next() finds the <aside> element. We're setting display: none to hide it, then pausing for 2 seconds
	    	$(this).attr('src', imgSrc.slice(0,-4)+'_lg.jpg').css('width', '100%'); // slice(0, -4) trims the .jpg extension, and we add '_lg.jpg' to get the full image. Then we set img to 100% width
	    	$(this).prev('.close').css('display', 'block'); // Make the Close button appear
	    	$(this).parents('.portfolio-item').siblings('.portfolio-item').toggle(); // Toggling the other portfolio items
	  	});
	  	$('.portfolio-item .close').click(function() {
	  		$(this).css('display', ''); // Reset display
	  		$(this).next().css('width', ''); // Reset width
	  		$(this).siblings('aside').css('display', '').css('opacity', ''); // Reset display & opacity
	    	$(this).parents('.portfolio-item').siblings('.portfolio-item').toggle(); // Toggling the other portfolio items
			var imgSrc = $(this).next().attr('src');
	    	$(this).next().attr('src', imgSrc.slice(0,-7)+'.jpg'); // Trimming the _lg.jpg from the url (toggling line 136)
	  	});

	}; // end >768px responsive JS

});