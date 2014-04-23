<div class="row installers">

<!--  Instructions server  -->
	<div id="instructions-server">
	  <div class="overlay-header row">
	    <a href="#" class="close">&times;</a>
	    <h3>Install ownCloud</h3>
	  </div>
	  <div class="overlay-body row">
	  <div class="col-md-6">
		<p>The .tar archive is the classic way of installing ownCloud server. It provides the server and all immediate 3rd party PHP libraries.</p>
		<ol>
			<li>Download <a href="http://download.owncloud.org/community/owncloud-6.0.2.tar.bz2">Unix</a> (<tt>.tar.bz2</tt>) or <a href="http://download.owncloud.org/community/owncloud-6.0.2.zip">Windows</a> (<tt>.zip</tt>) archive.</li>
			<li>Check package integrity using MD5 (<a href="http://download.owncloud.org/community/owncloud-6.0.2.tar.bz2.md5">Unix</a> / <a href="http://download.owncloud.org/community/owncloud-6.0.2.zip.md5">Windows</a>) or SHA256 (<a href="http://download.owncloud.org/community/owncloud-6.0.2.tar.bz2.sha256">Unix</a> / <a href="http://download.owncloud.org/community/owncloud-6.0.2.zip.sha256">Windows</a>)</li>
			<li>Verify the authenticity via PGP (<a href="http://download.owncloud.org/community/owncloud-6.0.2.tar.bz2.asc">Unix </a>/<a href="http://download.owncloud.org/community/owncloud-6.0.2.zip.asc">Windows</a>). The ownCloud PGP key <a href="https://owncloud.org/owncloud.asc">is here</a>.
			</li><li>Follow the <a href="http://doc.owncloud.org/server/6.0/admin_manual/#installation">ownCloud Admin Manuals’</a> installation chapter</li>
		</ol>
	  </div>
	  <div class="col-md-6">
		<p>Note:</br>To receive information about updates and security issues, we recommend a subscription on our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a>.</p>
	  </div>
	  </div>
	</div>
<!--  Mask instructions server -->
	   <a href="#" class="mask close"></a>

<!--  Instructions web installer  -->
	<div id="instructions-web">
	  <div class="overlay-header row">
	    <a href="#" class="close">&times;</a>
	    <h3>Install ownCloud</h3>
	  </div>
	  <div class="overlay-body row">
	  <div class="col-md-6">
		<p>The Web Installer is the easiest way for novice users to install ownCloud on their web space. It checks the dependencies, download the newest ownCloud from the official server, unpacks it with the right permissions and the right user account. Finally, you will be redirected to the ownCloud installer.</p>
		<ol>
			<li>Right-click <a href="https://download.owncloud.com/download/community/setup-owncloud.php">here</a> and save the file to your computer</li>
			<li>Upload <tt>setup-owncloud.php</tt> to your web space</li>
			<li>Point your web browser to <tt>setup-owncloud.php</tt> on your webspace</li>
			<li>Follow the instructions and configure ownCloud</li>
			<li>Login to your newly created ownCloud instance!</li>
		</ol>
	    </div>
	  <div class="col-md-6">
		<p>You can find further instructions in the <a href="http://doc.owncloud.org/server/6.0/admin_manual/">ownCloud Admin Manual</a>.</p>
		<p>Note:</br> Once the setup is done, the ownCloud installer will remove itself automatically. We recommend a subscription on our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a> for notifications on updates and security issues. The public ownCloud <a href="https://owncloud.org/owncloud.asc">GPG key</a>.</p>
	    </div>
	    </div>
	  </div>
<!--  Mask  instructions web installer -->
	  <a href="#" class="mask close"></a>

<!--  Instructions packages -->
	  <div id="instructions-packages">
	   <div class="overlay-header row">
	     <a href="#" class="close">&times;</a>
	     <h3>Install ownCloud</h3>
	   </div>
	   <div class="overlay-body row">
	   <div class="col-md-6">
		<p>ownCloud provides ready-to-deploy packages for popular Linux distributions such as Debian, Ubuntu, Fedora, RedHat Enterprise Linux, CentOS and openSUSE.</p>
		<p>Clicking on “Continue” will forward you to the ownCloud community page at the <a target="_blank" href="http://build.opensuse.org/">openSUSE Build Service</a>, which hosts the repositories for all distributions. Further instructions on how to install ownCloud for your distribution are also provided there. For setup instructions, please follow the ownCloud Admin manual.</p>
		<p>The repositories allow you to stay on an up-to-date version of ownCloud using your distributions’ update mechanism, with packages maintained by the ownCloud community.</p>
	    </div>
	    <div class="col-md-6">
		<p>You can find further instructions in the <a href="http://doc.owncloud.org/server/6.0/admin_manual/">ownCloud Admin Manual</a>.</p>
		<p>Note:</br> Once the setup is done, the ownCloud installer will remove itself automatically. We recommend a subscription on our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a> for notifications on updates and security issues. The public ownCloud <a href="https://owncloud.org/owncloud.asc">GPG key</a>.</p>
	    </div>
	    </div>
	    <div class="overlay-footer row">
	    <a class="btn btn-primary" href="http://software.opensuse.org/download/package?project=isv:ownCloud:community&package=owncloud">Continue</a>
	    </div>
	  </div>
<!--  Mask instructions packages -->
	  <a href="#" class="mask close"></a>

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