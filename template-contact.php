<?php /* Template Name: Contact */ 
get_header();

if ( have_posts() ) : 
    while ( have_posts() ) : 
        the_post();
?>

<article class="container">
    <h1 class="headline-page"><?php the_title(); ?></h1>
    <div class="row">
        <div class="col">
            <?php echo do_shortcode('[contact-form-7 id="13092" title="Contact form"]'); ?>
        </div>

        <div class="col">
            <?php the_content(); ?>
        </div>
    </div>

</article>

<?php
    endwhile;
endif;
get_footer();
