<?php
get_header();
while ( have_posts() ) : the_post();
if (!has_post_thumbnail())
    $class = 'no-image';
else
    $class = '';
?>

<article <?php echo post_class($class); ?>>
    <header role="banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'full') ?>);" class="d-flex align-items-end">
    </header>
    <div class="container">
        <div class="post-container">
            <div class="headline-wrap">
                <h1><?php the_title(); ?></h1>
                <?php
                $names = array();
                foreach(get_coauthors() as $author) {
                  $names[] = '<a href="' . get_author_posts_url( $author->data->ID) . '">' . get_the_author_meta('first_name', $author->data->ID) . ' ' . get_the_author_meta('last_name', $author->data->ID) . '</a>';
                }

                ?>
                <div class="smallfont post-date"><?php the_date('l, F j, Y'); ?> | by <?php echo implode(', ', $names); ?> <?php
                if (get_comments_number() > 0) {
                    echo '| <i class="fa fa-comments" aria-hidden="true"></i> ';
                    comments_number( '', '1 Comment', '% Comments' );
                }
                ?></div>
                <div class="excerpt bold"><?php the_excerpt(); ?> </div>
            </div>

            <div class="content">
                <?php the_content(); ?>
            </div>

            <aside class="row">
              <div class="col-12">
                <?php
                $authors = get_coauthors();

                $display_authors = false;

                foreach(get_coauthors() as $author) {
                  if (get_the_author_meta('description', $author->data->ID) !== '') :
                    $display_authors = true;
                    ob_start();
                    ?>
                    <div class="author-box d-flex">
                        <?php
                        echo '<a class="float-left" href="' . get_author_posts_url( $author->data->ID) . '">' . get_avatar( $author->data->ID, 150, null, null) . '</a>';
                        ?>

                        <div>
                            <h4><?php echo get_the_author_meta('first_name', $author->data->ID) . ' ' . get_the_author_meta('last_name', $author->data->ID); ?></h4>
                          <p><?php the_author_meta('description', $author->data->ID); ?></p>
                          <a href="<?php echo get_author_posts_url( $author->data->ID); ?>">See full profile</a>
                        </div>
                    </div>
                    <?php
                    $content .= ob_get_contents();
                    ob_clean();
                  endif;
                }

                if ($display_authors) {
                  if (count($authors) > 1) { ?>
                    <h3>About the authors</h3>
                  <?php
                  } else { ?>
                    <h3>About the author</h3>
                  <?php
                  }
                  echo $content;
                }
                ?>
              </div>


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

                <div class="box tags col-12">
                    <h3>ownCloud newsletter</h3>
                    <p>Stay up to date about new ownCloud features and releases.<br />
                        <span class="smallfont">(Our newsletter is sent once a month. We won't spam :) )</span>
                    </p>
                    <?php echo get_template_part('template-parts/newsletter', 'form'); ?>

                </div>

                <?php

                if ( comments_open() || get_comments_number() ) : ?>
                    <div class="box col-12">
                        <?php 
                        comments_template();
                        ?>
                    </div>
                    <?php
                endif;

                ?>

                <div class="box related-posts col-12">
                    <?php wp_related_posts(); ?>
                </div>
            </aside>
        </div>
    </div>
</article>

<?php
endwhile;
get_footer();
?>
