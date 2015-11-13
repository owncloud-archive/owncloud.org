<div class="container footer-social-icons">
    <div>
      <a target="_blank" href="https://plus.google.com/107072838776436530705/about"><img width=50 src="<?php echo get_template_directory_uri(); ?>/assets/img/social/googleplus.png" title="Follow us on Google Plus!" alt="Follow us on Google Plus!"></img></a>
      <a target="_blank" href="https://www.facebook.com/ownClouders"><img width=50 src="<?php echo get_template_directory_uri(); ?>/assets/img/social/facebook.png" title="Like our facebook page!" alt="Like our facebook page!"></img></a>
      <a target="_blank" href="https://twitter.com/ownClouders"><img width=50 src="<?php echo get_template_directory_uri(); ?>/assets/img/social/twitterround.png" title="Subscribe to our twitter channel!" alt="Subscribe to our twitter channel!"></img></a>
      <a target="_blank" href="https://owncloud.org/blogfeed"><img class="img-circle" width=50 src="<?php echo get_template_directory_uri(); ?>/assets/img/social/rss.png" title="Subscribe to our news feed!" alt="Subscribe to our news feed!"></img></a>
      <a target="_blank" href="http://visitor.r20.constantcontact.com/d.jsp?llr=ixens9uab&amp;p=oi&amp;m=1121878184680&amp;sit=mf4qye7jb&amp;f=cc4cd13f-acdf-45d3-b132-75252542c37d"><img width=50 src="<?php echo get_template_directory_uri(); ?>/assets/img/social/mail.png" title="Subscribe to our newsletter!" alt="Subscribe to our newsletter!"></img></a>
    </div>
  </div>
<footer class="content-info" role="contentinfo">
<div class="container">   
   <div class="row">
     <div class="col-sm-2 col-sm-offset-1">
        <div class="footer-nav">
          <h4>About ownCloud</h4>
          <ul id="menu-about" class="menu">
            <li class="menu-contact"><a href="<?php get_bloginfo('url'); ?>/contact/">People</a></li>
            <li class="menu-history"><a href="<?php get_bloginfo('url'); ?>/history/">History</a></li>
            <li class="menu-events"><a href="<?php get_bloginfo('url'); ?>/events/">Events</a></li>
            <li class="menu-press"><a href="/press">Press</a></li>
            <li class="menu-privacy"><a href="<?php get_bloginfo('url'); ?>/privacy/">Privacy policy</a></li>
          </ul>
        </div>
     </div>
     <div class="col-sm-2 col-sm-offset-2">
        <div class="footer-nav">
          <h4>Resources</h4>
          <ul id="menu-support-and-documentation" class="menu">
            <li class="menu-faq"><a href="<?php get_bloginfo('url'); ?>/faq/">FAQ</a></li>
            <li class="menu-admin-manual"><a href="<?php echo $DOCUMENTATION_ADMIN; ?>">Admin manual</a></li>
            <li class="menu-user-manual"><a href="<?php echo $DOCUMENTATION_USER; ?>">User manual</a></li>
            <li class="menu-user-manual"><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>">Developer manual</a></li>
            <li class="menu-security"><a href="<?php get_bloginfo('url'); ?>/security/">Security</a></li>
            <li class="menu-store"><a href="http://www.cafepress.com/owncloudshop">ownCloud Store</a></li>
          </ul>
        </div>
     </div>
     <div class="col-sm-2 col-sm-offset-2">
        <div class="footer-nav">
          <h4>Interact</h4>
          <ul id="menu-interact" class="menu">
            <li class="menu-irc-channel"><a href="https://webchat.freenode.net/?channels=owncloud">IRC Channel</a></li>
            <li class="menu-mailing-list"><a href="https://mailman.owncloud.org/mailman/listinfo/">Mailing List</a></li>
            <li class="menu-forums"><a href="https://forum.owncloud.org/">Forums</a></li>
            <li class="menu-bug-tracker"><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>bugtracker/index.html">Bug Tracker</a></li>
            <li class="menu-promote"><a href="/promote/">Spread the word</a></li>
          </ul>
        </div>
     </div>
   </div>
   <div class="row">
    <div class="col-lg-12 footer-text">
      <p><font face="sans"> &copy; </font> <?php echo date('Y'); ?> ownCloud</p>
  </div>
</div>
</footer>

<?php wp_footer(); ?>
