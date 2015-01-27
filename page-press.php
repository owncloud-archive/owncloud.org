<?php get_template_part('templates/parts/title'); ?>
<h2>Current Release Information <small>Version 8.0</small></h2>
<a target="_blank" href="https://owncloud.org/blog/owncloud-server-8-0-released" class="btn btn-lg btn-default">Announcement</a>
<a href="/features" class="btn btn-lg btn-default">Key Features of ownCloud</a>
<a href="/install" class="btn btn-lg btn-default">Download ownCloud Server 8.0</a>
<h2>Latest News and Annoucements</h2>
<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5, 'format' => 'html' ) ); ?>
<h2>ownCloud Resources</h2>
<div class="row">
	<div class="col-md-3"><a href="https://github.com/owncloud/screenshots/archive/stable8.0.zip"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/screenshots.png"
		style="width: 100%" alt="Download a zip file with screenshots" class="img-thumbnail"></a></div>
	<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/files/Logo_files.zip"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/logofiles.png"
		style="width: 100%" alt="Download a zip file with logo files" class="img-thumbnail"></a></div>
	<div class="col-md-3"><a href="http://www.youtube.com/ownclouders"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/youtube.png" style="width: 100%" 
		alt="View the ownCloud community youtube channel" class="img-thumbnail"></a></div>
	<div class="col-md-3"><a href="/8-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/newfeatures.png" style="width: 100%" alt="See what is new in ownCloud Server 8.0"
		class="img-thumbnail"></a></div>
</div>
<h2>Branding Guidelines</h2>
<p>Find up to date guidelines and other graphical resources in our <a href="https://github.com/owncloud/promo">promo github account</a>.</p>
<h2>Inquiries</h2>
<p>For press inquiries, please contact <a href="mailto:pr@owncloud.com" target="_blank">Claudine Bianchi</a>.<p>
