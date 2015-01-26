<p></p>


<div class="row featurerow topfeature">
	<div class="col-md-5">
		<iframe src="//www.youtube.com/embed/xA3tfBTvH0c" height="310" width="95%" style="margin-top:10px;" allowfullscreen="" frameborder="0"></iframe>
	</div>
	<div class="col-md-7">
		<h2 class="featuretitle" style="margin-top: 0;">ownCloud Server 8 Features</h2>
		<p style="text-align: justify; margin-top: 10px;">ownCloud Server 8.0 has significant feature improvements for users, administrators and developers. Want to learn more about ownCloud from somebody in person? Meet us at an event!
		</p>
		<a href="/events" class="btn btn-lg btn-default">Join an ownCloud event</a> <a href="/promote" class="btn btn-lg btn-default">Promote ownCloud!</a>
		</br></br>
		</br></br>
		<p><a href="/install" class="btn btn-lg btn-primary">Install ownCloud Server 8 now</a></p>
	</div>
</div>
</div></div><!-- end main -->

<div class="feature-wide-row-wrap">
	<div class="wrap container">
		<div class="row featurerow featuresheader">
		 	<div class="col-md-4 featureblock col-md-offset-4">
		  		  <h3 class="ft-title">Release highlights</h3>
		  	</div>
		 </div>
		<div class="row featurerow featuresheader">
			<div class="col-md-4 featureblock">
				<i class="icon-globe"></i>
				<h3 class="ft-title">Get at your files faster</h3>
				<p class="featuredesc">ownCloud Server 8 introduces favorites support and much improved search functionality, enabling users to have extremely quick and easy access to important files without having to navigate through all their data.</p>
			</div>
			<div class="col-md-4 featureblock">
				<i class="icon-refresh"></i>
				<h3 class="ft-title">Be in control</h3>
				<p class="featuredesc">ownCloud Server 8 delivers better performance and more control for administrators thanks to enhanced user, storage and app management.</p>
			</div>
			<div class="col-md-4 featureblock">
				<i class="icon-share-alt"></i>
				<h3 class="ft-title">Federate your clouds</h3>
				<p class="featuredesc">ownCloud Server 8 improves Server-to-Server sharing, bringing users of different ownCloud servers closer together by allowing users to share files by referring to user names on connected ownCloud servers and introducing notifications and interface improvements.</p>
			</div>
		</div>
	</div>
</div>
<div class="wrap container">
	<div class="content row">

<div class="featurewrapper"><h2>ownCloud Server 8 Feature Improvements</h2></div>
Jump to improvements for: <a href="#user">Users</a> | <a href="#admin">Administrators</a> | <a href="#developer">Developers</a></br>

<a name="user"></a>
<div class="featurewrapper"><h2>End User Improvements</h2></div>

<div class="row featurerow">
	<div class="col-md-4 featureblock">
		<img class="thumbnail" alt="Sharing" src="<?php bloginfo('template_directory'); ?>/assets/img/features/sharing.png" />
		<h3 class="featuretitle">Introducing Favorites</h3></br>
		<p class="featuredesc">The Files app introduces the ability to favorite files by clicking the little star in front of files. Favorite files will show up in the side bar under the <em>Favorites</em> section so you can find them very quickly. This feature also includes an API for clients to retrieve and set favorites.</p>
	</div>
	<div class="col-md-4 featureblock">
		<img class="thumbnail" alt="Design" src="<?php bloginfo('template_directory'); ?>/assets/img/features/design.png" />
		<h3 class="featuretitle">Improved Search</h3></br>
		<p class="featuredesc">Search has gotten a new user interface, showing results in the main view of apps instead of a small drop-down below the search field. Results are also app-specific (contacts in the Contacts app, files in the Files app, ...) and first filter the content of the current view, appending search results on the bottom, depending on the application.</p>
	</div>
	<div class="col-md-4 featureblock">
		<img class="thumbnail" alt="Access" src="<?php bloginfo('template_directory'); ?>/assets/img/features/avatar.png" />
		<h3 class="featuretitle">Next Generation Server-to-server Sharing</h3></br>
		<p class="featuredesc">Server-to-server Sharing sharing improves on the cross-server sharing experience, letting users share to a specific ownCloud server and accept incoming shares from other servers directly from the web interface. Sharing files can similarly done by adding an user from another server in the share drop-down and an OCS based API makes it possible for third party applications to integrate with Server-to-server Sharing.</p>
	</div>
</div>

<div class="row featurerow">
	<div class="col-md-4 featureblock">
		<img class="thumbnail" alt="something" src="<?php bloginfo('template_directory'); ?>/assets/img/features/undelete.png" />
		<h3 class="featuretitle">Direct download support</h3></br>
		<p class="featuredesc">The ownCloud server offers the ability to give a direct download link with S3 and SWIFT to clients, bypassing the server for improved download speeds.</p>
	</div>

	<div class="col-md-4 featureblock">
		<img class="thumbnail" alt="something" src="<?php bloginfo('template_directory'); ?>/assets/img/features/gallery.png" />
		<h3 class="featuretitle">Accessibility improvements</h3></br>
		<p class="featuredesc">It is now much easier to work with the ownCloud web UI without a mouse.</p>
	</div>

	<div class="col-md-4 featureblock">
		<img class="thumbnail" alt="something" src="<?php bloginfo('template_directory'); ?>/assets/img/features/undelete.png" />
		<h3 class="featuretitle">Shorter sharing links</h3></br>
		<p class="featuredesc">Shorter sharing links make it easier to paste share links in email or on social media.</p>
	</div>
</div>

<div class="row featurerow">
	<div class="col-md-4 featureblock">
		<img class="thumbnail" alt="something" src="<?php bloginfo('template_directory'); ?>/assets/img/features/activity.png" />
		<h3 class="featuretitle">Updated PDF viewer</h3></br>
		<p class="featuredesc">The PDF support in ownCloud has improved compatibility with PDF files.</p>
	</div>
</div>

<a name="admin"></a>

<div class="featurewrapper"><h2>Improvements for Administrators</h2></div>
System administrators should take note that PHP 5.4 is now required for ownCloud Server 8.0.

<div class="row featurerow">

	<div class="col-md-4 featureblock">
		<img class="thumbnail" alt="something" src="<?php bloginfo('template_directory'); ?>/assets/img/features/api.png" />
		<h3 class="featuretitle">Improved Apps management</h3></br>
		<p class="featuredesc">the build in App store in ownCloud got a visual overhaul, putting recommended apps on top and sorting third party apps by rating.</p>
	</div>

	<div class="col-md-4 featureblock">
		<img class="thumbnail" alt="something" src="<?php bloginfo('template_directory'); ?>/assets/img/features/external.png" />
		<h3 class="featuretitle">Improved Updater app</h3>
		<p class="featuredesc">can not find what has been improved.</p>
	</div>

	<div class="col-md-4 featureblock">
		<img class="thumbnail" alt="something" src="<?php bloginfo('template_directory'); ?>/assets/img/features/documents.png" />
		<h3 class="featuretitle">Improved User management</h3>
		<p class="featuredesc">Admins can now see what back end users are on and can change the email address as well as send an introduction email to newly added users.</p>
	</div>

</div>

<div class="row featurerow">
	<div class="col-md-4 featureblock">
		<img class="thumbnail" alt="something" src="<?php bloginfo('template_directory'); ?>/assets/img/features/undelete.png" />
		<h3 class="featuretitle">Usability improvements</h3></br>
		<p class="featuredesc">Better structured settings and admin pages make it easy to more quickly find the setting you're looking for.</p>
	</div>
</div>

</div>

<a name="developer"></a>

<div class="featurewrapper"><h2>Improvements for Developers</h2></div>
<div class="row">
<ul class="featureslist">
	<li>Provisioning API.</li>
	<li>Apps can now specify their dependencies and an intelligent container saves much work.</li>
	<li>A brand new App tutorial including a demo app.</li>
</ul>
For details, see this blog about <a href="">ownCloud 8 for app developers</a>.
</div>
