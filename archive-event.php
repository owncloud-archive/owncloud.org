<?php
get_header();
$post = get_post(13174);
$content = apply_filters('the_content', $post->post_content);
?>
<article class="container">
    <h1 class="headline-page">ownCloud Events</h1>
    <?php echo $content; ?>

    <?php
    $today = date('Ymd');

    $args = array(
        'numberposts'   => -1,
        'post_type'     => 'event',
        'meta_key'      => 'event_date_start',
        'meta_query' => array(
            array(
                'key' => 'event_date_start',
                'value' => $today,
                'compare' => '>='
            )
        ),
        'orderby' => 'meta_value',
        'order' => 'ASC'
    );

    $the_query = new WP_Query( $args );

    ?>
    <?php if( $the_query->have_posts() ): ?>
        <h2>Upcoming Events</h2>
        <div class="isotope-grid">
            <div class="grid-gutter"></div>
            <div class="grid-sizer"></div>
            <?php while( $the_query->have_posts() ) : $the_query->the_post();

                if (get_field('event_external') !== '') {
                    $link = get_field('event_external');
                    $target = "_blank";

                } else if (get_field('event_post') !== '') {
                    $link = get_permalink(get_field('event_post'));
                    $target = "";
                } else {
                    $link = get_the_permalink();
                    $target = "";
                }
                ?>

                <a class="d-block post-preview grid-item" href="<?php echo $link; ?>" target="<?php echo $target; ?>">
                    <div class="overflow-hidden" href="<?php echo $link; ?>" target="<?php echo $target; ?>">

                    <?php
                    the_post_thumbnail('medium', array('class' => 'img-fluid'));
                    ?>
                    </div>

                    <div class="content">
                        <h2><?php the_title(); ?></h2>
                        <p class="date"><?php echo get_field('event_date_start');
                        if (get_field('event_date_end') !== '')
                            echo ' - ' . get_field('event_date_end');
                        ?></p>

                    </div>
                </a>
                <?php
            endwhile; ?>
        </div>

        <?php
    endif; ?>

    <?php wp_reset_postdata();

    $args = array(
        'numberposts'   => -1,
        'post_type'     => 'event',
        'meta_key'      => 'event_date_start',
        'meta_query' => array(
            array(
                'key' => 'event_date_start',
                'value' => $today,
                'compare' => '<'
            )
        ),
        'orderby' => 'meta_value',
        'order' => 'ASC'
    );


    // query
    $the_query = new WP_Query( $args );

    ?>
    <?php if( $the_query->have_posts() ): ?>
        <h2>Past Events</h2>
        <div class="isotope-grid">
            <div class="grid-gutter"></div>
            <div class="grid-sizer"></div>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="grid-item">
                    <?php

                    if (get_field('event_external') !== '') {
                        echo '<a href="' . get_field('event_external') . '" target="_blank">';
                    } else if (get_field('event_post') !== '') {
                        echo '<a href="' . get_page_link(get_field('event_post')) . '">';
                    } else {
                        echo '<a href="' . get_the_permalink() . '">';
                    }

                    ?><span class="smallfont"><?php

                    echo get_field('event_date_start');

                    if (get_field('event_date_end') !== '') {
                        echo ' - ' . get_field('event_date_end');
                    }

                    ?></span><br />
                    <?php the_title(); ?></a>
                </div>
            <?php endwhile; ?>
    <?php endif;
    wp_reset_postdata(); ?>

</article>

<?php
get_footer();
