<?php
get_header();
$page_id=13147; // Add here id of the page
$post = get_post($page_id);
$content = apply_filters('the_content', $post->post_content);
?>

<article class="container">
    <h1 class="headline-page">Security Advisories</h1>
    <?php echo $content; ?>
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
                    echo '<ul class="clean">';
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

        <div class="col-md-4">
            <h2>Desktop clients</h2>
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
                            'terms'    => 'desktop-clients',
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
                    echo '<ul class="clean">';
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

        <div class="col-md-4">
            <h2>Mobile Apps</h2>
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
                            'terms'    => 'mobile-clients',
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
                    echo '<ul class="clean">';
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


    <h2 class="headline-page">recent blog posts</h2>
    <div class="isotope-grid">
        <div class="grid-gutter"></div>
        <div class="grid-sizer"></div>
    <?php

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'order' => 'DESC'
    );

    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) :

    endif;

    ?>
    </div>

</article>

<?php
get_footer();
