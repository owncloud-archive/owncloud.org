<footer class="content-info" role="contentinfo">
<div class="container">   
   <div class="row">
     <div class="col-sm-4">
        <div class="footer-nav">
          <h4>About ownCloud</h4>
          <ul id="menu-about" class="menu">
            <li class="menu-contact"><a href="<?php get_bloginfo('url'); ?>/contact/">Contact</a></li>
            <li class="menu-history"><a href="<?php get_bloginfo('url'); ?>/history/">History</a></li>
          </ul>
        </div>
     </div>
     <div class="col-sm-4">
        <div class="footer-nav">
          <h4>Support &#38; Documentation</h4>
          <ul id="menu-support-and-documentation" class="menu">
            <li class="menu-admin-manual"><a href="http://doc.owncloud.org/server/6.0/admin_manual/">Admin manual</a></li>
            <li class="menu-user-manual"><a href="http://doc.owncloud.org/server/6.0/user_manual/">User manual</a></li>
            <li class="menu-security"><a href="<?php get_bloginfo('url'); ?>/security/">Security</a></li>
            <li class="dropdown menu-resources"><a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">Resources <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="menu-irc-channel"><a href="http://webchat.freenode.net/?channels=owncloud">IRC Channel</a></li>
                <li class="menu-mailing-list"><a href="https://mail.kde.org/mailman/listinfo/owncloud">Mailing List</a></li>
                <li class="menu-forums"><a href="http://forum.owncloud.org/">Forums</a></li>
                <li class="menu-bug-tracker"><a href="https://github.com/owncloud/core/issues">Bug Tracker</a></li>
              </ul>
            </li>
          </ul>
        </div>
     </div> 
     <div class="col-sm-4">
        <div class="footer-nav">
          <h4>Developer Resources</h4>
          <ul id="menu-developer" class="menu">
            <li class="menu-contribute"><a href="<?php get_bloginfo('url'); ?>/contribute/">Contribute</a></li>
            <li class="menu-security"><a href="<?php get_bloginfo('url'); ?>/security/">Security</a></li>
            <li class="menu-design"><a href="<?php get_bloginfo('url'); ?>/contribute/design/">Design</a></li>
            <li class="menu-developer-docs"><a href="http://doc.owncloud.org/server/6.0/developer_manual/">Developer docs</a></li>
          </ul>
        </div>
     </div>
   </div>
   <div class="row">
    <div class="col-lg-12 footer-text">
        <p>&copy; <?php echo date('Y'); ?> ownCloud.org</p>
    </div>
  </div>
</div>
</footer>

<?php wp_footer(); ?>
