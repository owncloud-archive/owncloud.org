<div class="post-preview grid-item">
    <a class="d-block text-center overflow-hidden thumbnail" href="<?php the_permalink(); ?>"><?php
    the_post_thumbnail('post-preview', array('class' => 'img-fluid'));
    ?></a>

    <div class="content">
        <?php
        if (has_category(14)) : ?>
            <div class="post-label planet-owncloud"><?php echo get_cat_name(14); ?></div>
        <?php
        endif;
        ?>
        <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
        <p class="smallfont"><span class="date"><?php echo get_the_date('d.m.Y'); ?></span> by <?php 

            $names = array();
            foreach(get_coauthors() as $author) {
                $names[] = get_the_author_meta('first_name', $author->data->ID) . ' ' . get_the_author_meta('last_name', $author->data->ID);
            }
            
            echo '<span class="author">' . implode(', ', $names) . '</span>';

            ?>

            <span class="comments">
              <?php
              if (get_comments_number() > 0) {
                  echo '| <i class="fa fa-comments" aria-hidden="true"></i> ';
                  comments_number( '', '1 Comment', '% Comments' );
              }
              ?>
            </span>
        </p>
        <a href="<?php the_permalink(); ?>" class="excerpt"><?php the_excerpt(); ?></a>
        <a href="<?php the_permalink(); ?>">read more ...</a>
        <div class="d-none date-unix"><?php the_time('U'); ?></div>
    </div>

    <div class="tags">
        <?php
        $posttags = get_the_tags();
        if ($posttags) {
            foreach($posttags as $tag) {
            ?>
                <a href="<?php echo get_tag_link($tag->term_id); ?>" class="post-tag button-oc primary small"><?php echo $tag->name; ?></a>
            <?php
            }
        }
        ?>
    </div>
</div>
