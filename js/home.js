$(document).ready(function() {
  /* Endless scroll on blog posts */
  $el = $('.recent-posts');

  $(window).on('scroll', function() {

    if ($(window).scrollTop() > ($el.position().top + ($el.height() * 0.5)) && $el.attr('data-state') === 'idle') {
      $el.attr('data-state', 'loading');
      $('.posts').find('.oc-logo').addClass('animated');
      jQuery.ajax({
        url : ajax_params.url,
        type : 'post',
        dataType: 'JSON',
        data : {
          action : 'load_posts',
          nonce: ajax_params.nonce,
          offset: $el.find('.post-preview').length
        },
        success : function( response ) {
          $.each(response.posts, function(k, post) {
            $clone = $el.find('.post-preview').eq(0).clone();
            $clone.find('img').attr('src', '');

            $clone.find('a').attr('href', post.link);
            $clone.find('a.title').html(post.title);
            $clone.find('.excerpt').html(post.excerpt);
            $clone.find('.date').html(post.date);
            $clone.find('.date-unix').html(post.dateUnix);
            $clone.find('.author').html(post.author);
            $clone.find('.tags').html(post.tags);
            $clone.find('.comments').html(post.comments);
            if (false !== post.thumbnail) {
              $clone.find('img').attr('src', post.thumbnail);

              $el.append($clone).isotope( 'appended', $clone );
              $clone.find('.thumbnail').imagesLoaded().progress( function(instance, image) {
                $el.isotope('layout');
              });
            } else {
              $clone.find('img').remove();
              $el.append($clone).isotope( 'appended', $clone );
              $el.isotope('layout');
            }
          });

          $el.attr('data-state', 'idle');
          $el.find('.oc-logo').removeClass('animated');
        }
      });
    }
  });
});
