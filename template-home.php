<?php /* Template Name: Home */

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
?>

<article>
  <header style="background-image: url(<?php echo get_header_image() . '?t=' . time(); ?>);">
    <img id="header-image" data-src="<?php echo get_header_image() . '?t=' . time(); ?>" />
    <div class="headline d-flex flex-column">
      <div class="text-wrap">
        <h1 class="has-delay">ownCloud</h1>
      </div>
      <div class="separator"></div>
      <div class="overflow-hidden">
        <div class="text-wrap subline">
          <h2 class="cd-headline letters rotate-3">The last <span class="cd-words-wrapper">
            <b class="is-visible">cloud collaboration</b>
            <b>file sharing</b>
            <b>file syncing</b>
            <b>data privacy</b>

            </span>
            <span class="tail">
              platform you'll ever need.
            </span>
          </h2>
          <a href="<?php echo get_page_link(14); ?>" class="button-oc">Explore the features &nbsp;» </a>
        </div>
      </div>
    </div>
  </header>

    <section id="cloudstorage" class="py-5">
      <div class="container">
        <div class="row row-eq-height">
          <div class="col-sm-6 d-flex align-items-center">
            <div>
              <?php the_field('home-generalinfo-text'); ?>
            </div>

          </div>

          <div class="col-sm-6">
            <?php echo wp_get_attachment_image(get_field('home-generalinfo-image'), 'full', false, array('class'=>'img-fluid')); ?>
          </div>
        </div>
      </div>
    </section>

    <section class="trusted">
        <div class="container text-center">
            <h2>Trusted by thousands of organizations worldwide</h2>
            <?php

            $gallery = get_post_gallery( $post, false );
            $ids = explode( ",", $gallery['ids'] );

            foreach( $ids as $id ) {

               $img = wp_get_attachment_image( $id , 'large');

               echo $img;

            }
            ?>
        </div>
    </section>

    <section id="product-overview" class="my-5">
      <div class="container">
        <div class="mb-5">
          <div class="row my-5 py-5">
            <div class="col-sm-6 d-flex align-items-center">
              <div>
                <?php the_field('home-comparison-introtext'); ?>
              </div>
            </div>

            <div class="col-sm-6">
              <?php echo wp_get_attachment_image(get_field('home-comparison-introimage'), 'full', false, array('class'=>'img-fluid')); ?>
            </div>
          </div>
        </div>

        <div class="row row-eq-height mt-5">
          <?php
          if( have_rows('product-comparison') ):
            while ( have_rows('product-comparison') ) : the_row(); ?>

            <div class="col-lg-4 px-4">
              <div class="text-center mb-5">
                <?php echo wp_get_attachment_image(get_sub_field('comparison-logo'), 'full', false, array('style'=>'max-height: 100px;')); ?>
              </div>

              <?php the_sub_field('comparison-text'); ?>
              <?php $link = get_sub_field('comparison-link'); ?>

              <div class="text-center d-block d-lg-none">
                <a href="<?php echo $link['url']; ?>" class="button-oc"><?php echo $link['title']; ?></a>
                <hr class="my-5" />
              </div>
            </div>

            <?php
            endwhile;
          endif;
          ?>
        </div>

        <div class="row d-md-none d-lg-flex">
          <?php
          if( have_rows('product-comparison') ):
            while ( have_rows('product-comparison') ) : the_row(); ?>

            <?php $link = get_sub_field('comparison-link'); ?>

            <div class="col-lg-4 px-4">
              <div class="text-center">
                <i class="fa fa-chevron-down iconx2 d-block my-3"></i>
                <a href="<?php echo $link['url']; ?>" class="button-oc"><?php echo $link['title']; ?></a>
              </div>
            </div>

            <?php
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </section>

    <?php
    if (time() < mktime(0,0,0, 9,17,2019)) :
    ?>
    <section class="users" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/ownClound-conference-2019.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>ownCloud conference 2019</h1>
                    <div class=" subnote">September 17th - September 20th, 2019 Nuremberg</div>
                    <p>The annual ownCloud conference will happen for the 7th time. We are expecting attendees from all over the world to join us for four days of conference, hacking and learning from the best in the field. <br />
                      Check out your free ticket and get in touch with the experts!</p>
                    <a href="https://conference.owncloud.org" class="button-oc mt-3">Join the conference today &nbsp;» </a>
                </div>
            </div>
        </div>
    </section>

    <?php
    endif;
    ?>

    <section class="users" style="background-image: url(<?php echo wp_get_attachment_image_url(get_field('users_image'), 'full'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-10">
                    <h1>With over 50 million users worldwide ownCloud is the largest Open Source Content Collaboration Platform in the world</h1>
                    <!-- <div class="smallfont subnote">* according to Gartner Inc. Magic Quadrant 2018</div> -->

                    <a href="<?php echo get_page_link(14); ?>" class="button-oc">See why ownCloud is trusted &nbsp;» </a>
                </div>
            </div>
        </div>
    </section>

    <section class="recent_tweets">
        <div class="container">
            <h2>
                <i class="icon-twitter iconx2"></i> Recent Tweets
            </h2>
        <?php
        if ( is_active_sidebar( 'recent_tweets' ) )
            dynamic_sidebar( 'recent_tweets' );
        ?>
        </div>

        <div class="text-center">
            <a href="https://twitter.com/owncloud" target="_blank" class="button-oc">Follow ownCloud on Twitter <i class="fa fa-twitter"></i> </a>
        </div>
    </section>

    <section class="community" style="background-image: url(<?php echo wp_get_attachment_image_url(get_field('community_image'), 'full'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-10">
                    <h1>ownCloud is Community Driven</h1>
                    <h2>With over 1300 contributors ownCloud is one of the biggest open source projects worldwide*</h2>
                    <div class="smallfont subnote">* <a href="https://www.openhub.net/p/ownCloud" target="_blank">see openhub statistics</a></div>

                    <a href="<?php echo get_page_link(16); ?>" class="button-oc">Join the community today<i class="fa fa-connectdevelop" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="text-center">
                <h3>Signup for the ownCloud newsletter</h3>
                <form class="newsletter-subscribe">
                    <p>Stay up to date about new ownCloud features and releases.<br />
                        <span class="smallfont">(Our newsletter is sent once a month. We won't spam :) )</span>
                    </p>
                    <input type="email" name="email" placeholder="Enter your email address" id="email" /> <button class="button-oc occon-blue" type="submit">Submit<i class="fa fa-envelope"></i><i class="spinner fa fa-circle-o-notch fa-spin fa-fw"></i></button>
                    <div class="error"><i class="fa fa-times-circle" aria-hidden="true"></i> Please enter a valid email address</div>
                    <div class="success"><i class="fa fa-check" aria-hidden="true"></i> You successfully signed up for our newsletter. Please check your inbox to confirm your email address.</div>
                </form>
                <p class="smallfont">
                  By submitting this form, you are granting ownCloud GmbH permission to contact you.<br />
                  You can revoke permission any time using the unsubscribe link found at the bottom of every email or by sending an email to info@owncloud.com
                </p>
            </div>
        </div>
    </section>

    <?php

    /*
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <h3>Community</h3>
                    <p>ownCloud is developed in a transparent and inviting way by the open source community.</p>
                    <a class="button-oc secondary" href="#">Join our community</a>
                </div>

                <div class="col-md-4 text-center">
                    <h3>Privacy</h3>
                    <p>ownCloud keeps your files secure and private – you decide where you host your data.</p>
                    <a class="button-oc secondary" href="#">Install your ownCloud Server!</a>
                </div>

                <div class="col-md-4 text-center">
                    <h3>Flexibility</h3>
                    <p>ownCloud is extensible with new functionality to provide all you need to live your digital life.</p>
                    <a class="button-oc secondary" href="#">Learn about more features!</a>
                </div>
            </div>
        </div>
    </section>

    */
    ?>

    <section>
        <div class="container posts">
            <h2>
                <i class="icon-cloud iconx2"></i> Recent Posts
            </h2>
            <div class="recent-posts isotope-grid" data-state="idle">
                <div class="grid-gutter"></div>
                <div class="grid-sizer"></div>
                <?php
                $args = array(
                    'numberposts' => 15,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'suppress_filters' => false
                );

                $recent = new WP_Query( $args );
                if ( $recent->have_posts() ) :
                    while ( $recent->have_posts() ) :
                        $recent->the_post();

                        echo get_template_part('template-parts/post', 'preview');

                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div class="text-center">
                <a href="<?php echo get_page_link(2); ?>" class="button-oc">See more blog posts<i class="fa fa-newspaper-o"></i></a>
            </div>
        </div>
    </section>

</article>

<?php
    endwhile;
endif;

get_footer();
?>
