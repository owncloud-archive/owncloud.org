<?php /* Template Name: Advisories */ 
get_header();

if ( have_posts() ) : 
    while ( have_posts() ) : 
        the_post();
?>

<article class="container">
    <h1 class="headline-page"><?php the_title(); ?></h1>
    <div class="row">
        <div class="col-md-4">
            <h2>ownCloud server</h2>
            <?php
            $advisory_terms = get_terms( 'advisory_versions' );

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
                            'terms'    => 'owncloud-server',
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
                    <h3><?php echo $term->name; ?></h3>
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
        </div>
    </div>

</article>

<?php
    endwhile;
endif;
get_footer();
