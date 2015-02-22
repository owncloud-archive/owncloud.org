<div class="installers">
<!--  Instructions server  -->
	<div id="instructions-server" class="container row">
	  <div class="instructions">
	  <div class="overlay-header row">
	    <a href="#" class="close">&times;</a>
	    <h3>Install ownCloud</h3>
	  </div>
	  <div class="overlay-body row">
	  <div class="col-md-6">
		<p>The .tar archive is the classic way of installing ownCloud server. It provides the server and all immediate 3rd party PHP libraries.</p>
		<ol>
			<li>Download <a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR; ?>">Unix</a> (<tt>.tar.bz2</tt>) or <a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP; ?>">Windows</a> (<tt>.zip</tt>) archive.</li>
			<li>Check package integrity using MD5 (<a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_MD5; ?>">Unix</a> / <a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_MD5; ?>">Windows</a>) or SHA256 (<a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_SHA256; ?>">Unix</a> / <a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_SHA256; ?>">Windows</a>)</li>
			<li>Verify the authenticity via PGP (<a target="_blank" href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_PGP; ?>">Unix </a>/<a target="_blank" href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_PGP ?>">Windows</a>). The ownCloud GPG key <a target="_blank" href="<?php echo $OWNCLOUD_GPG ; ?>">is here</a>.
			</li><li>Follow the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>#installation">ownCloud Admin Manuals’</a> installation chapter</li>
		</ol>
	  </div>
	  <div class="col-md-6">
		<p>Note:</br>To receive information about updates and security issues, we recommend a subscription on our low-traffic <a href="https://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a>.</p>
	  </div>
	  </div>
</div>
	</div>
<!--  Mask instructions server -->
	   <a href="#" class="mask"></a>

<!--  Instructions web installer  -->
	<div id="instructions-web"  class="container row">

	  <div class="instructions">

	  <div class="overlay-header row">
	    <a href="#" class="close">&times;</a>
	    <h3>Install ownCloud</h3>
	  </div>
	  <div class="overlay-body row">
	  <div class="col-md-6">
		<p>The Web Installer is the easiest way for novice users to install ownCloud Server on their web space. It checks the dependencies, downloads the newest ownCloud from the official server, unpacks it with the right permissions and the right user account. Finally, you will be redirected to the ownCloud installer.</p>
		<ol>
			<li>Right-click <a href="https://download.owncloud.com/download/community/setup-owncloud.php">here</a> and save the file to your computer</li>
			<li>Upload <tt>setup-owncloud.php</tt> to your web space</li>
			<li>Point your web browser to <tt>setup-owncloud.php</tt> on your webspace</li>
			<li>Follow the instructions and configure ownCloud</li>
			<li>Login to your newly created ownCloud Server instance!</li>
		</ol>
	    </div>
	  <div class="col-md-6">
		<p>You can find further instructions in the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>">ownCloud Admin Manual</a>.</p>
		<p>Note:</br> Once the setup is done, the ownCloud Server installer will remove itself automatically. We recommend a subscription on our low-traffic <a href="https://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a> for notifications on updates and security issues. The public ownCloud <a href="<?php echo $OWNCLOUD_GPG; ?>">GPG key</a>.</p>
	    </div>
	    </div>
</div>
	  </div>
<!--  Mask  instructions web installer -->
	  <a href="#" class="mask"></a>

<!--  Instructions packages -->
	  <div id="instructions-packages"  class="container row">

	  <div class="instructions">

	   <div class="overlay-header row">
	     <a href="#" class="close">&times;</a>
	     <h3>Install ownCloud</h3>
	   </div>
	   <div class="overlay-body row">
	   <div class="col-md-6">
		<p>ownCloud provides ready-to-deploy packages for popular Linux distributions such as Debian, Ubuntu, Fedora, RedHat Enterprise Linux, CentOS and openSUSE.</p>
		<p>Clicking on “Continue” will forward you to the ownCloud community page at the <a target="_blank" href="https://build.opensuse.org/">openSUSE Build Service</a>, which hosts the repositories for all distributions. Further instructions on how to install ownCloud for your distribution are also provided there. For setup instructions, please follow the ownCloud Admin manual.</p>
		<p>The repositories allow you to stay on an up-to-date version of ownCloud Server using your distributions’ update mechanism, with packages maintained by the ownCloud community.</p>
	    </div>
	    <div class="col-md-6">
		<p>You can find further instructions in the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>">ownCloud Admin Manual</a>.</p>
		<p>Note:</br> Once the setup is done, the ownCloud installer will remove itself automatically. We recommend a subscription on our low-traffic <a href="https://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a> for notifications on updates and security issues. The public ownCloud <a href="<?php echo $OWNCLOUD_GPG; ?>">GPG key</a>.</p>
	    <p>The key used to sign our OBS packages can be found here: <a href="<?php echo get_template_directory_uri(); ?>/assets/files/obs-release-signing.gpg">OBS Release Signing key</a></p>
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
