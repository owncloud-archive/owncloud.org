<?php

get_header();

if (!has_post_thumbnail())
    $class = ' no-image';
else
    $class = ' ';
?>
<article class="clearfix container<?php echo $class; ?>">
  <header role="banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'full') ?>);" class="d-flex align-items-end">
  </header>

  <div class="container">
    <div class="post-container wide">
      <div class="headline-wrap">
        <h1 class="headline-page"><?php the_title(); ?></h1>
      </div>

      <div class="content">
            <?php 
            while ( have_posts() ) : the_post();
                the_content(); 
            endwhile;
            ?>
      </div>
    </div>
  </div>
</article>

<?php
get_footer();

