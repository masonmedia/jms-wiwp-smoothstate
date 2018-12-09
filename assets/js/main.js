//init AOS library
$(document).ready(function() {
    AOS.init();
});

//close mobile nav on click
$('.nav-link, body').on('click',function() {
  $('.navbar-collapse').collapse('hide');
});

//smooth scroll https://www.taniarascia.com/smooth-scroll-to-id-with-jquery/
$(document).ready(function() {
    $('a[href*="#"]').on('click', function (e) {
	   e.preventDefault();

	   $('html, body').animate({
		  scrollTop: $($(this).attr('href')).offset().top
	   }, 500, 'linear');
    });
});

//smoothstate
$(function(){
  'use strict';
  var options = {
    prefetch: true,
    cacheLength: 10,
    blacklist: '.no-smoothState',
    onStart: {
      duration: 700, // Duration of our animation
      render: function ($container) {
        // Add your CSS animation reversing class
        $container.addClass('is-exiting');

        // Restart your animation
        smoothState.restartCSSAnimations();
      }
    },
    onReady: {
      duration: 0,
      render: function ($container, $newContent) {
        // Remove your CSS animation reversing class
        $container.removeClass('is-exiting');

        // Inject the new content
        $container.html($newContent);

      }
    },
      onAfter: function() {
          //reinit AOS scroll animation
          AOS.init();
          //reinit BS carousel
          $('.carousel').carousel({
            interval: 1200
            });
          $('.nav-link, body').on('click',function() {
              $('.navbar-collapse').collapse('hide');
            });
          //reinit smooth scroll
          $('a[href*="#"]').on('click', function (e) {
               e.preventDefault();

               $('html, body').animate({
                  scrollTop: $($(this).attr('href')).offset().top
               }, 500, 'linear');
            });
        }
  },
  smoothState = $('#main').smoothState(options).data('smoothState');
});

 