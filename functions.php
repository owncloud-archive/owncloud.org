<?php
/**
 * Roots includes
 */
require_once locate_template('/lib/utils.php');           // Utility functions
require_once locate_template('/lib/init.php');            // Initial theme setup and constants
require_once locate_template('/lib/wrapper.php');         // Theme wrapper class
require_once locate_template('/lib/sidebar.php');         // Sidebar class
require_once locate_template('/lib/config.php');          // Configuration
require_once locate_template('/lib/activation.php');      // Theme activation
require_once locate_template('/lib/titles.php');          // Page titles
require_once locate_template('/lib/cleanup.php');         // Cleanup
require_once locate_template('/lib/nav.php');             // Custom nav modifications
require_once locate_template('/lib/gallery.php');         // Custom [gallery] modifications
require_once locate_template('/lib/comments.php');        // Custom comments modifications
require_once locate_template('/lib/relative-urls.php');   // Root relative URLs
require_once locate_template('/lib/widgets.php');         // Sidebars and widgets
require_once locate_template('/lib/scripts.php');         // Scripts and stylesheets
require_once locate_template('/lib/custom.php');          // Custom functions

// Custom Functions

/**
 * @brief Attempts to discover if user is on Windows, Linux or Mac.
 * @return The OS
 */
function os_info() {
	$oses = array(
		'Windows' => '(Windows NT 5.1)|(Windows XP)|(Windows NT 5.2)|(Windows NT 6.0)|(Windows NT 6.1)|(Windows NT 6.2)',
		'Linux' => '(Linux)|(X11)',
		'Mac' => '(Mac_PowerPC)|(Macintosh)'
	);
	$agent = $_SERVER['HTTP_USER_AGENT'];
	foreach($oses as $os=>$pattern)
		if (preg_match('/'.$pattern.'/i', $agent)) 
	return $os;
	return 'Unknown';
}