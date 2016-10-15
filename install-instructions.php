<!-- Choose the ownCloud Version – Server or Enterprise -->
<div class="installers">
      <div id="instructions-server" class="container row PopupGetStarted branch">
          <div class="instructions">
                <div class="overlay-body row">
										<a href="#" class="close">&times;</a>
										<div class="col-xs-offset-1 col-xs-10">
											<h2>Please choose your ownCloud download type</h2>
											<div class="row row-eq-height">
												<div class="col-sm-6 community">
													<div class="button-area">
														<p><strong>Get the ownCloud Server</strong><br /><span>Setup an ownCloud instance yourself with the free ownCloud Server</span></p>
														<a href="#edition" class="button blue primary">Download ownCloud Server</a>
													</div>
												</div>
												<div class="col-sm-6 enterprise">
													<div class="button-area">
														<p><strong>Try ownCloud Enterprise Edition free for 30 days</strong><br /><span>Get started in no time providing a complete ownCloud environment, fully setup and ready to go!</span></p>
														<a href="https://owncloud.com/download/?ref=orgB" target="_blank" class="button orange primary">Download Enterprise Edition</a>
													</div>
												</div>
											</div>
										</div>
								</div>
					</div>
	  	</div>

   <a href="#" class="mask"></a><!--  Mask instructions server -->
</div>

<div class="installers">

	<div id="edition" class="container row PopupGetStarted">
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

			<div  class="tab-content">
				<div id="tab-archive" role="tabpanel" class="tab-pane active">
					<div class="overlay-body row row-eq-height">
            <div class="col-sm-7 description">
              <h1>ownCloud Server Archive File</h1>
              <hr>
              <div class="row">
                <div class="col-xs-5 thumbnail">
                  <img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="ownCloud Server" />
                </div>
                <div class="col-xs-7">
                  <p>ownCloud Server supports Linux (like) operating systems. The archive is the classic way of installing ownCloud server. It provides the server and all immediate 3rd party PHP libraries.</p>
                </div>
              </div>
              <hr>
              <p class="installatlation-instructions"><strong>Installation Instructions:</strong></p>
              <ol class="install-steps">
                <li>Download <a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR; ?>">.tar.bz2</a> or <a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP; ?>">.zip</a> archive.</li>
                <li>Check package integrity using MD5 (.tar.bz2 / .zip) or SHA256 (.tar.bz2 / .zip)</li>
                <li>Verify the authenticity via PGP (.tar.bz2 /.zip). The ownCloud GPG key is <a target="_blank" href="<?php echo $OWNCLOUD_GPG ; ?>">here</a>.</li>
                <li>Follow the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>installation">ownCloud Admin Manuals’</a> installation chapter. If you already run ownCloud, refer to the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/update.html">update documentation</a> for minor releases and the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/upgrade.html">upgrade manual</a> for moving to major new ownCloud releases.</li>
              </ol>
            </div>
            <div class="col-sm-5 button-area">
              <h3>Latest stable version: <strong><?php echo $VERSIONS_SERVER_FULL_STABLE; ?></strong></h3>
							<h4><strong><a class="changelog" href="/changelog">See what's new (Changelog)</a></strong></h4>
							<a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP; ?>" class="button blue primary">Download ownCloud Server</a>
							<p class="text-center archive-types">.zip (38,8 MB) | <a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR; ?>">Download tar.bz2 (27,7 MB)</a></p>
							<p class="mt30">Want to use ownCloud for your Company?</p>
							<a href="https://owncloud.com/download/?ref=orgB" target="_blank" class="button orange primary mb30">Test Enterprise Edition free for 30 days</a>
							<hr />
							<div class="download-notes">
								<p>Looking for <a href="/changelog">older versions or major releases</a>?</p>
								<p>ownCloud Server does <strong>not</strong> support Microsoft Windows. We recommend using the <a id="cloud" href="#tab-cloud" title="Easy deployment in a Virtual Machine" role="tab" data-toggle="tab">the ownCloud Appliance</a> on Windows Server.</p>
								<p><strong>Security Note:</strong><br />To receive information about updates and security issues, we recommend a subscription to our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a>.</p>
								<p><strong>Channels:</strong><br />We offer <a href="/release-channels">Release Channels</a> to track specific branches like Beta's or older stable branches. Find <a href="/install/#testing-development">development packages</a> for testing here.</p>
							</div>
            </div>
					</div>
				</div>

				<div id="tab-web" role="tabpanel" class="tab-pane">
					<div class="overlay-body row row-eq-height">
						<div class="col-sm-7 description">
							<h1>ownCloud Web Installer</h1>
							<hr>
							<div class="row">
								<div class="col-xs-5 thumbnail">
									<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="ownCloud Server" />
								</div>
								<div class="col-xs-7">
									<p>ownCloud Server supports Linux (like) operating systems. The Web Installer is the easiest way to install ownCloud on a web space. It checks the dependencies, downloads ownCloud from the official server, unpacks it with the right permissions and the right user account. Finally, you will be redirected to the ownCloud installer.</p>
								</div>
							</div>
							<hr>
							<p class="installatlation-instructions"><strong>Installation Instructions:</strong></p>
							<ol class="install-steps">
								<li><a href="https://download.owncloud.com/download/community/setup-owncloud.php">Download</a> and save the file to your computer</li>
								<li>Upload <tt>setup-owncloud.php</tt> to your web space</li>
								<li>Point your web browser to <tt>setup-owncloud.php</tt> on your webspace</li>
								<li>Follow the instructions and configure ownCloud</li>
								<li>Login to your newly created ownCloud instance!</li>
							</ol>
							<hr />
							<p>You can find further instructions in the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>installation">ownCloud Admin Manual</a>.</p>
							<p><strong>Note:</strong> The installer uses the same ownCloud version as available for the built in updater in ownCloud. After a major release it can take up to a month before it becomes available through the web installer and the updater. This is done to spread the deployment of new major releases out over time.</p>
						</div>
						<div class="col-sm-5 button-area">
							<h3>Latest stable version: <strong><?php echo $VERSIONS_SERVER_FULL_STABLE; ?></strong></h3>
							<h4><strong><a class="changelog" href="/changelog">See what's new (Changelog)</a></strong></h4>
							<a href="https://download.owncloud.com/download/community/setup-owncloud.php" class="button blue primary">Download ownCloud Web Installer</a>
							<p class="mt30">Want to use ownCloud for your Company?</p>
							<a href="https://owncloud.com/download/?ref=orgB" target="_blank" class="button orange primary mb30">Test Enterprise Edition free for 30 days</a>
							<hr />
							<div class="download-notes">
								<p>ownCloud Server does <strong>not</strong> support Microsoft Windows. We recommend using the <a id="cloud" href="#tab-cloud" title="Easy deployment in a Virtual Machine" role="tab" data-toggle="tab">the ownCloud Appliance</a> on Windows Server.</p>
								<p><strong>Security Note:</strong><br />Once the setup is done, the ownCloud installer will remove itself automatically. We recommend a subscription to our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a> for notifications on updates and security issues. Find here the public ownCloud <a href="<?php echo $OWNCLOUD_GPG; ?>">GPG key</a>.</p>
								<p><strong>Channels:</strong><br />We offer <a href="/release-channels">Release Channels</a> to track specific branches like Beta's or older stable branches. Find <a href="/install/#testing-development">development packages</a> for testing here.</p>
							</div>
						</div>
					</div>
				</div>

					<div id="tab-packages" role="tabpanel" class="tab-pane">
						<div class="overlay-body row row-eq-height">
							<div class="col-sm-7 description">
								<h1>ownCloud Packages</h1>
								<hr>
								<div class="row">
									<div class="col-xs-5 thumbnail">
										<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="ownCloud Server" />
									</div>
									<div class="col-xs-7">
										<p>ownCloud provides ready-to-deploy packages for popular Linux distributions such as Debian, Ubuntu, Fedora, RedHat Enterprise Linux, CentOS and openSUSE. ownCloud Server supports Linux (like) operating systems.</p>
									</div>
								</div>
								<hr>
								<p class="installatlation-instructions"><strong>Installation Instructions:</strong></p>
								<p>Clicking on “Continue” will forward you to the ownCloud download page, which hosts the repositories for all distributions. Further instructions on how to install ownCloud for your distribution are also provided there. Here are the <a href="<?php echo get_template_directory_uri(); ?>/assets/files/opensuse_obs-release-signing.gpg">ownCloud packages <= 8.1</a> and <a href="<?php echo get_template_directory_uri(); ?>/assets/files/owncloud_org_obs-release-signing.gpg">ownCloud packages >= 8.2</a> used to sign our packages.</p>
								<p>The repositories allow you to stay on an up-to-date version of ownCloud using your distributions’ update mechanism, with packages maintained by the ownCloud community.</p>
								<p>You can find further instructions in the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>installation">ownCloud Admin Manual</a>. If you already run ownCloud, refer to the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>maintenance/upgrade.html">upgrade manual</a for moving to new ownCloud releases.</p>
							</div>
							<div class="col-sm-5 button-area">
								<h3>Latest stable version: <strong><?php echo $VERSIONS_SERVER_FULL_STABLE; ?></strong></h3>
								<h4><strong><a class="changelog" href="/changelog">See what's new (Changelog)</a></strong></h4>
								<a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_STABLE; ?>" class="button blue primary">Continue to the Packages</a>
								<p class="mt30">Want to use ownCloud for your Company?</p>
								<a href="https://owncloud.com/download/?ref=orgB" target="_blank" class="button orange primary mb30">Test Enterprise Edition free for 30 days</a>
								<hr />
								<div class="download-notes">
									<p>Looking for repositories of <a href="/changelog">previous major releases</a>?</p>
									<p>ownCloud Server does <strong>not</strong> support Microsoft Windows. We recommend using the <a id="cloud" href="#tab-cloud" title="Easy deployment in a Virtual Machine" role="tab" data-toggle="tab">the ownCloud Appliance</a> on Windows Server.</p>
									<p><strong>Security Note:</strong><br />To receive information about updates and security issues, we recommend a subscription to our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a>.</p>
									<p><strong>Channels:</strong><br />We offer <a href="/release-channels">Release Channels</a> to track specific branches like Beta's or older stable branches. Find <a href="/install/#testing-development">development packages</a> for testing here.</p>
								</div>
							</div>
						</div>
						</div>

						<div id="tab-cloud" role="tabpanel" class="tab-pane">
							<div class="overlay-body row row-eq-height">
								<div class="col-sm-7 description">
									<h1>ownCloud Appliances</h1>
									<hr>
									<div class="row">
										<div class="col-xs-5 thumbnail">
											<img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/serverwebui.png" alt="ownCloud Server" />
										</div>
										<div class="col-xs-7">
											<p>ownCloud provides an official appliance as the easiest way to get ownCloud up and running for non-technical users. It is built on Ubuntu Linux and fully set up and configured with a secure connection and the ownCloud Proxy app. You can install virtual box, download our OVA file and load it up. See our documentation for more details. ownCloud Server supports Linux (like) operating systems.</p>
										</div>
									</div>
									<hr>
									<p class="installatlation-instructions"><strong>Third party ownCloud VM images</strong><br />These are not maintained by the ownCloud community itself.</p>

									<!-- suse -->
									<div class="row vmlist">
										<div class="col-xs-3">
											<a href="https://susestudio.com/a/TadMax/owncloud-in-a-box" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/susestudio.png"></img></a>
										</div>
										<div class="col-xs-9">
											<p>ownCloud-in-a-box offers live USB stick, liveCD and preload ISO images as well a wide variety of VM images.</p>
										</div>
									</div>

									<!-- collabora -->
									<div class="row vmlist">
										<div class="col-xs-3">
											<a href="https://www.collaboraoffice.com/code/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/code.png"></img></a>
										</div>
										<div class="col-xs-9">
											<p>Collabora offers a VM with Collabora Online Development Edition, LibreOffice Online and ownCloud.</p>
										</div>
									</div>

									<!-- bitnami -->
									<div class="row vmlist">
										<div class="col-xs-3">
											<a href="https://bitnami.com/stack/owncloud" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/bitnami.png"></img></a>
										</div>
										<div class="col-xs-9">
											<p>Offers direct deployment to Google/Amazon/Microsoft clouds, Docker and VM images and installers.</p>
										</div>
									</div>

									<!-- juju -->
									<div class="row vmlist">
										<div class="col-xs-3">
											<a href="https://jujucharms.com/owncloud/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/juju.png"></img></a>
										</div>
										<div class="col-xs-9">
											<p>This charm installs Apache2 and configures ownCloud with SQLite as a standalone server on an Ubuntu system.</p>
										</div>
									</div>

									<!-- en0ch -->
									<div class="row vmlist">
										<div class="col-xs-3">
											<a href="https://www.techandme.se/owncloud_/pre-configured-owncloud-installaton/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/en0ch.png"></img></a>
										</div>
										<div class="col-xs-9">
											<p><a href="https://www.techandme.se/machine-setup-owncloud/" target="_blank">Pre-configured Ubuntu 16.04 VM with PHP 7, Apache and MySQL</a>. Manages updates with script, can be automated.</p>
										</div>
									</div>

								</div>
								<div class="col-sm-5 button-area">
									<h3>Latest stable version: <strong><?php echo $VERSIONS_SERVER_FULL_STABLE; ?></strong></h3>
									<h4><strong><a class="changelog mb0" href="/changelog">See what's new (Changelog)</a></strong></h4>
									<h5 class="mb15">Grab the official ownCloud virtual machine image in one of these formats:</h5>
									<a href="<?php echo $DOWNLOAD_VM_OVA; ?>" class="button blue secondary">OVA</a>
									<a href="<?php echo $DOWNLOAD_VM_QCOW2; ?>" class="button blue secondary">QCOW2</a>
									<a href="<?php echo $DOWNLOAD_VM_RAW; ?>" class="button blue secondary">raw</a>
									<a href="<?php echo $DOWNLOAD_VM_VHDX; ?>" class="button blue secondary">VHDX</a>
									<a href="<?php echo $DOWNLOAD_VM_VMDK; ?>" class="button blue secondary">VMDK</a>
									<a href="<?php echo $DOWNLOAD_VM_VMX; ?>" class="button blue secondary">VMX</a>
									<div class="clear"></div>
									<p class="mt15">Want to use ownCloud for your Company?</p>
									<a href="https://owncloud.com/download/?ref=orgB" target="_blank" class="button orange primary mb30">Test Enterprise Edition free for 30 days</a>
									<hr />
									<div class="download-notes">
 										<p><strong>NOTE</strong>: The appliances have been updated to the <a href="https://owncloud.org/blog/new-in-owncloud-9-1/">freshly released ownCloud 9.1</a>. </p>
										<p><strong>NOTE</strong>: The appliances have been updated to the <a href="https://owncloud.org/blog/owncloud-server-9-0-released/">freshly released ownCloud 9.0</a> but have only gone through absolutely minimal testing. It is recommended to not use these for important data yet - giving them a trial run however and giving us feedback is greatly appreciated!</p>
										<p><strong>Security Note:</strong><br />These images do not all offer automatic update technology. We recommend a subscription to our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a> for notifications on updates and security issues. Find here the public ownCloud <a href="<?php echo $OWNCLOUD_GPG; ?>">GPG key</a>.</p>
										<p><strong>Channels:</strong><br />We offer <a href="/release-channels">Release Channels</a> to track specific branches like Beta's or older stable branches. Find <a href="/install/#testing-development">development packages</a> for testing here.</p>
									</div>
								</div>
							</div>
						</div>
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
					<li id="li-tab-
                  " class="active"><a href="#tab-desktop" class="btn btn-lg" title="Install Desktop Clients" role="tab" data-toggle="tab"><i class="icon-archive"></i> Install Desktop Clients</a></li>
					<li id="li-tab-mobile"><a href="#tab-mobile" class="btn btn-lg" title="Install Mobile Apps" role="tab" data-toggle="tab"><i class="icon-code"></i> Install Mobile Apps</a></li>
				</ul>
			</div>
			<div  class="tab-content">
				<div id="tab-desktop" role="tabpanel" class="tab-pane active">
					<div class="overlay-body row">
						<div class="col-md-6">
							<p>Latest stable version: <?php echo $VERSIONS_CLIENT_DESKTOP_STABLE_FULL; ?>&nbsp;&nbsp;(<a href="/changelog/desktop"><small>Changelog</small></a>)</p>
							<p>synchronize your ownCloud with your computer using our <strong>desktop clients</strong>. Select one or more directories on your local machine and always have access to your latest files wherever you are.</p>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN; ?>" id="client-download-win" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows<br /><small>7, 8.x and 10</small></a>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC; ?>" id="client-download-mac" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac<br /><small>OSX 10.7+, 64 bit</small></a>
							<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX; ?>" id="client-download-linux" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux<br /><small>Multiple distributions</small></a>
							<br><br>
							<p>Looking for the <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES; ?>">Sources</a> (<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES_PGP; ?>">PGP signature</a>) or <a href="/changelog/desktop">older versions</a>? For more information on the sync client, check out the <a target="_blank" href="<?php echo $DOCUMENTATION_CLIENT_DESKTOP; ?>/">documentation</a>.</p>
							<p>Here is the <a href="<?php echo get_template_directory_uri(); ?>/assets/files/opensuse_obs-release-signing.gpg">key used to sign our packages</a>.</p>
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
		    <h2>ownCloud Server <small>Daily build</small></h2>
		    <div class="btn-group">
		      <a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i>  Archive File</a>
		      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_DAILY; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a>
		    </div>
		    <h5>Beta and RC builds</h5>
		    <?php if(!empty($SERVER_TESTING_VERSION)) { ?>
			    <p>Latest testing version: <span class="label label-blue"><?php echo $SERVER_TESTING_VERSION; ?></span></p>
		    <?php } ?>
		    <div class="btn-group">

		    <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a>
		    <?php if(!empty($DOWNLOAD_SERVER_ZIP_TESTING)) { ?>
			      <a href="<?php echo $DOWNLOAD_SERVER_ZIP_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> zip</a>
		    <?php } ?>
		    <?php if(!empty($DOWNLOAD_SERVER_TAR_TESTING)) { ?>
			      <a href="<?php echo $DOWNLOAD_SERVER_TAR_TESTING; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> tar.bz2</a>
		    <?php } ?>
		    </div>
		    <?php if(!empty($VERSIONS_CLIENT_DESKTOP_TESTING)) { ?>
		    <h2>Desktop Clients <small><?php echo $VERSIONS_CLIENT_DESKTOP_TESTING; ?></small></h2>
 		    <p>Our desktop team provides regular pre-releases. Please report any issues to the <a href="https://github.com/owncloud/client/issues" target="_blank">tracker</a>.</p>
		    <p>You can check the authenticity of the sources using this <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP; ?>">PGP signature</a>.</p>
		    <div class="btn-group">
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_WIN; ?>" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_MAC; ?>" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Sources</a>
		    </div>
		    <?php } else {?>
			    <h2>Desktop Clients <small><?php echo $VERSIONS_CLIENT_DESKTOP_TESTING; ?></small></h2>
	 		    <p>Our desktop team provides regular nightly builds. Please report any issues to the <a href="https://github.com/owncloud/client/issues" target="_blank">tracker</a>.</p>
			    <div class="btn-group">
			      <a href="http://download.owncloud.com/desktop/daily/" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows</a>
			      <a href="http://download.owncloud.com/desktop/daily/" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac</a>
			      <a href="https://software.opensuse.org/download.html?project=isv%3AownCloud%3Acommunity%3Anightly&package=owncloud-client" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux</a>
			      <a href="https://github.com/owncloud/client" class="btn btn-lg btn-default"><i class="icon-archive"></i> Sources</a>
			    </div>
			 <?php } ?>
		  </div>
		  <div class="col-md-6">
		    <div class="thumbnail">
		      <img style="margin: 0 auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/codebasephp.png" alt="ownCloud Code" />
		    </div>
		    <?php if(!empty($VERSIONS_CLIENT_DESKTOP_TESTING)) { ?>
		    <br /><br />
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

<!-- Newsletter Subscription -->
<div id="subscribe">
  <h3 class="text-center">ownCloud Newsletter</h3>
	<a href="#" class="close">&times;</a>
  <div class="subscribe content">
    <p>Sign up to get interesting ownCloud Community news and updates delivered directly to your inbox.</p>
    <a href="http://visitor.r20.constantcontact.com/d.jsp?llr=ixens9uab&p=oi&m=1121878184680&sit=mf4qye7jb&f=cc4cd13f-acdf-45d3-b132-75252542c37d" class="button blue" target="blank">Sign Up</a>
  </div>
</div>
<!-- /Newsletter Subscription -->

<script>
    $('#packages').click(function () {
        $("#tab-archive").removeClass("active");
        $("#tab-packages").addClass("active");
        $("#li-tab-archive").removeClass("active");
        $("#li-tab-packages").addClass("active");
    });


		$.fn.shownewsletter = function() {
			$('#subscribe').delay(3000).slideDown();
			$('#subscribe .close').click(function () {
				$(this).parent().slideUp('fast');
				return false;
			});
		};

		$('#server').click(function () {
			$.fn.shownewsletter();
		});

		if(window.location.hash) {
		 var hash = window.location.hash.substring(1);
		 if (hash = 'instructions-server') {
				$.fn.shownewsletter();
		 }
		}

</script>
<script type="text/javascript">
	$(function() {
		if (navigator.appVersion.indexOf("Win")!=-1) {
			var e = document.getElementById("client-download-win");
			e.className += ' btn-primary';
		} else if(navigator.appVersion.indexOf("Mac")!=-1) {
			var e = document.getElementById("client-download-mac");
			e.className += " btn-primary";
		} else if (navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1) {
			var e = document.getElementById("client-download-linux");
			e.className += ' btn-primary';
		}
	});
</script>
