<?php get_template_part('templates/parts/title'); ?>
<h2>Latest News and Annoucements</h2>
<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5, 'format' => 'html' ) ); ?>
<h2>Current Release Information <small>Version 7.0</small></h2>
<a href="http://owncloud.org/blog/owncloud-7-released-with-more-sharing-and-control" class="btn btn-lg btn-default">Annoucement</a>
<a href="http://owncloud.org/features" class="btn btn-lg btn-default">Key Features</a>
<a href="http://owncloud.org/install" class="btn btn-lg btn-default">Download</a>
<h2>ownCloud Resources</h2>
<div class="row">
	<div class="col-md-3"><a href="https://github.com/owncloud/screenshots/archive/stable7.zip"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/screenshots.png" style="width: 100%" alt="Download a zip file with screenshots" class="img-thumbnail"></a></div>
	<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/files/logo_files.zip"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/logofiles.png" style="width: 100%" alt="Download a zip file with logo files" class="img-thumbnail"></a></div>
	<div class="col-md-3"><a href="http://www.youtube.com/ownclouders"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/youtube.png" style="width: 100%" alt="View the ownCloud community youtube channel" class="img-thumbnail"></a></div>
	<div class="col-md-3"><a href="http://owncloud.org/7"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/newfeatures.png" style="width: 100%" alt="See what is new in ownCloud 7" class="img-thumbnail"></a></div>
</div>


<h2>Branding Guidelines</h2>
<p>The logo is white on dark blue (#1d2d44). It should not be used differently, especially not inversed. The name »ownCloud« can be optionally left out though.</p>

<p>The typeface of the logo (or similar ones) should not be used anywhere else. Instead use <a href="https://en.wikipedia.org/wiki/Open_Sans">Open Sans</a>, in regular weight. Use bold sparingly and only for selected emphasis.</p>

<p>Find up to date guidelines and other graphical resources in our <a href="https://github.com/owncloud/promo">promo github account</a>.</p>
