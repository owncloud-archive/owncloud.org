		<div class="row headerrow">
			<div class="col-md-5">
				<iframe width="95%" height="315" src="https://www.youtube.com/embed/RrAhClhrRAc?rel=0" frameborder="0" style="margin-top:10px;" allowfullscreen></iframe>
			</div>
			<div class="col-md-7">
				<h2>ownCloud Server 8.1 Features</h2>
				<p>ownCloud Server 8.1 has significant improvements for users, administrators and developers.
					This page contains an overview of the most important changes.
				</p>
				<a href="/install" class="btn btn-lg btn-primary install-8-btn">Install ownCloud 8.1 now</br></a>
				<p>Want to learn more about ownCloud from somebody in person? Meet us at an event or join the conversation online!</p>
				<div class="evnt-btn-wrap">
					<a href="/events" class="btn btn-lg btn-default">Join an ownCloud event</a>
					<a href="/promote" class="btn btn-lg btn-default">Discuss ownCloud with others</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end main -->

<div class="feature-wide-row-wrap">
	<div class="wrap container">
		<div class="row">
		 	<div class="col-md-4 col-md-offset-4">
		  		  <h3 class="row-center-title">Release highlights</h3>
		  	</div>
		 </div>
			<div class="col-md-4 featureblock">
				<i class="icon-book"></i>
				<h3 class="ft-title">Integrated Documentation</h3>
				<p class="featuredesc">To make ownCloud easier to use, documentation has been massively improved and integrated in the interface.</p>
			</div>

			<div class="col-md-4 featureblock">
				<i class="icon-fighter-jet"></i>
				<h3 class="ft-title">Performance</h3>
				<p class="featuredesc">This ownCloud release brings much improved performance in the areas of syncing, file operations and dealing with parallel requests.</p>
			</div>

			<div class="col-md-4 featureblock">
				<i class="icon-road"></i>
				<h3 class="ft-title">Update channels</h3>
				<p class="featuredesc">It is now easier to keep ownCloud updated with the channel of your choice via the built in Updater app and our package repositories.</p>
			</div>
		</div>
	</div>
</div>

<div class="wrap container">
	<div class="content row">
		<div class="featurewrapper">
			<h2>ownCloud Server 8.1 Feature Improvements</h2>
		</div>
		<p>Jump to improvements for: <a href="#user">Users</a> | 
			<a href="#admin">Administrators</a> | <a href="#developer">Developers</a></p>
		<a name="user"></a>
		<div class="featurewrapper">
			<h2>End User Improvements</h2>
		</div>
		<div class="row featurerow">
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="sharing" src="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing.png" />
				<h3 class="featuretitle">Federated Cloud ID</h3></br>
				<p class="featuredesc">You can now find your Federated Cloud ID in the settings, making it easy to start sharing with other ownCloud servers. Federated Cloud ID's added to your address book will auto-complete in the share dialog.</p>
			</div>

			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="documentation" src="<?php bloginfo('template_directory'); ?>/assets/img/features/tips.png" />
				<h3 class="featuretitle">Integrated Documentation</h3></br>
				<p class="featuredesc">To make ownCloud easier to use, documentation has been massively improved and integrated in the interface. Warnings and notifications come with documentation links, options are explained in the user interface and a tips and tricks section in the admin settings bring the ownCloud documentation closer.</p>
			</div>

			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="faster" src="<?php bloginfo('template_directory'); ?>/assets/img/features/api.png" />
				<h3 class="featuretitle">Performance</h3></br>
				<p class="featuredesc">This ownCloud release brings much improved performance, with up to 4x faster up- and downloads and an order of magnitude faster file manipulation. Better scalability through improved handling of parallel requests means ownCloud can now handle up to 50% more active users on each ownCloud Server instance.</p>
			</div>
		</div>

		<div class="row featurerow">
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="faster" src="<?php bloginfo('template_directory'); ?>/assets/img/features/documents.png" />
				<h3 class="featuretitle">Improved Documents</h3></br>
				<p class="featuredesc">An updated ownCloud Documents app improves on document compatibility and introduces new features like indentation buttons and annotations support as well as working keyboard shortcuts for Firefox users.</p>
			</div>
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="other features" src="<?php bloginfo('template_directory'); ?>/assets/img/features/design.png" />
				<h3 class="featuretitle">More Previews</h3></br>
				<p class="featuredesc">There is now preview support for fonts and 3D images as well as RAW support for viewing (not previews).</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/better-integrated-help.png" title="help is integrated everywhere in the user interface" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/better-integrated-help-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/federated-cloud-id.png" title="you can easily find and share your Federated Cloud ID" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/federated-cloud-id-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/federated-sharing-addressbook.png" title="auto-complete Federated Cloud ID's from your address book" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/federated-sharing-addressbook-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
		</div>

		<a name="admin"></a>
		<div class="featurewrapper">
			<h2>Admin Enhancements</h2>
		</div>
		<p>System administrators are strongly encouraged to check out the <a href="https://doc.owncloud.org/server/8.1/admin_manual/release_notes.html">release notes for ownCloud 8.1</a> before upgrading or doing a fresh installation!</p>
		<div class="row featurerow">
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="external_storage" src="<?php bloginfo('template_directory'); ?>/assets/img/features/external.png" />
				<h3 class="featuretitle">New Mount Options for External Storage</h3></br>
				<p class="featuredesc">ownCloud is a mechanism for consolidating access to various backend storage systems using the external storage application. Administrators can now configure encryption, thumbnail support and file cache behavior for each external storage mount, providing another layer of control for the server admin.</p>
			</div>

			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="ldap" src="<?php bloginfo('template_directory'); ?>/assets/img/features/avatar.png" />
				<h3 class="featuretitle">LDAP Wizard Improvements</h3></br>
				<p class="featuredesc">The LDAP wizard has been re-architected for more scalable performance and advanced configuration options, including auto-detection of more common and uncommon scenarios.</p>
			</div>
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="encryption" src="<?php bloginfo('template_directory'); ?>/assets/img/features/encryption.png" />
				<h3 class="featuretitle">Encryption 2.0</h3></br>
				<p class="featuredesc">A modularization of the Encryption capabilities in ownCloud allows for external key management, provides improved reliability and management, and sets the foundation for future encryption enhancements.</p>
			</div>
		</div>

		<div class="row featurerow">
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="security" src="<?php bloginfo('template_directory'); ?>/assets/img/features/security.png" />
				<h3 class="featuretitle">Security Improvements</h3></br>
				<p class="featuredesc">There have been a raft of architectural improvements and changes made which harden ownCloud against security threats. Some of these <a href="https://statuscode.ch/2015/05/security-and-owncloud-8.1/">are described here</a>.</p>
			</div>

			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="Updates" src="<?php bloginfo('template_directory'); ?>/assets/img/features/update.png" />
				<h3 class="featuretitle">Update Channels</h3></br>
				<p class="featuredesc">The built in Updater app and our package repositories now offer different update channels to keep ownCloud updated from. Administrators can choose to track the latest released code, a more conservative stable branch, release candidates, or daily builds to align their ownCloud installation to their needs.</p>
			</div>
		<div class="row featurerow">
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="example theme" src="<?php bloginfo('template_directory'); ?>/assets/img/features/design.png" />
				<h3 class="featuretitle">Example Theme</h3></br>
				<p class="featuredesc">To make developing a custom ownCloud theme easier, a new example theme was included with ownCloud 8.1. Find details on how to theme ownCloud in the <a href="https://doc.owncloud.org/server/8.1/admin_manual/operations/theming.html">documentation</a>.</p>
			</div>
		</div>
			<div class="col-md-4 featureblock">
				<img class="thumbnail" alt="other features" src="<?php bloginfo('template_directory'); ?>/assets/img/features/backend.png" />
				<h3 class="featuretitle">SFTP with SSH</h3></br>
				<p class="featuredesc">The SFTP external storage now works with an SSH key.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/tips-and-tricks.png" title="Tips and tricks as well as links to documentation are well integrated in the admin panel" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/tips-and-tricks-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/mount-options.png" title="You can set encryption, update policy and previews for each external storage mount" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/mount-options-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/encryption3.png" title="Next generation server side encryption in ownCloud" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/encryption3-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/encryption5.png" title="Next generation server side encryption in ownCloud" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/encryption5-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/update-channels.png" title="Update Channel selection in Updater App" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/update-channels-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/example-theme.png" title="Included example theme" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/example-theme-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-server-tab.png" title="LDAP wizzard server page" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-server-tab-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-users-tab.png" title="LDAP wizzard users page" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-users-tab-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-login-tab.png" title="LDAP wizzard login page" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-login-tab-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
			<div class="col-md-3"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-group-tab.png" title="LDAP wizzard group page" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/screenshots/server/eight-one/LDAP-group-tab-wee.png" style="width: 100%" alt="..." class="img-thumbnail"></a></div>
		</div>
		<a name="developer"></a>
		<div class="featurewrapper">
			<h2>Improvements for Developers</h2>
		</div>
		<div class="row">
			<ul class="featureslist">
				<li>App Management</br>
ownCloud is <a href="http://karlitschek.de/2015/06/building-a-platform/">meant to be a platform</a> and to aid app developers, APIs have been cleaned up and the process of getting apps in the appstore <a href="https://doc.owncloud.org/server/8.1/developer_manual/app/publishing.html">is now documented</a>.</li>
				<li>Improved API: over 190 additions, 50 deprecated calls. For details, see this blog about <a href="https://owncloud.org/blog/TBD">ownCloud 8.1 for app developers</a></li>
				<li>Sharing capabilities are now exposed to allow external applications (desktop client, mobile clients etc.) to provide a better UX.</li>
			</ul>
			<p>For details, see this blog about <a href="https://owncloud.org/blog/TBD">ownCloud 8.1 for app developers</a>.</p>
		</div>
		<h2>Get involved!</h2>
		<p><a target="_blank" href="/promote/" class="btn btn-lg btn-default"> <i class="icon-bullhorn"></i> Discuss ownCloud with others</a></p>
		<p><a target="_blank" href="/contribute/" class="btn btn-lg btn-default"> <i class="icon-code"></i> join the ownCloud community</a></p>
		<p><a target="_blank" href="/conf/" class="btn btn-lg btn-default"> <i class="icon-group"></i> ownCloud Contributor Conference</a></p>
	</div>
</div>
