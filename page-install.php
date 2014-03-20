<div class="row">
  <div class="col-md-6">
    <h3><strong>Install ownCloud Server</strong></h3>
    <p>Latest stable version: 6.0.2</p>
    <p>ownCloud can be installed on Windows and Linux operating systems, and is available via packages, sources, or a one file php installer.</p>
    <br />
    <div class="btn-group">
      <a data-placement="left" class="btn btn-primary btn-large" href="#downloadModal" role="button" data-toggle="modal" rel="tooltip" title="For server owners"><i class="icon-archive"></i> Archive File</br><small>For server owners</small></a>
      <a class="btn btn-default btn-large" data-placement="left" href="#webInstallerModal" role="button" data-toggle="modal" rel="tooltip" title="Best for shared hosts"><i class="icon-code"></i> Web Installer</br><small>For shared hosts</small></a>
      <a class="btn btn-default btn-large" data-placement="left" href="#repoModal" role="button" data-toggle="modal" rel="tooltip" title="Provides automated updates"><i class="icon-linux"></i> Packages</br><small>For auto updates</small></a>
    </div>
    <br />
    <br />
  </div>
  <div class="col-md-6">
    <div class="thumbnail">
      <img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/server.png" alt="ownCloud Server" />
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <h3><strong>Install Desktop Clients</strong></h3>
    <p>Latest stable version: 1.5.3</p>
    <p>Synchronise your ownCloud with your computer using our desktop clients. Select one or more directories on your local machine and always have access to your latest files wherever you are.</p>
    <div class="btn-group">
      <a href="https://download.owncloud.com/desktop/stable/ownCloud-1.5.3.2523-setup.exe" class="btn btn-large btn-default<?php if(os_info() == 'Windows'){ echo ' btn-primary'; } ?>"><i class="icon-windows"></i>  Windows<br /><small>XP, Vista, 7 and 8</small></a>
      <a href="https://download.owncloud.com/desktop/stable/ownCloud-1.5.3.2408.dmg" class="btn btn-large btn-default<?php if(os_info() == 'Mac'){ echo ' btn-primary'; } ?>"><i class="icon-apple"></i> Mac<br /><small>Mac OSX 10.6+, 6</small></a>
      <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:desktop&package=owncloud-client" class="btn btn-large btn-default<?php if(os_info() == 'Linux'){ echo ' btn-primary'; } ?>"><i class="icon-linux"></i> Linux<br /><small>Multiple distros supported</small></a>
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
<div class="row">
  <div class="col-md-6">
    <h3><strong>Install Mobile Apps</strong></h3>
    <p>Mobile apps are available in both the Apple App Store and the Google Play Store, allowing you to access, sync and upload your data on the go.</p>
    <br />
    <a target="_blank" href="http://itunes.apple.com/us/app/owncloud/id543672169?ls=1&amp;mt=8">
      <img src="https://owncloud.com/wp-content/themes/owncloud/img/appstore.png">
    </a>
    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.owncloud.android">
      <img src="https://owncloud.com/wp-content/themes/owncloud/img/googleplay.png">
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