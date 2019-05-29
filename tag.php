<?php
get_header();
?>
<article>
    <div class="container">
        <h1 class="headline-page">Blog</h1>
        <p>You are viewing blog posts filtered by tag "<?php single_tag_title(); ?>" | <a href="<?php echo get_page_link(2); ?>">show all</a></p>
        <div class="recent-posts isotope-grid" data-state="idle">
          <div class="grid-gutter"></div>
          <div class="grid-sizer"></div>
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();

                    echo get_template_part('template-parts/post', 'preview');

                endwhile;
            endif;
            ?>
        </div>
    </div>
</article>

<?php
get_footer();
?>
