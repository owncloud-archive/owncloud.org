<style type="text/css">
      ul.tabs { padding: 5px 0 0 5px; }
      ul.tabs li { float: left; list-style: none; margin-left: 5px; padding-left: 0; }
      .overlay-header, .overlay-footer { padding: 8px; }
</style>
<div class="installers">
	<div id="instructions-server" class="container row PopupGetStarted">
		<div class="instructions">
			<div class="row">
				<a href="#" class="close">&times;</a>
				<ul class="nav nav-tabs" role="tablist">
					<li id="li-tab-archive" class="active"><a href="#tab-archive" title="For server owners" role="tab" data-toggle="tab"><i class="icon-archive"></i> Archive File<br><small>For server owners</small></a></li>
					<li><a href="#tab-web" title="Best for shared hosts" role="tab" data-toggle="tab"><i class="icon-code"></i> Web Installer<br><small>For shared hosts</small></a></li>
					<li id="li-tab-packages"><a href="#tab-packages" title="Provides automated updates" role="tab" data-toggle="tab"><i class="icon-linux"></i> Packages<br><small>For auto updates</small></a></li>
					<li><a href="#tab-cloud" title="Provides automated updates" role="tab" data-toggle="tab"><i class="icon-cloud"></i> Appliances<br><small>For easy deployment</small></a></li>
				</ul>
			</div>
			<br>
			<div class="overlay-header row">
				<p>Latest stable version:  <span class="label label-blue"><?php echo $VERSIONS_SERVER_FULL_STABLE; ?></span> (<a href="/changelog"><small>Changelog</small></a>)</br>
				<p>ownCloud Server supports Linux (like) operating systems, and is available via packages, sources, appliances or a one file php installer.</p>
			</div>
			<div  class="tab-content">
				<div id="tab-archive" role="tabpanel" class="tab-pane active">
					<div class="overlay-body row">
						<div class="col-md-6">
							<p>The .tar <strong>archive</strong> is the classic way of installing ownCloud server. It provides the server and all immediate 3rd party PHP libraries.</p>
							<ol>
								<li>Download <a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR; ?>">.tar.bz2</a> or <a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP; ?>">.zip</a> archive.</li>
								<li>Check package integrity using MD5 (<a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_MD5; ?>">.tar.bz2</a> / <a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_MD5; ?>">.zip</a>) or SHA256 (<a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_SHA256; ?>">.tar.bz2</a> / <a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_SHA256; ?>">.zip</a>)</li>
								<li>Verify the authenticity via PGP (<a target="_blank" href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_PGP; ?>">.tar.bz2 </a>/<a target="_blank" href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_PGP ?>">.zip</a>). The ownCloud GPG key <a target="_blank" href="<?php echo $OWNCLOUD_GPG ; ?>">is here</a>.</li>
								<li>Follow the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>installation">ownCloud Admin Manuals’</a> installation chapter.</br>
															If you already run ownCloud, refer to the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/update.html">update documentation</a> for minor releases and the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/upgrade.html">upgrade manual</a> for moving to major new ownCloud releases</li>
							</ol>
							<p><strong>Security note:</strong></br>To receive information about updates and security issues, we recommend a subscription to our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a>.</p>
						</div>
						<div class="col-md-6">
							<div class="thumbnail">
								<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="ownCloud Server" />
							</div>
								<p><strong>Note:</strong></br> If you run ownCloud on Linux, <a id="packages" href="#tab-packages" title="Provides automated updates" role="tab" data-toggle="tab">using packages</a> is recommended.</p>
								<p>Looking for <a href="/changelog">older versions or major releases</a>?</p>
								<p><small>ownCloud Server does <strong>not</strong> support Microsoft Windows. We recommend using <a id="cloud" href="#tab-cloud" title="Easy deployment in a Virtual Machine" role="tab" data-toggle="tab">the ownCloud Appliance</a> on Windows Server.</small></p>
							</div>
						</div>
					</div>
					<div id="tab-web" role="tabpanel" class="tab-pane">
						<div class="overlay-body row">
							<div class="col-md-6">
								<p>The <strong>Web Installer</strong> is the easiest way to install ownCloud on a web space. It checks the dependencies, downloads ownCloud from the official server, unpacks it with the right permissions and the right user account. Finally, you will be redirected to the ownCloud installer.</p>
								<ol>
									<li>Right-click <a href="https://download.owncloud.com/download/community/setup-owncloud.php">here</a> and save the file to your computer</li>
									<li>Upload <tt>setup-owncloud.php</tt> to your web space</li>
									<li>Point your web browser to <tt>setup-owncloud.php</tt> on your webspace</li>
									<li>Follow the instructions and configure ownCloud</li>
									<li>Login to your newly created ownCloud instance!</li>
								</ol>
								<p>You can find further instructions in the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>">ownCloud Admin Manual</a>.</p>
								<p><strong>Note</strong> that the installer uses the same ownCloud version as available for the built in updater in ownCloud. After a major release it can take up to a month before it becomes available through the web installer and the updater. This is done to spread the deployment of new major releases out over time.</p>
							</div>
							<div class="col-md-6">
								<div class="thumbnail">
									<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="ownCloud Server" />
								</div>
									<p><strong>Security note:</strong></br> Once the setup is done, the ownCloud installer will remove itself automatically. We recommend a subscription to our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a> for notifications on updates and security issues. Find here the public ownCloud <a href="<?php echo $OWNCLOUD_GPG; ?>">GPG key</a>.</p>
									<p><small>ownCloud Server does <strong>not</strong> support Microsoft Windows. We recommend using <a id="cloud" href="#tab-cloud" title="Easy deployment in a Virtual Machine" role="tab" data-toggle="tab">the ownCloud Appliance</a> on Windows Server.</small></p>
								</div>
							</div>
						</div>
						<div id="tab-packages" role="tabpanel" class="tab-pane">
							<div class="overlay-body row">
								<div class="col-md-6">
									<p>ownCloud provides ready-to-deploy <strong>packages</strong> for popular Linux distributions such as Debian, Ubuntu, Fedora, RedHat Enterprise Linux, CentOS and openSUSE.</p>
									<p>Clicking on “Continue” will forward you to the ownCloud download page, which hosts the repositories for all distributions. Further instructions on how to install ownCloud for your distribution are also provided there. Here is the <a href="<?php echo get_template_directory_uri(); ?>/assets/files/obs-release-signing.gpg">key used to sign our packages</a>.</p>
									<p>The repositories allow you to stay on an up-to-date version of ownCloud using your distributions’ update mechanism, with packages maintained by the ownCloud community.</p>
									<p>You can find further instructions in the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>">ownCloud Admin Manual</a>.</br>
									If you already run ownCloud, refer to the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/upgrade.html">upgrade manual</a> for moving to new ownCloud releases.</p>
										<br/><a class="btn btn-primary" href="<?php echo $DOWNLOAD_SERVER_PACKAGES_STABLE; ?>">Continue</a></br></br>
								</div>
								<div class="col-md-6">
									<div class="thumbnail">
										<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="ownCloud Server" />
									</div>
										<p><strong>Security note:</strong></br> We recommend a subscription to our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a> for notifications on updates and security 	issues. Find the <a href="<?php echo $OWNCLOUD_GPG; ?>">public ownCloud GPG key here</a>.</p>
										<p>Looking for repositories of <a href="/changelog">previous major releases</a>?</p>
										<p><small>ownCloud Server does <strong>not</strong> support Microsoft Windows. We recommend using <a id="cloud" href="#tab-cloud" title="Easy deployment in a Virtual Machine" role="tab" data-toggle="tab">the ownCloud Appliance</a> on Windows Server.</small></p>
									</div>
								</div>
							</div>
							<div id="tab-cloud" role="tabpanel" class="tab-pane">
								<div class="overlay-body row">
									<div class="col-md-8">
										<p>ownCloud provides an official appliance as the easiest way to get ownCloud up and running for non-technical users. It is built on Ubuntu Linux and fully set up and configured with a secure connection and the <a href="/connect">ownCloud Proxy app</a>.</p>
										<p>You can install <a href="https://www.virtualbox.org/">virtual box</a>, download our <a href="<?php echo $DOWNLOAD_VM_OVA; ?>">OVA</a> file and load it up. See our <a href="<?php echo $DOCUMENTATION_ADMIN; ?>installation/appliance_installation.html">documentation for more details</a>. Other formats: <a href="<?php echo $DOWNLOAD_VM_QCOW2; ?>">QCOW2</a>, <a href="<?php echo $DOWNLOAD_VM_RAW; ?>">raw</a>, <a href="<?php echo $DOWNLOAD_VM_VHDX; ?>">VHDX</a>, <a href="<?php echo $DOWNLOAD_VM_VMDK; ?>">VMDK</a>, <a href="<?php echo $DOWNLOAD_VM_VMX; ?>">VMX</a></p>
										<p>Several third parties</strong> offer cloud images for ownCloud. These are not maintained by the ownCloud community itself.</p>
										<div class="row">
											<div class="row">
												<div class="col-md-3 vmlist">
													<a target="_blank" style="margin: 0 14px 0 7px;" href="https://susestudio.com/a/TadMax/owncloud-in-a-box"><img width=113 src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/susestudio.png"></img></a>
												</div>
												<div class="col-md-9 vmlist">
													ownCloud-in-a-box offers live USB stick, liveCD and preload ISO images as well a wide variety of VM images.
												</div>
											</div>
											<div class="row">
												<div class="col-md-3 vmlist">
													<a target="_blank" style="margin: 0 14px 0 7px;" href="https://www.collaboraoffice.com/code/"><img width=113 src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/code.png"></img></a>
												</div>
												<div class="col-md-9 vmlist">
													Collabora offers a VM with Collabora Online Development Edition, LibreOffice Online and ownCloud.
												</div>
											</div>
											<div class="row">
												<div class="col-md-3 vmlist">
													<a target="_blank" style="margin: 0 14px 0 7px;" href="https://bitnami.com/stack/owncloud"><img width=113 src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/bitnami.png"></img></a>
												</div>
												<div class="col-md-9 vmlist">
													Offers direct deployment to Google/Amazon/Microsoft clouds, Docker and VM images and installers.
												</div>
											</div>
											<div class="row">
												<div class="col-md-3 vmlist">
													<a target="_blank" style="margin: 0 14px 0 7px;" href="https://jujucharms.com/owncloud/"><img width=113 src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/juju.png"></img></a>
												</div>
												<div class="col-md-9 vmlist">
													This charm installs Apache2 and configures ownCloud with SQLite as a standalone server on an Ubuntu system.
												</div>
											</div>
											<div class="row">
												<div class="col-md-3 vmlist">
													<a target="_blank" style="margin: 0 14px 0 7px;" href="https://www.en0ch.se/owncloud_/pre-configured-owncloud-installaton/"><img width=113 src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/en0ch.png"></img></a>
												</div>
												<div class="col-md-9 vmlist">
													<a href="https://www.en0ch.se/machine-setup/" target="_blank">Pre-configured Ubuntu 14.04 VM with Apache and MySQL</a>. Manages updates with script, can be automated.
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="thumbnail">
											<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="ownCloud Server" />
										</div>
										<p><strong>Security note:</strong></br> These images do not all offer automatic update technology. We recommend a subscription to our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a> for notifications on updates and security issues. Find here the public ownCloud <a href="<?php echo $OWNCLOUD_GPG; ?>">GPG key</a>.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="overlay-footer row">
							<p>We offer <a href="/release-channels">Release Channels</a> to track specific branches like Beta's or older stable branches. Find <a href="/install/#testing-development">development packages for testing here</a>.</p>
						</div>
					</div>
	</div>
<!--         </div> -->
<!--  Mask instructions server -->
<a href="#" class="mask"></a>
</div>

<div class="installers">
	<div id="install-clients" class="container row PopupGetStarted">
		<div class="instructions">
			<div class="row">
				<a href="#" class="close">&times;</a>
				<ul class="nav nav-tabs" role="tablist">
					<li id="li-tab-desktop" class="active"><a href="#tab-desktop" class="btn btn-lg" title="Install Desktop Clients" role="tab" data-toggle="tab"><i class="icon-archive"></i> Install Desktop Clients</a></li>
					<li id="li-tab-mobile"><a href="#tab-mobile" class="btn btn-lg" title="Install Mobile Apps" role="tab" data-toggle="tab"><i class="icon-code"></i> Install Mobile Apps</a></li>
				</ul>
			</div>
			<div  class="tab-content">
				<div id="tab-desktop" role="tabpanel" class="tab-pane active">
					<div class="overlay-body row">
						<div class="col-md-6">
							<p>Latest stable version: <?php echo $VERSIONS_CLIENT_DESKTOP_STABLE_FULL; ?>&nbsp;&nbsp;(<a href="/changelog/desktop"><small>Changelog</small></a>)</p>
							<p>synchronize your ownCloud with your computer using our <strong>desktop clients</strong>. Select one or more directories on your local machine and always have access to your latest files wherever you are.</p>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN; ?>" id="client-download-win" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows<br /><small>XP, Vista, 7, 8 and 10</small></a>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC; ?>" id="client-download-mac" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac<br /><small>OSX 10.7+, 64 bit</small></a>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX; ?>" id="client-download-linux" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux<br /><small>Multiple distributions</small></a>
							<br><br>
							<p>Looking for the <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES; ?>">Sources</a> (<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES_PGP; ?>">PGP signature</a>) or <a href="/changelog/desktop">older versions</a>? For more information on the sync client, check out the <a target="_blank" href="<?php echo $DOCUMENTATION_CLIENT_DESKTOP; ?>/">documentation</a>.</p>
						</div>
						<div class="col-md-6">
							<div class="thumbnail">
								<img style="width: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/desktop/macsettings.png" alt="ownCloud Desktop Client" />
							</div>
						</div>
					</div>
				</div>
				<div id="tab-mobile" role="tabpanel" class="tab-pane">
					<div class="overlay-body row">
						<div class="col-md-6">
							<p><strong>Mobile apps</strong> are available in both the Apple App Store and the Google Play Store, allowing you to access, sync and upload your data on the go.</p>
							<a style="opacity: 0.9" target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS; ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/appstore.png">
							</a>
							<a style="opacity: 0.9" target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID; ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/googleplay.png">
							</a>
							<a style="opacity: 0.9" target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_BLACKBERRY; ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/blackberry.png">
							</a>
							<a style="opacity: 0.9" target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_AMAZON; ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/amazon-store.png">
							</a>
							<br />
							<p>Looking for the <a href="https://github.com/owncloud/android">Android</a> or <a href="https://github.com/owncloud/ios">iOS sources</a>? Looking for <a href="http://f-droid.org/app/com.owncloud.android">F-Droid</a>?</p>
						</div>
						<div class="col-md-6">
							<div class="thumbnail">
								<img style="margin: 0 auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/mobile/androidmodel.png" alt="ownCloud Mobile Client" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--  Mask instructions server -->
	<a href="#" class="mask"></a>
</div>

<div class="installers">
      <div id="testing-development" class="container row PopupGetStarted">
          <div class="instructions">
                <div class="row">
                    <a href="#" class="close">&times;</a>
                    <h3>Help with testing and development</h3>
                </div>
		<div class="row">
		  <div class="col-md-6">
		    <a name="testing"></a>
		    <p>Our server is in constant development and help is always needed in testing the latest bugfixes and features. Please report any issues to the <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>/bugtracker/" target="_blank">tracker</a>.</p>
		    <h4>ownCloud Server <small>Daily build</small></h4>
		    <div class="btn-group">
		      <a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i>  Archive File</a>
		      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_DAILY; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a>
		    </div>
		    <h5>Beta and RC builds</h5>
		    <div class="btn-group">
		      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a>
		    </div>
		    <?php if(!empty($VERSIONS_CLIENT_DESKTOP_TESTING)) { ?>
		    <h4>Desktop Clients <small><?php echo $VERSIONS_CLIENT_DESKTOP_TESTING; ?></small></h4>
 		    <p>Our desktop team provides regular pre-releases. Please report any issues to the <a href="https://github.com/owncloud/mirall/issues" target="_blank">tracker</a>.</p>
		    <p>You can check the authenticity of the sources using this <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP; ?>">PGP signature</a>.</p>
		    <div class="btn-group">
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_WIN; ?>" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_MAC; ?>" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Sources</a>
		    </div>
		    <?php } ?>
		  </div>
		  <div class="col-md-6">
		    <div class="thumbnail">
		      <img style="margin: 0 auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/codebasephp.png" alt="ownCloud Code" />
		    </div>
		    <?php if(!empty($VERSIONS_CLIENT_DESKTOP_TESTING)) { ?>
 		    <p>For those who prefer to install the test version next to the stable ownCloud version, we offer the "Testpilot" edition of the client, which will install in parallel to the original client:</p>
		    <div class="btn-group">
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_WIN; ?>" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_MAC; ?>" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TESTPILOT_LINUX; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Sources</a>
		    </div>
		    <?php } ?>
		  </div>
		</div>
		<div class="overlay-body row">
		  <div class="col-md-12">
		    <p>Find our GPG key at <a target="_blank" href="<?php echo $OWNCLOUD_GPG; ?>"><?php echo $OWNCLOUD_GPG; ?></a></p>
		  </div>
		</div>
	  </div>
      </div>
        <!--  Mask instructions server -->
   <a href="#" class="mask"></a>
</div>
<script>
    $('#packages').click(function () {
        $("#tab-archive").removeClass("active");
        $("#tab-packages").addClass("active");
        $("#li-tab-archive").removeClass("active");
        $("#li-tab-packages").addClass("active");
    });
</script>
