<?php /* Template Name: Blog */ 
get_header();
?>
<article>
    <div class="container">
        <h1 class="headline-page"><?php the_title(); ?></h1>
        <?php

        

        if ( have_posts() ) : 
            while ( have_posts() ) : 

                // echo get_template_part('template-parts/post', 'preview');

            endwhile;
        endif;

        ?>
    </div>
</article>

<?php
get_footer();
?>