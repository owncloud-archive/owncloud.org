<style type="text/css">
      ul.tabs { padding: 5px 0 0 5px; }
      ul.tabs li { float: left; list-style: none; margin-left: 5px; padding-left: 0; }
      .overlay-header, .overlay-footer { padding: 8px; }
</style>
<div class="installers">
	<div id="instructions-server" class="container row">
            <div class="instructions">
                  <div class="row">
                      <a href="#" class="close">&times;</a>
                      <ul class="nav nav-tabs" role="tablist">
                          <li><a href="#tab-archive" class="btn btn-primary btn-lg" title="For server owners" role="tab" data-toggle="tab"><i class="icon-archive"></i> Archive File<br><small>For server owners</small></a></li>
                          <li><a href="#tab-web" class="btn btn-default btn-lg" title="Best for shared hosts" role="tab" data-toggle="tab"><i class="icon-code"></i> Web Installer<br><small>For shared hosts</small></a></li>
                          <li><a href="#tab-packages" class="btn btn-default btn-lg" title="Provides automated updates" role="tab" data-toggle="tab"><i class="icon-linux"></i> Packages<br><small>For auto updates</small></a></li>
                      </ul>
                  </div>
                  <br>
                  <div class="overlay-header row">
                    <p>Latest stable version:  <span class="label label-success"><?php echo $VERSIONS_SERVER_FULL_STABLE; ?></span> (<a href="/changelog"><small>Changelog</small></a>)</br>
                    <p>ownCloud can be installed on Windows and Linux operating systems, and is available via packages, sources, or a one file php installer.</p>
                  </div>
                  <div  class="tab-content">
                      <div id="tab-archive" role="tabpanel" class="tab-pane active">
                            <div class="overlay-body row">
                                <div class="col-md-6">
                                      <p>The .tar <strong>archive</strong> is the classic way of installing ownCloud server. It provides the server and all immediate 3rd party PHP libraries.</p>
                                      <ol>
                                              <li>Download <a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR; ?>">Unix</a> (<tt>.tar.bz2</tt>) or <a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP; ?>">Windows</a> (<tt>.zip</tt>) archive.</li>
                                              <li>Check package integrity using MD5 (<a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_MD5; ?>">Unix</a> / <a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_MD5; ?>">Windows</a>) or SHA256 (<a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_SHA256; ?>">Unix</a> / <a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_SHA256; ?>">Windows</a>)</li>
                                              <li>Verify the authenticity via PGP (<a target="_blank" href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR_PGP; ?>">Unix </a>/<a target="_blank" href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP_PGP ?>">Windows</a>). The ownCloud GPG key <a target="_blank" href="<?php echo $OWNCLOUD_GPG ; ?>">is here</a>.
                                              </li><li>Follow the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>#installation">ownCloud Admin Manuals’</a> installation chapter</li>
                                      </ol>
                                </div>
                                <div class="col-md-6">
                                      <p>Note:</br>To receive information about updates and security issues, we recommend a subscription on our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a>.</p>
                                </div>
                            </div>
                      </div>
                      <div id="tab-web" role="tabpanel" class="tab-pane">
                            <div class="overlay-body row">
                              <div class="col-md-6">
                                  <p>The <strong>Web Installer</strong> is the easiest way for novice users to install ownCloud on their web space. It checks the dependencies, downloads the newest ownCloud from the official server, unpacks it with the right permissions and the right user account. Finally, you will be redirected to the ownCloud installer.</p>
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
                      <div id="tab-packages" role="tabpanel" class="tab-pane">
                    <div class="overlay-body row">
                        <div class="col-md-6">
                            <p>ownCloud provides ready-to-deploy <strong>packages</strong> for popular Linux distributions such as Debian, Ubuntu, Fedora, RedHat Enterprise Linux, CentOS and openSUSE.</p>
                            <p>Clicking on “Continue” will forward you to the ownCloud community page at the <a target="_blank" href="http://build.opensuse.org/">openSUSE Build Service</a>, which hosts the repositories for all distributions. Further instructions on how to install ownCloud for your distribution are also provided there. For setup instructions, please follow the ownCloud Admin manual.</p>
                            <p>The repositories allow you to stay on an up-to-date version of ownCloud using your distributions’ update mechanism, with packages maintained by the ownCloud community.</p>
                        </div>
                        <div class="col-md-6">
                            <p>You can find further instructions in the <a href="<?php echo $DOCUMENTATION_ADMIN; ?>">ownCloud Admin Manual</a>.</p>
                            <p>Note:</br> Once the setup is done, the ownCloud installer will remove itself automatically. We recommend a subscription on our low-traffic <a href="http://mailman.owncloud.org/mailman/listinfo/announcements">announcement mailing list</a> for notifications on updates and security issues. The public ownCloud <a href="<?php echo $OWNCLOUD_GPG; ?>">GPG key</a>.</p>
                        </div>
                        <a class="btn btn-primary" href="<?php echo $DOWNLOAD_SERVER_PACKAGES_STABLE; ?>">Continue</a>
                      </div>
                  </div>
                  </div>
                  <div class="overlay-footer row">
                <p>Looking for <a href="/changelog">older versions</a>?<br />
                Want to use <a target="_blank" href="https://owncloud.com/products/enterprise/">ownCloud for the Enterprise?</a></p>
              </div>
          </div>
        </div>
        <!--  Mask instructions server -->
        <a href="#" class="mask"></a>
</div>
<div class="installers">
      <div id="install-clients" class="container row">
          <div class="instructions">
                <div class="row">
                    <a href="#" class="close">&times;</a>
                    <ul class="nav nav-tabs" role="tablist">
                        <li><a href="#tab-desktop" class="btn btn-primary btn-lg" title="Install Desktop Clients" role="tab" data-toggle="tab"><i class="icon-archive"></i> Install Desktop Clients</a></li>
                        <li><a href="#tab-mobile" class="btn btn-default btn-lg" title="Install Mobile Apps" role="tab" data-toggle="tab"><i class="icon-code"></i> Install Mobile Apps</a></li>
                    </ul>
                </div>
                <div  class="tab-content">
                      <div id="tab-desktop" role="tabpanel" class="tab-pane">
                            <div class="overlay-body row">
                              <div class="col-md-10">
                                  <p>Latest stable version: <?php echo $VERSIONS_CLIENT_DESKTOP_STABLE_FULL; ?>&nbsp;&nbsp;(<a href="/changelog/desktop"><small>Changelog</small></a>)</p>
                                  <p>Synchronise your ownCloud with your computer using our <strong>desktop clients</strong>. Select one or more directories on your local machine and always have access to your latest files wherever you are.</p>
                                  <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN; ?>" id="client-download-win" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows<br /><small>XP, Vista, 7 and 8</small></a>
                                  <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC; ?>" id="client-download-mac" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac<br /><small>OSX 10.7+, 64 bit</small></a>
                                  <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX; ?>" id="client-download-linux" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux<br /><small>Multiple distributions</small></a>
                                  <br><br>
                                  <p>Looking for the <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES; ?>">Sources</a> (<a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_SOURCES_PGP; ?>">PGP signature</a>)? For more information on the sync client, check out the <a target="_blank" href="<?php echo $DOCUMENTATION_CLIENT_DESKTOP; ?>/">documentation</a>.</p>
                              </div>
                          </div>
                      </div>
                      <div id="tab-mobile" role="tabpanel" class="tab-pane">
                  <div class="overlay-body row">
                        <div class="col-md-10">
                            <p><strong>Mobile apps</strong> are available in both the Apple App Store and the Google Play Store, allowing you to access, sync and upload your data on the go.</p>
                            <a style="opacity: 0.9" target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS; ?>">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/appstore.png">
                            </a>
                            <a style="opacity: 0.9" target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID; ?>">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/googleplay.png">
                            </a>
                            <br />
                            <p>Looking for the <a href="https://github.com/owncloud/android">Android</a> or <a href="https://github.com/owncloud/ios">iOS sources</a>? Looking for <a href="http://f-droid.org/app/com.owncloud.android">F-Droid</a>?</p>
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
      <div id="testing-development" class="container row">
          <div class="instructions">
                <div class="row">
                    <a href="#" class="close">&times;</a>
                    <h3>Help with testing and development</h3>
                </div>
		<div class="overlay-body row">
		  <div class="col-md-6">
		    <a name="testing"></a>
		    <p>Our server is in constant development and help is always needed in testing the latest bugfixes and features. Please report any issues to the <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>/bugtracker/" target="_blank">tracker</a>.</p>
		    <h4>ownCloud Server <small>Daily build</small></h4>
		    <div class="btn-group">
		      <a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i>  Archive File</a>
		      <a href="<?php echo $DOWNLOAD_SERVER_PACKAGES_DAILY; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux Packages</a>
		    </div>
		    <?php if(!empty($VERSIONS_CLIENT_DESKTOP_TESTING)) { ?>
		    <h4>Desktop Clients <small><?php echo $VERSIONS_CLIENT_DESKTOP_TESTING; ?></small></h4>
		    <div class="btn-group">
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_WIN; ?>" class="btn btn-lg btn-default"><i class="icon-windows"></i>  Windows</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_MAC; ?>" class="btn btn-lg btn-default"><i class="icon-apple"></i> Mac</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_LINUX; ?>" class="btn btn-lg btn-default"><i class="icon-linux"></i> Linux</a>
		      <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i> Sources</a>
		    </div>
		    <p>Our desktop team provides regular pre-releases. Please report any issues to the <a href="https://github.com/owncloud/mirall/issues" target="_blank">tracker</a>.</p>
		    <p>You can check the authenticity of the sources using this <a href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_TEST_SOURCES_PGP; ?>">PGP signature</a>.</p>
		    <?php } ?>
		  </div>
		  <div class="col-md-6">
		    <div class="thumbnail">
		      <img style="margin: 0 auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/codebasephp.png" alt="ownCloud Code" />
		    </div>
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
