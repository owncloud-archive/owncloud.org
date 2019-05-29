<?php
get_header();
$auth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<article <?php echo post_class('no-image'); ?>>
  <div class="container">
    <div class="post-container">
      <div class="avatar">
        <?php echo get_avatar( $auth->ID, 256, '', 'Profile image'); ?>
      </div>
      <h1 class="text-center"><?php echo $auth->first_name . ' ' . $auth->last_name; ?></h1>
      <h2 class="text-center nickname">@<?php echo $auth->nickname; ?></h2>
      <div class="bio mx-auto">
        <?php echo $auth->description; ?>
      </div>

      <div class="social-media-profiles text-center">
        <?php
        if( have_rows('social_media_profiles', 'user_' . $auth->ID) ):
          while( have_rows('social_media_profiles', 'user_' . $auth->ID) ):
            the_row();
            ?>
            <a href="<?php the_sub_field('link'); ?>" target="_blank" class="social-media-profile">
              <i class="fa <?php the_sub_field('platform'); ?>"></i>
            </a>

            <?php
          endwhile;
        endif;
        ?>
      </div>


      <h2>Posts</h2>
      <div class="posts isotope-grid">
        <div class="grid-gutter"></div>
        <div class="grid-sizer"></div>
        <?php
        $args = array(
          'tax_query' => array(
          array(
            'taxonomy' => 'author',
            'terms' => $auth->nickname,
            'field' => 'name',
          )
          ),
          'posts_per_page' => -1,
          'orderby'=> 'post_date',
          'order' => 'DESC');

        $the_query = new WP_Query( $args);
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
            echo get_template_part('template-parts/post', 'preview');
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {
            // no posts found
        }
        ?>
      </div>
    </div>
</article>

<?php
get_footer();
?>