<?php /* Template Name: Conference 2018 Sponsors */
get_header('conference');

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<div class="header">
  <img class="banner" src="<?php echo get_template_directory_uri(); ?>/img/conference/ownCloud-conference-mockup.jpg" />
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1>Become a <br />conference sponsor</h1>
      </div>
    </div>
  </div>
</div class="header">

<article>
  <div class="container">
    <div class="breadcrumb">
      <a href="<?php echo get_page_link(14920); ?>"><i class="fa fa-caret-left" aria-hidden="true"></i>Back to conference page</a>
    </div>

    <?php the_content(); ?>

    <section>
      <h3>Gold sponsor</h3>
      <div class="row">
        <div class="col-md-4 col-lg-3 sponsors-badge">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/conference/ownCloud-gold-sponsor.png" />
        </div>
        <div class="col-md-8 offset-lg-1">
          <p>
            ownCloud's biggest sponsoring opportunity. Make everybody know, that you are one of the top dogs in the market out there.
          </p>
          <ul>
            <li>
              <b><s>Only 2 spots available!</s> SOLD OUT!</b>
            </li>
            <li>
              Get your own on-site information booth to present your company or project and get in touch with the experts.
            </li>
            <li>
              Get mentioned and presented as gold sponsor in our conference communication, including newsletters, homepage and on social media. Furthermore, we'll publish a blog article on our website owncloud.org (>10k unique visitors per day) presenting you as sponsor.
            </li>
            <li>
              Your Logo will be on every official conference communication material like posters, flyers, lanyards etc.
            </li>
            <li>
              Your logo will be included on presentation slides running during breaks at the conference.
            </li>
            <li>
              You will receive a banner to be used on your own website as offical sponsor of the ownCloud conference.
            </li>
          </ul>
          <p>
            Sponsoring amount: 2000€
          </p>
        </div>
      </div>
    </section>

    <section>
      <h3>Silver sponsor</h3>
      <div class="row">
        <div class="col-md-4 col-lg-3 sponsors-badge">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/conference/ownCloud-silver-sponsor.png" />
        </div>
        <div class="col-md-8 offset-lg-1">
          <p>
            The Silver sponsorship is best for those, who want to get their name out there and establish their position in the community and market.
          </p>
          <ul>
            <li>
              Limited to 4 spots.
            </li>
            <li>
              Get mentioned and presented as gold sponsor in our conference communication, including newsletters, homepage and on social media.
            </li>
            <li>
              Your Logo will be on every official conference communication material like posters, flyers, lanyards etc.
            </li>
            <li>
              Your logo will be included on presentation slides running during breaks at the conference.
            </li>
            <li>
              You will receive a banner to be used on your own website as offical sponsor of the ownCloud conference.
            </li>
          </ul>
          <p>
            Sponsoring amount: 1000€
          </p>
        </div>
      </div>
    </section>

    <section>
      <h3>Bronze sponsor</h3>
      <div class="row">
        <div class="col-md-4 col-lg-3 sponsors-badge">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/conference/ownCloud-bronze-sponsor.png" />
        </div>
        <div class="col-md-8 offset-lg-1">
          <p>
            The Bronze sponsoring opportunity is best for those who want to present themselves on a smaller budget. 
          </p>
          <ul>
            <li>
              Limited to 5 spots.
            </li>
            <li>
              Get mentioned and presented as bronze sponsor in our conference attendees newsletters.
            </li>
            <li>
              Your Logo will be on the official printed conference posters.
            </li>
            <li>
              Your logo will be included on presentation slides running during breaks at the conference.
            </li>
            <li>
              You will receive a banner to be used on your own website as offical sponsor of the ownCloud conference.
            </li>
          </ul>
          <p>
            Sponsoring amount: 500€
          </p>
        </div>
      </div>
    </section>

    <section>
      <h3>Micro sponsorship</h3>
      <div class="row">
        <div class="col-md-4 col-lg-3 sponsors-badge">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/conference/ownCloud-micro-sponsor.png" />
        </div>
        <div class="col-md-8 offset-lg-1">
          <p>
            With a micro sponsorship you cover the expenses for you and one more conference visitor.
          </p>
          <ul>
            <li>
              Get your Micro-Sponsor status by purchasing your conference “ticket”.
            </li>
            <li>
              Receive an official sponsor certificate.
            </li>
            <li>
              Serves you and sponsors another Community member.
            </li>
            <li>
              You will receive an official bill (i.e. for refund by employer).
            </li>
            <li>
              You get mentioned as sponsor in our conference attendees newsletters with sponsor-level (if wanted).
            </li>
            <li>
              You will receive a banner to be used on your own website as offical sponsor of the ownCloud conference.
            </li>
          </ul>
          <p>
            Sponsoring amount: 150€
          </p>
        </div>
      </div>
    </section>
  </div>
</article>

<article class="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p>
          Take this opportunity and show the world your standing in the open source market. If you are interested in becoming a supporter, fill out the contact form. Our event team will contact you as soon as possible to discuss the details.
        </p>
        <p>
          ownCloud itself and its community thanks you in advance for helping making this event happen!
        </p>
      </div>

      <div class="col-md-6">
         <?php echo do_shortcode('[contact-form-7 id="14930" title="ocCon sponsoring"]'); ?>
      </div>
    </div>
  </div>
</article>

<?php
    endwhile;
endif;

get_footer();
