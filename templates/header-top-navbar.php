<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="brand" href="<?php echo home_url(); ?>/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_owncloud.svg" title="<?php bloginfo('name'); ?>" itemprop="logo"></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <ul id="menu-header" class="nav navbar-nav">
        <li class="<?php if(is_page('news')){ echo 'top-nav-active '; } ?>menu-news"><a href="/news/">News</a></li>
        <li class="<?php if(is_page('features')){ echo 'top-nav-active '; } ?>menu-features"><a href="/features/">Features</a></li>
        <li class="menu-demo"><a target="_blank" href="https://demo.owncloud.org">Demo</a></li>
        <li class="menu-documentation"><a href="https://doc.owncloud.org">Documentation</a></li>
        <li class="<?php if(is_page('contribute')){ echo 'top-nav-active '; } ?>menu-contribute"><a href="/contribute/">Contribute</a>
        <li class="<?php if(is_page('support')){ echo 'top-nav-active '; } ?>menu-support"><a href="/support/">Support</a></li>
        <li class="menu-commercial"><a target="_blank" href="https://owncloud.com">Enterprise Edition</a></li>
        <li class="<?php if(is_page('news')){ echo 'top-nav-active '; } ?>menu-install"><a href="/install/">Download</a></li>
      </ul>
    </nav>
  </div>
</header>
