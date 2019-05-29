<?php /* Template Name: Help */
get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<article class="container">
  <h1 class="headline-page"><?php the_title(); ?></h1>
  <?php the_content(); ?>

  <section>
    <h2>Talk</h2>
    <p>
      Ask our community, become a part of it and get in touch with us.
    </p>
    <div class="row justify-content-md-center">
      <div class="col-md-4 col-sm-6 channel-box">
        <div>
          <i class="fa fa-comments" aria-hidden="true"></i>
          <h3>Community Forums</h3>
        </div>
        <p>
          ownClouds main help desk. Get in touch with our community and devs and work on solutions together.
        </p>
        <a href="https://central.owncloud.org" class="button-oc" target="_blank">Go to ownCloud Central<i class="fa fa-comments" aria-hidden="true"></i></a>
      </div>

      <div class="col-md-4 col-sm-6 channel-box">
        <div>
          <i class="fa fa-github" aria-hidden="true"></i>
          <h3>GitHub</h3>
        </div>
        <p>
          ownClouds' development happens here. Participate or let us know if you found a bug.
        </p>
        <a href="https://github.com/owncloud" class="button-oc stacked" target="_blank">Take me there<i class="fa fa-github" aria-hidden="true"></i></a>
        <a href="https://github.com/owncloud/core/blob/master/.github/CONTRIBUTING.md#submitting-issues" class="button-oc" target="_blank">Bugtracker<i class="fa fa-bug" aria-hidden="true"></i></a>
      </div>

      <div class="col-md-4 col-sm-6 channel-box social-media">
        <div>
          <i class="fa fa-share-alt" aria-hidden="true"></i>
          <h3>Social Media</h3>
        </div>
        <p>
          Follow us, stay up-to-date and get in touch with us.
        </p>
        <div>
          <?php
          foreach(get_option( 'spacexchimp_p005_settings' )['media'] as $name=>$platform) {
            if($platform['content'] === '')
              continue;

            if ($name === 'rss-feed' || $name === 'google-play')
              continue;
            ?>
            <a href="<?php echo $platform['content']; ?>" class="button-oc icon-only" target="_blank"><i class="fa fa-<?php echo $name; ?>"></i></a>
            <?php
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <section>
    <h2>Read</h2>
    <p>
      Learn about ownCloud and become a ownCloud expert.
    </p>

    <div class="row justify-content-md-center">
      <div class="col-md-4 col-sm-6 channel-box">
        <div>
          <i class="fa fa-book" aria-hidden="true"></i>
          <h3>Documentation</h3>
        </div>
        <p>
          Install instructions, user guides and everything you need about ownCloud.
        </p>
        <a href="https://doc.owncloud.org/server/latest/admin_manual/" class="button-oc stacked" target="_blank">Admin Manual<i class="fa fa-book" aria-hidden="true"></i></a>
        <a href="https://doc.owncloud.org/server/latest/user_manual/" class="button-oc stacked" target="_blank">User Manual<i class="fa fa-book" aria-hidden="true"></i></a>
        <a href="https://doc.owncloud.org/server/latest/developer_manual/" class="button-oc" target="_blank">Developer Manual<i class="fa fa-book" aria-hidden="true"></i></a>
      </div>

      <div class="col-md-4 col-sm-6 channel-box">
        <div>
          <i class="fa fa-question-circle" aria-hidden="true"></i>
          <h3>Frequently Asked Questions</h3>
        </div>
        <p>
          All recurring questions in one place.
        </p>
        <a href="<?php echo get_page_link(13126); ?>" class="button-oc">Read FAQ<i class="fa fa-question-circle" aria-hidden="true"></i></a>
      </div>

      <div class="col-md-4 col-sm-6 channel-box">
        <div>
          <i class="fa fa-shield" aria-hidden="true"></i>
          <h3>Security</h3>
        </div>
        <p>
          ownCloud is all about security. Read here everything about it.
        </p>
        <a href="<?php echo get_page_link(13133); ?>" class="button-oc">Take me there<i class="fa fa-shield" aria-hidden="true"></i></a>
      </div>

      <div class="col-md-4 col-sm-6 channel-box">
        <div>
          <i class="fa fa-file-text" aria-hidden="true"></i>
          <h3>Knowledge Base</h3>
        </div>
        <p>
          Fact sheets, Whitepapers, Webinars, Analysis and more about ownCloud.
        </p>
        <a href="https://owncloud.com/resources/" class="button-oc" target="_blank">Take me there<i class="fa fa-file-text" aria-hidden="true"></i></a>
      </div>

      <div class="col-md-4 col-sm-6 channel-box">
        <div>
          <i class="fa fa-rss" aria-hidden="true"></i>
          <h3>RSS Feed</h3>
        </div>
        <p>
          Stay up-to-date to our <a href="<?php echo get_page_link(2); ?>">blog</a> by signing up on our RSS Feed.
        </p>
        <a href="<?php echo get_page_link(2); ?>feed/" class="button-oc">Show RSS Feed<i class="fa fa-rss" aria-hidden="true"></i></a>
      </div>


      <div class="col-md-4 col-sm-6 channel-box">
        <div>
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <h3>Newsletter</h3>
        </div>
        <p>
          Get all news directly to your inbox.
        </p>
        <a href="<?php echo get_page_link(14934); ?>" class="button-oc">Sign up now<i class="fa fa-envelope" aria-hidden="true"></i></a>
      </div>
    </div>
  </section>

  <section>
    <h2>Extend</h2>
    <p>
      ownCloud is easily extendible with apps. There are many community apps but also enterprise driven apps available.
    </p>

    <div class="row justify-content-md-center">
      <div class="col-md-4 col-sm-6 channel-box">
        <div>
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          <h3>Marktplace</h3>
        </div>
        <p>
          Have a look at the ownCloud marketplace and browse all apps.
        </p>
        <a href="https://marketplace.owncloud.com" class="button-oc stacked" target="_blank">Go to Marketplace<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
        <a href="https://doc.owncloud.org/server/latest/admin_manual/installation/apps_management_installation.html" class="button-oc" target="_blank">App install manual<i class="fa fa-book" aria-hidden="true"></i></a>
      </div>

      <div class="col-md-4 col-sm-6 channel-box">
        <div>
          <i class="fa fa-connectdevelop" aria-hidden="true"></i>
          <h3>App development guide</h3>
        </div>
        <p>
          You have an app idea and don‘t know where to start? See our app development guide.
        </p>
        <a href="https://doc.owncloud.org/server/latest/developer_manual" class="button-oc" target="_blank">Read the guide<i class="fa fa-connectdevelop" aria-hidden="true"></i></a>
      </div>
    </div>
  </section>

  <section>
    <h2>Buy</h2>
    <p>
      Beyond the free plans of ownCloud there are paid ones, too. <br />
      Get to know the experts behind the ownCloud technology helping you with your large scale environments with many users and even more files.
    </p>

    <div class="row justify-content-md-center">
      <div class="col-md-4 col-sm-6 channel-box enterprise-support">
        <div>
          <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
          <h3>Enterprise Support</h3>
        </div>
        <p>
          Need professional support? Explore your options how we can help you.
        </p>
        <a href="https://owncloud.com/pricing/" class="button-oc enterprise" target="_blank">See Enterprise Support Plans<i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>
      </div>

      <div class="col-md-4 col-sm-6 channel-box enterprise-features">
        <div>
          <i class="fa fa-rocket" aria-hidden="true"></i>
          <h3>Enterprise Features</h3>
        </div>
        <p>
          Need to extend your ownCloud functionalites even more? Have a look at our ownCloud enterprise bundle.
        </p>
        <a href="https://owncloud.com/product/" class="button-oc enterprise stacked" target="_blank">See product description<i class="fa fa-rocket" aria-hidden="true"></i></a>
        <a href="https://marketplace.owncloud.com/bundles/enterprise_apps" class="button-oc enterprise" target="_blank">Explore Enterprise Features<i class="fa fa-rocket" aria-hidden="true"></i></a>
      </div>

      <!-- <div class="col-md-4 col-sm-6 channel-box">
        <div>
          <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
          <h3>Enterprise Workshops</h3>
        </div>
        <p>
          Expand and refresh your knowledge. Attending our workshops and learn from the experts!
        </p>
        <a href="https://marketplace.owncloud.com/bundles/enterprise_apps" class="button-oc enterprise">See Workshop Schedules<i class="fa fa-lightbulb-o" aria-hidden="true"></i></a>
      </div> -->
    </div>
  </section>
</article>

<?php
    endwhile;
endif;
get_footer();
?>
