<?php
get_header();

if ( have_posts() ) : 
    while ( have_posts() ) : 
        the_post();

        $platform = wp_get_post_terms(get_the_ID(), 'advisory_platform')[0];
        $versions = wp_get_post_terms(get_the_ID(), 'advisory_versions');
?>

<article class="container">
    <div class="row">
        <div class="col-md-8">
            <p class="smallfont"><a href="<?php echo get_post_type_archive_link('advisories'); ?>">< go back to overview</a></p>
            <h1 class="headline-page"><?php the_title(); ?></h1>
            <p>Platform: <?php echo $platform->name; ?></p>
            <p>Versions: <?php 
                foreach($versions as $version)
                    echo $version->name . ', ';
             ?></p>
            <p>Date: <?php the_date('n/j/Y'); ?></p>
            <div class="content"><?php the_content(); ?></div>

                <h3>Share this</h3>
                <?php echo do_shortcode('[mashshare]'); ?>
        </div>
        <aside class="col-md-4">
            <?php

            $advisory_terms = get_terms( 'advisory_versions' );

            
            ?>

            <h3>Other reports for <?php echo $platform->name; ?></h3>

            <?php

            foreach ($advisory_terms as $term) {
                $args = array(
                    'post_type' => 'advisories',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'order' => 'DESC',
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'advisory_platform',
                            'field'    => 'slug',
                            'terms'    => $platform,
                        ),
                        array(
                            'taxonomy' => 'advisory_versions',
                            'field'    => 'slug',
                            'terms'    => array($term->slug),
                            'operator' => 'IN'
                        )
                    )
                );

                $the_query = new WP_Query( $args );

                // The Loop
                if ( $the_query->have_posts() ) {
                    ?>
                    <h4><?php echo $term->name; ?></h4>
                    <?php
                    echo '<ul>';
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        echo '<li><p><a href="' . get_the_permalink() . '"><span class="smallfont">' . get_the_date('n/j/Y') . '</span><br />' . get_the_title() . '</a></p></li>';
                    }
                    echo '</ul>';
                    /* Restore original Post Data */
                    wp_reset_postdata();
                } else {
                    // no posts found
                }
            }
            ?>
        </aside>
    </div>
</article>

<?php
    endwhile;
endif;
get_footer();
