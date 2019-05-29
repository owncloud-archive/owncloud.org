function shrinkMenu() {
    if ($(document).scrollTop() > 50) {
        $('header.main').addClass('shrink');
    } else {
        $('header.main').removeClass('shrink');
    }
}
$(document).ready(function() {
	
	$('.award').on('click', function() {
		Cookies.set('insider-award', 'true', { expires: 21 });
		$('.award').remove();
	})
		
	if (Cookies.get('insider-award') === 'true') {
		$('.award').remove();
	}
	
    $(window).scroll(function() {
        shrinkMenu();
    });

    shrinkMenu();

    /* SMOOTH ANCHOR SCROLLING */
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
          &&
          location.hostname == this.hostname
        ) {
          // set the url hash
          history.pushState({}, '', '#' + this.hash.slice(1));

          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top - 75
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
    });

    //auto-scroll on given hash/anchor
    if(window.location.hash && $(window.location.hash).length > 0) {
      $('html, body').stop(true, false).animate({
        scrollTop: $(window.location.hash).offset().top - 39
      }, 1000)
    }

    if ($('.isotope-grid').length > 0) {
        $grid = $('.isotope-grid').isotope({
            layoutMode: 'packery',
            packery: {
              gutter: '.grid-gutter',
              columnWidth: '.grid-sizer'
            },
            itemSelector: '.grid-item',
            percentPosition: true,
            sortBy : '.date-unix',
            sortAscending: true
        })

        $('.post-preview').imagesLoaded().progress( function() {
            $grid.isotope('layout');
        });

        $('.isotope-filter-button').on('click', function() {
            $grid.isotope({ filter: $(this).attr('data-filter') });
        })
    }

    /* NAVIGATION */
    $('header.main .toggle-nav').on('click', function() {
        if ( $('header.main').hasClass('menu-open')) {
            //close menu
            $('header.main').removeClass('menu-open');
            $('header.main nav').slideUp(400, function() {

            });
        } else {
            // open menu
            $('header.main').addClass('menu-open');
            $('header.main nav').slideDown(400);
        }
    });

    /* SCROLLTO BUTTON */
    $('.scrollto').on('click', function(e) {
        e.preventDefault();
        var duration = 800;
        if (typeof $(this).attr('data-duration') !== typeof undefined && $(this).attr('data-duration') !== false) {
          duration = $(this).attr('data-duration');
        }

        $('html, body').animate({
            scrollTop: $($(this).attr('data-target')).offset().top - 40
        }, duration, 'easeInOutQuad');

        return false;
    });

    // Single Post + default page template
    if($('.page-template-default').length > 0 && $("header[role='banner']").length > 0) {
        $(window).on('scroll', function() {
            if ($(window).width() > 576) {
                $('article header').css({
                    top: -($(document).scrollTop() / 5) + 'px'
                });
            } else {
                $('article header').css({
                    top: 0
                });
            }
        });
    }

    // Newsletter subscription form
    $('form.newsletter-subscribe').submit(function() {
        var $form = $(this);
        var errors = false;

        if ($form.find('input#email').val() === '') {
          $form.find('.error').css('display', 'flex');
          errors = true;
        }

        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!re.test(String($form.find('input#email').val()).toLowerCase())) {
          $form.find('.error').css('display', 'flex');
          errors = true;
        }

        if (errors) {
          return false;
        }


        $form.addClass('loading');
        $form.find('button').blur();
        $form.find('.error').hide();

        jQuery.ajax({
          url : ajax_params.url,
          type : 'post',
          dataType: 'JSON',
          data : {
            action : 'marketo',
            nonce: ajax_params.nonce,
            data: {
              'action': 'newsletter-submission',
              'lead': {
                'email': $form.find('input#email').val()
              }
            }
          },
          success : function( response ) {
            $form.removeClass('loading');
            if (response.success == true) {
                $form.find('.error').hide();
                $form.find('.success').css('display', 'flex');
            } else {
              $form.find('.success').hide();
              $form.find('.error-feedback').css('display', 'flex');
            }

          }
        });
        return false;
    });
});
