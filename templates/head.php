<!DOCTYPE html>
<html class="no-js" itemscope itemtype="http://schema.org/Organization" <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta itemprop="name" content="ownCloud">
	<meta itemprop="description" content="ownCloud provides universal access to your files via the web, your computer or your mobile devices — wherever you are.
	It also provides a platform to easily view &amp; sync your contacts, calendars and bookmarks across all your devices and enables basic editing right on the web.
	Through apps, you can extend ownCloud Server and make it your own!">
	<meta itemprop="image" content="https://owncloud.org/wp-content/themes/owncloudorgnew/assets/img/home/ocsplash.png">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png" />
	<?php wp_head(); ?>
	<?php if(is_page('5years') || is_page('conf') || is_page('federation') || is_page('register') || is_page('thankyou')) { ?><link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/conf.css"><?php } ?>
	<?php if(is_page('news')) { ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.infinitescroll.min.js"></script>
  	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.masonry.min.js"></script>
	<?php } ?>
	<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
	<?php if(is_page('install')) { ?>
	<script type="text/javascript">
		$(function() {
			if (navigator.appVersion.indexOf("Win")!=-1) {
				var e = document.getElementById("client-download-win");
				e.className += ' btn-primary';
			} else if(navigator.appVersion.indexOf("Mac")!=-1) {
				var e = document.getElementById("client-download-mac");
				e.className += " btn-primary";
			} else if (navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1) {
				var e = document.getElementById("client-download-linux");
				e.className += ' btn-primary';
			}
		});
	</script>
	<?php } ?>
</head>
