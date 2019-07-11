<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600" rel="stylesheet">

        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

        <?php wp_head(); ?>
    </head>
    <body <?php echo body_class(); ?>>
        <header class="main">
            <div class="container d-flex justify-content-between">
                <div class="logo">
                    <a class="d-flex align-items-center" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/owncloud-org-logo.svg" alt="ownCloud community logo" /></a>
                </div>
                <div class="d-flex align-items-center">
                    <button class="toggle-nav"><span class="open-menu">Menu</span><span class="close-menu">close</span></button>
                    <nav class="mainnav" role="navigation">
                        <ul>
                            <?php
                            foreach(wp_get_nav_menu_items('MainMenu') as $item) {
                                echo '<li><a href="' . $item->url . '" title="' . $item->title . '">' . $item->title . '</a></li>';
                            }
                            ?>
                            <li><a class="button-oc" href="<?php echo get_page_link(87); ?>">Download</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
