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
	Through apps, you can extend ownCloud and make it your own!">
	<meta itemprop="image" content="http://owncloud.org/wp-content/themes/owncloudorgnew/assets/img/home/ocsplash.png">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png" />
	<?php wp_head(); ?>
	<?php if(is_page('conf')) { ?><link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/conf.css"><?php } ?>
	<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>
