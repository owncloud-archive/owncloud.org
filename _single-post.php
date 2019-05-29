<?php
get_header();
while ( have_posts() ) : the_post();
if (!has_post_thumbnail())
    $class = 'no-image';
else
    $class = '';
?>

<article <?php echo post_class($class); ?>>
    <header role="banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'large') ?>);" class="d-flex align-items-end">
    </header>
    <div class="container">
        <div class="post-container">
            <div class="headline-wrap">
                <h1><?php the_title(); ?></h1>
                <div class="smallfont post-date"><?php the_date('l, F j, Y'); ?> | by <?php echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name');  ?></div>
                <div class="excerpt bold"><?php the_excerpt(); ?> </div>
                <?php echo do_shortcode('[mashshare]'); ?>
            </div>

            <div class="content">
                <?php the_content(); ?>
            </div>

            <aside class="row">
                <?php
                if (get_the_author_meta('description') !== '') : ?>
                <div class="author col-12">
                    <?php 
                    echo get_avatar( get_the_author_meta('ID'), 150, null, null, array('class' => 'float-left')); ?>
                    <h4>About the author</h4>
                    <?php the_author_meta('description'); ?>
                </div>
                <?php
                endif;
                ?>

                <div class="box share col-sm-6">
                    <h3>Share this</h3>
                    <?php echo do_shortcode('[mashshare]'); ?>
                </div>
                <div class="box tags col-sm-6">
                    <h3>Tags</h3>
                    <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                        foreach($posttags as $tag) { 
                        ?>
                            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="button-oc primary post-tag"><?php echo $tag->name; ?></a>
                        <?php
                        }
                    }
                    ?>
                </div>

                <div class="box related-posts col-12">
                    <?php wp_related_posts(); ?>
                </div>

                <?php
                if ( comments_open() || get_comments_number() ) :
                    // comments_template();

                    // Display comments
                    echo wp_list_comments( array(
                        'callback' => 'better_comments'
                    ) );
                endif;
                ?>
            </aside>
        </div>
    </div>
</article>

<?php
endwhile;
get_footer();
?>