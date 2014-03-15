# Contributing to ownCloud.org website

Please take a moment to review this document in order to make the contribution
process easy and effective for everyone involved.

## Setup of a local development environment

1. Install Wordpress >= 3.8.1
  * Must be in the document root of the webserver (otherwise images won't load :( )
  * Enter what you like for site title, admin user and password, none of this is used by git
2. Clone the www repo into your wp-content/themes folder under the name 'owncloudorgnew'
  * git clone git@github.com:owncloud/www.repo owncloudorgnew
3. Activate the theme in Appearance > Themes
4. Import the website content .xml file
  * First install the Wordpress Import Plugin (via Tools > Import > Wordpress Import > Install Plugin)
  * Select the content.xml file from the www repo and click upload
  * Select Import
5. Copy over config.php.sample to config.php and adjust settings as necessary
6. In Settings > Reading assign a static front page of 'home'

## Development Process

* Develop changes in a branch of master, served on your local environment
* Submit a pull request to master once the feature/bugfix is complete
* Upon review, a core developer will permit the merge into master
* Code will be pulled onto staging.owncloud.org for testing
* Upon approval this will be cloned over to www.owncloud.org
