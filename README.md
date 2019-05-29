# Contributing to ownCloud.org website

Please take a moment to review this document in order to make the contribution
process easy and effective for everyone involved.    
https://doc.owncloud.org is not maintained here, but in https://github.com/owncloud/documentation

This repo contains the Wordpress theme for owncloud.org. To setup a (development) environment please note the following.

The theme is work in progress. Some contents are still hardcoded and not cms'ified yet.

# Mandatory Plugins

## Advanced Custom Fields (ACF) Pro
Install the plugin and import https://github.com/owncloud/owncloud.org/blob/master/acf-export.json

If the custom fields are changed in production please export the custom fields setup and overwrite the acf-export.json file.

## YOAST! SEO
Mandatory for SEO and page loading optimization.

## WP_SCSS
Processor for SCSS files.
SCSS directory: /scss
CSS directory: /css

## WP Fastest Cache (Pro)
Caches pages for faster content delivery and optimizes script compression and loading.
Note that for production environment the /changelog/ URL must be entered as URL rule to not be cached (see "Auto-pull of Changelogs" below)

## Custom Post Type UI
Handles the administration of custom post types. Please see custom_post_types_export.txt.
Import this file to set up all custom post types. If custom post types are changed in production please export and overwrite the file custom_post_types_export.txt.

## Shield
https://wordpress.org/plugins/wp-simple-firewall/

Not feature but security relevant. Most important settings are:
- hide standard wordpress login page (URL changer)
- enable 2FA
- enable Bruteforce protection

# Less critical plugins
The following plugins are needed for some features but do not impair the websites basic features.

## Recent Tweets Widget
https://wordpress.org/plugins/recent-tweets-widget/

Includes recent tweets from a twitter channel

## Co-Authors Plus
https://wordpress.org/plugins/co-authors-plus/

Enables multiple authors on articles

## Contact Form 7
https://wordpress.org/plugins/contact-form-7/

Easily set up contact forms

## Material Design for Contact Form 7
https://wordpress.org/plugins/material-design-for-contact-form-7/

Design addon for Contact Forms 7
There are some custom changes on this plugin:

plugins/material-design-for-contact-form-7/freemius/includes/class-freemius.php: remove line 3014: Avoid API call which slows down DB

plugins/material-design-for-contact-form-7/admin/cf7-material-design-admin.php: remove line line 28: Prevent DB performance decrease

This needs to be considered if the plugin gets updated!

## Public Post Preview
https://wordpress.org/plugins/public-post-preview/

Enables post preview links

# Customizations
## Auto-pull of Changelogs
The pages on https://owncloud.org/changelog/ are pulled via cronjob from (for example "server") https://raw.githubusercontent.com/owncloud/core/stable10/CHANGELOG.md

See https://github.com/owncloud/owncloud.org/blob/78f1d3a56b77c4c9fdf0df345776b502525d8e13/functions.php#L259

These pages must not be cached, see the WP Fastest Cache Settings above.
