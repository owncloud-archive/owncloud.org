<?php /* Template Name: Features */ 
get_header();

if ( have_posts() ) : 
    while ( have_posts() ) : 
        the_post();
?>

<article>
    

    <section class="features main-features">
    <?php
    if( have_rows('main_features') ):

        // loop through the rows of data
        $count = 0;
        $order = array();
        while ( have_rows('main_features') ) : the_row();
            if ($count % 2 == 0) {
                $even = true;
            }
            else {
                $even = false;
            }
            ?>
            <div class="row no-gutters">
                <?php
                if ($even) {
                    $order['text'] = ' order-6 order-sm-1';
                    $order['image'] = ' order-1 order-sm-6';
                }
                else {
                    $order['text'] = ' order-6 order-sm-6';
                    $order['image'] = ' order-1 order-sm-1';
                }
                ?>

                <div class="col-sm-6 text<?php echo $order['text']; ?>" style="background-color: <?php echo get_sub_field('block_bgcolor'); ?>">
                    <div><?php echo get_sub_field('block_text'); ?></div>
                </div>
                
                <div class="col-sm-6<?php echo $order['image']; ?>">
                    <img src="<?php echo get_sub_field('block_image')['url']; ?>" alt="<?php echo get_sub_field('block_image')['alt']; ?>" class="img-fluid" />
                </div>

            </div>
                <?php
            $count++;
        endwhile;
    endif;
    ?>
    </section>

    <section class="container d-flex align-items-center justify-content-center cta breaker text-center">
        <div class="row align-items-center">
            <div class="col-md-8 mx-auto">
                <h1>The last file sharing platform you'll ever need.</h1>
                <p>Don't buy into bold marketing statements - </p>
                <p><a href="<?php echo get_page_link(87); ?>" class="button-oc">Convince yourself!</a></p>
                <hr />
                <div>
                    <p>Did you know there‘s an <span class="enterprise">ownCloud enterprise edition?</span><br />
                    Get even more professional features and get access to our high-level support. </p>
                    <a href="https://owncloud.com/product/" target="_blank" class="button-oc enterprise">Explore ownCloud enterprise</a>
                </div>
            </div>
        </div>
    </section>

    <section class="features container secondary-features">
        <?php
        if( have_rows('secondary_features') ):
            $count = 0;

            while ( have_rows('secondary_features') ) : the_row(); 
                $check = $count % 2;

                if ($check === 0) {
                    ?>
                    <div class="row">
                    <?php
                }
                ?>

                <div class="col-sm-6">
                    <h2><?php echo get_sub_field('block_title'); ?></h2>
                    <?php echo wp_get_attachment_image(get_sub_field('block_image')['id'], 'large', false, array('class' => 'img-fluid')); ?>
                    <?php echo get_sub_field('block_text'); ?>
                </div>
                
                <?php
                if ($check === 1) {
                ?>
                    </div>
                <?php
                }

                $count++;
            endwhile;
        endif;
        ?>
    </section>

    <section class="features container more-features">
        <h2><?php the_field('headline_third_features'); ?></h2>
        <?php
        if( have_rows('more_features') ):
            $count = 0;

            while ( have_rows('more_features') ) : the_row(); 
                $check = $count % 3;

                if ($check === 0) : ?>
                    <div class="row">
                    <?php
                endif;
                ?>

                <div class="col-md-4 col-sm-6 text-center feature">
                    <?php echo wp_get_attachment_image(get_sub_field('block_image')['id'], 'medium', false); ?>
                    <h3><?php echo get_sub_field('block_title'); ?></h3>
                    <?php echo get_sub_field('block_text'); ?>
                </div>
                
                <?php
                if ($check === 2) : ?>
                    </div>
                <?php
                endif;

                $count++;
            endwhile;

            if ($check !== 2) : ?>
                </div>
                <?php
            endif;
        endif;
        ?>
    </section>

    <section class="container cta">
        <div class="row">
            <div class="col-sm-6 mx-auto  text-center">
                <div>
                    <h1>Download ownCloud Now!</h1>
                    <p>Experience on your own, why over 15 million users worldwide trust ownCloud.</p>
                    <a href="<?php echo get_page_link(87); ?>" class="button-oc">See installation options</a>
                </div>

                <hr>

                <div>
                    <p>Did you know there‘s an <span class="enterprise">ownCloud enterprise edition?</span><br />
                    Get even more professional features and get access to our high-level support. </p>
                    <a href="https://owncloud.com/features/" target="_blank" class="button-oc enterprise">Explore ownCloud enterprise features</a>
                </div>

                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 mx-auto">
                <?php the_content(); ?>
            </div>

        </div>

        <div>

            <?php echo get_template_part('template-parts/social-media', 'follow'); ?>
        </div>
    </section>
</article>

<?php
    endwhile;
endif;
get_footer();
