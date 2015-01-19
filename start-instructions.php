<div class="installers">
<!--  Instructions server install  -->
    <div id="download-server" class="container row">
	<div class="instructions">
	    <div class="overlay-header row">
	      <a href="#" class="close">&times;</a>
	      <h3>Install ownCloud Server</h3>
	    </div>
	    <div class="overlay-body row">
	      <div class="col-md-6">
		<h3><strong>Install ownCloud Server</strong> <span class="label label-success">Version 7</span></h3>
		<p>Latest stable version: <?php echo $VERSIONS_SERVER_FULL_STABLE; ?> (<a href="/changelog"><small>Changelog</small></a>)</br>
		<p>ownCloud can be installed on Windows and Linux operating systems, and is available via packages, sources, or a one file php installer.</p>
		<div class="btn-group">
		  <a class="btn btn-primary btn-lg" href="#instructions-server" role="button" rel="tooltip" title="For server owners"><i class="icon-archive"></i> Archive File</br><small>For server owners</small></a>
		  <a class="btn btn-default btn-lg" href="#instructions-web" role="button" data-toggle="popover" rel="tooltip" title="Best for shared hosts"><i class="icon-code"></i> Web Installer</br><small>For shared hosts</small></a>
		  <a class="btn btn-default btn-lg"  href="#instructions-packages" role="button" data-toggle="popover" rel="tooltip" title="Provides automated updates"><i class="icon-linux"></i> Packages</br><small>For auto updates</small></a>
		</div>
		<p>Looking for <a href="/changelog">older versions</a>?<br />
		Want to use <a target="_blank" href="https://owncloud.com/products/enterprise/">ownCloud for the Enterprise?</a></p>
		</div>
		  <div class="col-md-6">
		    <div class="thumbnail">
		      <img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="ownCloud Server" />
		    </div>
		  </div>
	    </div>
	</div>
    </div>
<!--  Mask instructions server install-->
	   <a href="#" class="mask"></a>

<!--  Instructions desktop clients  -->
	<div id="instructions-web"  class="container row">

	  <div class="instructions">

	  <div class="overlay-header row">
	    <a href="#" class="close">&times;</a>
	    <h3>Install ownCloud</h3>
	  </div>
	  <div class="overlay-body row">
	  <div class="col-md-6">
		<p>The Web Installer is the easiest way for novice users to install ownCloud on their web space. It checks the dependencies, downloads the newest ownCloud from the official server, unpacks it with the right permissions and the right user account. Finally, you will be redirected to the ownCloud installer.</p>
		<ol>
			<li>Right-click <a href="https://download.owncloud.com/download/community/setup-owncloud.php">here</a> and save the file to your computer</li>
			<li>Upload <tt>setup-owncloud.php</tt> to your web space</li>
			<li>Point your web browser to <tt>setup-owncloud.php</tt> on your webspace</li>
			<li>Follow the instructions and configure ownCloud</li>
			<li>Login to your newly created ownCloud instance!</li>
		</ol>
	    </div>
	  <div class="col-md-6">
		<p>You can find further instructions in the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>">ownCloud Admin Manual</a>.</p>
		<p>Note:</br> Once the setup is done, the ownCloud installer will remove itself automatically. We recommend a subscription on our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a> for notifications on updates and security issues. The public ownCloud <a href="<?php echo $OWNCLOUD_GPG; ?>">GPG key</a>.</p>
	    </div>
	    </div>
</div>
	  </div>
<!--  Mask  instructions web installer -->
	  <a href="#" class="mask"></a>

<!--  Instructions mobile apps -->
	  <div id="instructions-packages"  class="container row">

	  <div class="instructions">

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
		<p>You can find further instructions in the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>">ownCloud Admin Manual</a>.</p>
		<p>Note:</br> Once the setup is done, the ownCloud installer will remove itself automatically. We recommend a subscription on our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a> for notifications on updates and security issues. The public ownCloud <a href="<?php echo $OWNCLOUD_GPG; ?>">GPG key</a>.</p>
	    </div>
	    </div>
	    <div class="overlay-footer row">
	    <a class="btn btn-primary" href="<?php echo $DOWNLOAD_SERVER_PACKAGES_STABLE; ?>">Continue</a>
	    </div>
</div>
	  </div>
<!--  Mask instructions packages -->
	  <a href="#" class="mask"></a>
</div>
