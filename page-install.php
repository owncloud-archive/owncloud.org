<div class="row">
<!--  Server  -->
  <div class="col-md-6">
    <h3><strong>Install ownCloud Server</strong></h3>
    <p>Latest stable version: <?php echo $VERSIONS_SERVER_FULL_STABLE; ?>&nbsp;&nbsp;(<a href="/changelog"><small>Changelog</small></a>)</p>
    <p>ownCloud can be installed on Windows and Linux operating systems, and is available via packages, sources, or a one file php installer.</p>
    <div class="btn-group">
	<a class="btn btn-primary btn-large" href="#instructions-server" role="button" rel="tooltip" title="For server owners"><i class="icon-archive"></i> Archive File</br><small>For server owners</small></a>
	<a class="btn btn-default btn-large" href="#instructions-web" role="button" data-toggle="popover" rel="tooltip" title="Best for shared hosts"><i class="icon-code"></i> Web Installer</br><small>For shared hosts</small></a>
	<a class="btn btn-default btn-large"  href="#instructions-packages" role="button" data-toggle="popover" rel="tooltip" title="Provides automated updates"><i class="icon-linux"></i> Packages</br><small>For auto updates</small></a>
    </div>
    <br />
    <br />
  </div>
  <div class="col-md-6">
    <div class="thumbnail">
      <img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="ownCloud Server" />
    </div>
  </div>
</div ><!-- end of div class="row installers" -->

<!--  Desktop  -->
<div class="row">
  <div class="col-md-6">
    <a name="desktop"></a>
    <h3><strong>Install Desktop Clients</strong></h3>
    <p>Latest stable version: <?php echo $VERSIONS_CLIENT_DESKTOP_STABLE_FULL; ?>&nbsp;&nbsp;(<a href="/changelog/desktop"><small>Changelog</small></a>)</p>
    <p>Synchronise your ownCloud with your computer using our desktop clients. Select one or more directories on your local machine and always have access to your latest files wherever you are.</p>
    <div class="btn-group">
      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN; ?>" class="btn btn-large btn-default<?php if(os_info() == 'Windows'){ echo ' btn-primary'; } ?>"><i class="icon-windows"></i>  Windows<br /><small>XP, Vista, 7 and 8</small></a>
      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC; ?>" class="btn btn-large btn-default<?php if(os_info() == 'Mac'){ echo ' btn-primary'; } ?>"><i class="icon-apple"></i> Mac<br /><small>OSX 10.6+</small></a>
      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX; ?>" class="btn btn-large btn-default<?php if(os_info() == 'Linux'){ echo ' btn-primary'; } ?>"><i class="icon-linux"></i> Linux<br /><small>Multiple distributions</small></a>
    </div>
    <br /><br />
    <p>For more information on the sync client, checkout the <a href="">documentation</a>.</p>
  </div>
  <div class="col-md-6">
    <div class="thumbnail">
      <img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/clientsettingsandtray.png" alt="ownCloud Desktop Client" />
    </div>
  </div>
</div>

<!--  Mobile  -->
<div class="row">
  <div class="col-md-6">
    <a name="mobile"></a>
    <h3><strong>Install Mobile Apps</strong></h3>
    <p>Mobile apps are available in both the Apple App Store and the Google Play Store, allowing you to access, sync and upload your data on the go.</p>
    <a style="opacity: 0.9" target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS; ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/appstore.png">
    </a>
    <a style="opacity: 0.9" target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID; ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/googleplay.png">
    </a>
    <br />
    <p>Looking for the <a href="https://github.com/owncloud/android">Android Sources</a>?</p>
    <br />
    <br />
  </div>
  <div class="col-md-6">
    <div class="thumbnail">
      <img style="margin: 0 auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/androidmodel.png" alt="ownCloud Mobile Client" />
    </div>
  </div>
</div>

<!-- Integrate -->
<div class="row">
  <div class="col-md-6">
    <a name="mobile"></a>
    <h3><strong>Integrate with your ownCloud</strong></h3>
    <p>ownCloud is compatible with a large range of 3rd party applications and services. Use ownCloud to store your data and better integrate with your web services.</p>   
    <div class="btn-group">
      <a href="https://github.com/owncloud/core/wiki/Apps" class="btn btn-large btn-primary btn-default'" target="_blank"><i class="icon-compass"></i>  Explore applications</a>
      <a href="https://github.com/owncloud/core/wiki/Apps#integration-efforts" class="btn btn-large btn-default" target="_blank"><i class="icon-filter"></i> Integrate ownCloud in your app</a>
    </div>
  </div>
  <div class="col-md-6">
    <div class="thumbnail">
      <img style="margin: 0 auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/logocloud.png" alt="ownCloud Compatible locations" />
    </div>
  </div>
</div>

<!--  Testing  -->
<div class="row">
  <div class="col-md-6">
    <a name="mobile"></a>
    <h3><strong>Help with testing and development</strong></h3>
    <p>Our mobile apps are in constant development and help is always needed in testing the latest bugfixes and features. Please report any issues to the <a href="https://github.com/owncloud/core/issues" target="_blank">tracker</a>.</p>
    <h4>ownCloud Server <small>Daily build</small></h4>
    <div class="btn-group">
      <a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-large btn-default"><i class="icon-archive"></i>  Archive File</a>
      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_DAILY; ?>" class="btn btn-large btn-default"><i class="icon-linux"></i> Linux Packages</a>
    </div>
    <h4>Desktop Clients <small><?php echo $VERSIONS_CLIENT_DESKTOP_TESTING; ?></small></h4>
    <div class="btn-group">
      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_WIN; ?>" class="btn btn-large btn-default"><i class="icon-windows"></i>  Windows</a>
      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_MAC; ?>" class="btn btn-large btn-default"><i class="icon-apple"></i> Mac</a>
      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX; ?>" class="btn btn-large btn-default"><i class="icon-linux"></i> Linux</a>
    </div>
  </div>
  <div class="col-md-6">
    <div class="thumbnail">
      <img style="margin: 0 auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/codebasephp.png" alt="ownCloud Code" />
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <p>Find our GPG key at <a target="_blank" href="<?php echo $OWNCLOUD_GPG; ?>"><?php echo $OWNCLOUD_GPG; ?></a></p>
  </div>
</div>