<?php 

// Base file to handle each page request
require get_template_directory().'/config.php';
require get_template_directory().'/strings.php';

// If oc-new rss page, only show page content...
if(is_page('oc-news')) { include roots_template_path(); } else {
  get_template_part('templates/head'); 
  ?>
  <body <?php body_class(); ?>>

    <!--[if lt IE 8]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
      </div>
    <![endif]-->

    <?php
      do_action('get_header');
      get_template_part('templates/header-top-navbar');
    ?>

    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main <?php echo roots_main_class(); ?>" role="main">
          <?php include roots_template_path(); ?>
        </main><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->

    <?php get_template_part('templates/footer'); ?>

    <?php if(is_page('install')) { require get_template_directory().'/install-instructions.php'; } ?>

    <?php if(PIWIKTRACKING) { get_template_part('templates/piwik-tracking'); } ?>
    
  </body>
</html>

<?php } ?>