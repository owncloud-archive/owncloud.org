<div class="row">
<!--  Server  -->
  <div class="col-md-6">
    <h3><strong>Install ownCloud Server</strong></h3>
    <p>Latest stable version: <?php echo $VERSIONS_SERVER_FULL_STABLE; ?></p>
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
      <img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/server.png" alt="ownCloud Server" />
    </div>
  </div>
</div ><!-- end of div class="row installers" -->

<!--  Desktop  -->
<div class="row">
  <div class="col-md-6">
    <a name="desktop"></a>
    <h3><strong>Install Desktop Clients</strong></h3>
    <p>Latest stable version: <?php echo $VERSIONS_CLIENT_DESKTOP_STABLE_FULL; ?></p>
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
      <img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/desktopclientsetup.png" alt="ownCloud Android App" />
    </div>
  </div>
</div>

<!--  Mobile  -->
<div class="row">
  <div class="col-md-6">
    <a name="mobile"></a>
    <h3><strong>Install Mobile Apps</strong></h3>
    <p>Mobile apps are available in both the Apple App Store and the Google Play Store, allowing you to access, sync and upload your data on the go.</p>
    <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS; ?>">
      <img src="/assets/img/clients/buttons/appstore.png">
    </a>
    <a target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID; ?>">
      <img src="/assets/img/clients/buttons/googleplay.png">
    </a>
    <br />
    <p>Looking for the <a href="https://github.com/owncloud/android">Android Sources</a>?</p>
    <br />
    <br />
  </div>
  <div class="col-md-6">
    <div class="thumbnail">
      <img style="margin: 0 auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/androidmodel.png" alt="ownCloud Desktop Client" />
    </div>
  </div>
</div>
