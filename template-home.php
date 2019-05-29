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

        <!-- <div class="teaser">
            <a href="https://streaming.media.ccc.de/occon18/"><span class="badge badge-primary">#ocCon18</span><span>See the live stream here</span></a> | <a href="https://cfp.owncloud.com/occon18/schedule/">See the talk schedule here</a>   
         </div>-->
        

      </div>

      <!-- <a href="<?php echo get_page_link(14); ?>" class="button-oc">Explore the features&nbsp;» </a> -->
    </div>
  </header>

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
