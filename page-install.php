<div class="row">
<!--  Server  -->
  <div class="col-md-6">
    <h3><strong>Install ownCloud Server</strong> <span class="label label-success">Version 7</span></h3>
    <p>Latest stable version: <?php echo $VERSIONS_SERVER_FULL_STABLE; ?> (<a href="/changelog"><small>Changelog</small></a>)</br>
    <p>ownCloud can be installed on Windows and Linux operating systems, and is available via packages, sources, or a one file php installer.</p>
    <div class="btn-group">
      <a class="btn btn-primary btn-lg" href="#instructions-server" role="button" rel="tooltip" title="For server owners"><i class="icon-archive"></i> Archive File</br><small>For server owners</small></a>
      <a class="btn btn-default btn-lg" href="#instructions-web" role="button" data-toggle="popover" rel="tooltip" title="Best for shared hosts"><i class="icon-code"></i> Web Installer</br><small>For shared hosts</small></a>
      <a class="btn btn-default btn-lg"  href="#instructions-packages" role="button" data-toggle="popover" rel="tooltip" title="Provides automated updates"><i class="icon-linux"></i> Packages</br><small>For auto updates</small></a>
    </div>
    <p>Looking for <a href="/changelog">older versions</a>?</p>
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
      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN; ?>" id="client-download-win" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows<br /><small>XP, Vista, 7 and 8</small></a>
      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC; ?>" id="client-download-mac" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac<br /><small>OSX 10.7+, 64 bit</small></a>
      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX; ?>" id="client-download-linux" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux<br /><small>Multiple distributions</small></a>
    </div>
    <p>Looking for the <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES; ?>">Sources</a> (<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES_PGP; ?>">PGP signature</a>)? For more information on the sync client, checkout the <a target="_blank" href="<?php echo $DOCUMENTATION_CLIENT_DESKTOP; ?>/">documentation</a>.</p>
  </div>
  <div class="col-md-6">
    <div class="thumbnail">
      <img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/macsettings.png" alt="ownCloud Desktop Client" />
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
    <a name="integrate"></a>
    <h3><strong>Integrate with your ownCloud</strong></h3>
    <p>ownCloud is compatible with a large range of 3rd party applications and services. Use ownCloud to store your data and better integrate with your web services.</p>   
    <div class="btn-group">
      <a href="https://github.com/owncloud/core/wiki/Apps" class="btn btn-lg btn-primary btn-default" target="_blank"><i class="icon-compass"></i>  Explore applications</a>
      <a href="https://github.com/owncloud/core/wiki/Apps#integration-efforts" class="btn btn-lg btn-default" target="_blank"><i class="icon-filter"></i> Integrate ownCloud in your app</a>
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
    <a name="testing"></a>
    <h3><strong>Help with testing and development</strong></h3>
    <p>Our server is in constant development and help is always needed in testing the latest bugfixes and features. Please report any issues to the <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>/bugtracker/" target="_blank">tracker</a>.</p>
    <h4>ownCloud Server <small>Daily build</small></h4>
    <div class="btn-group">
      <a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i>  Archive File</a>
      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_DAILY; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a>
    </div>
    <p>Our desktop team provides regular pre-releases. Please report any issues to the <a href="https://github.com/owncloud/mirall/issues" target="_blank">tracker</a>.</p>
    <h4>Desktop Clients <small><?php echo $VERSIONS_CLIENT_DESKTOP_TESTING; ?></small></h4>
    <div class="btn-group">
      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_WIN; ?>" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows</a>
      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_MAC; ?>" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac</a>
      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux</a>
      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Sources</a>
    </div>
    <p>You can check the authenticity of the sources using this <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP; ?>">PGP signature</a>.</p>
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
