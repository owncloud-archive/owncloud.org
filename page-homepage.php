<?php if(CONTRIBOOK) { require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php'); } ?>
<div class="header"><div class="row image">
	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
		<img style="display: block; width: 75%; min-width: 320px; margin: 3em auto 10px;" alt="image about owncloud sync" src="/wp-content/themes/owncloudorgnew/assets/img/home/ocsplash.png" />
	</div>
</div>
<div class="row">
	<h2 style="margin: 25px 0 10px 0; text-align: center; display: block; vertical-align: middle; font-size: 30px;">Web services under your control</h2>
</div>
</div>
	<div class="row 3-column-lg-md-sm">

		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
			<h2><i class="icon-filter">&nbsp;</i> Integration</h2>
			<span>ownCloud uses open standards to allow easy integration with your existing it services. Use external storage providers to expand your storage, use CalDAV, CardDAV, and WebDAV to sync your data along with many more endpoints.</span>
		</div>

		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
			<h2><i class="icon-exclamation-circle">&nbsp;</i> Privacy</h2>
			<div>
				<p>ownCloud protects your privacy by allowing you to maintain control over your data. Server-side encryption can secure data hosted in external sources.</p>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
			<h2><i class="icon-unlock">&nbsp;</i> Open Source</h2>
			<div>
				<p>Nullam sit amet tempus nisi. Nulla aliquet laoreet massa eget sodales. Suspendisse massa massa, ullamcorper consequat lacinia tempor, iaculis in libero.</p>
			</div>
		</div>
	</div>
	<div class="row" id="getapps">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-6">
					<h2>Get your ownCloud</h2>
					<p style="margin-bottom: 1em;">Choose <strong>your preferred way</strong> to install your ownCloud Server.</p>
					<div class="btn-group">
						<a class="btn btn-primary btn-lg installbtn" href="/install"  target="_blank"><i class="icon-cloud-download" ></i> Host ownCloud yourself</br><small>For server owners</small></a>
						<a class="btn btn-default btn-lg hostingbtn" href="/providers/"  target="_blank"><i class="icon-search" ></i> Find hosting</br><small>with a third party</small></a>
					</div>
				</div>
				<div class="col-sm-6">
					<h2>Sync your files</h2>
					<div style="margin-bottom: 1em;">Sync your files using our ownCloud sync clients for desktop and mobile devices.</div>
					<div class="row" style="padding-top: 0; padding-bottom: 0;">
					<div class="col-md-4" style="margin-bottom: 0.5em;">
						<a id="desktopclient" href=" http://owncloud.org/sync-clients/" target="_blank">
							<img style="width: 160px;" alt="" src="/wp-content/themes/owncloudorgnew/assets/img/clients/buttons/desktopapp.png" />
						</a>
					</div>
					<div class="col-md-4" style="margin-bottom: 0.5em;">
						<a id="appstore" href="http://itunes.apple.com/us/app/owncloud/id543672169?ls=1&amp;mt=8" target="_blank">
							<img style="width: 160px;" alt="" src="/wp-content/themes/owncloudorgnew/assets/img/clients/buttons/appstore.png" />
						</a>
					</div>
					<div class="col-md-4">
						<a id="googleplay" href="https://play.google.com/store/apps/details?id=com.owncloud.android" target="_blank">
							<img style="width: 160px;" alt="" src="/wp-content/themes/owncloudorgnew/assets/img/clients/buttons/googleplay.png" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row 2-column-lg-md-sm">
	<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
		<h2><i class="icon-rocket">&nbsp;</i> Get involved</h2>
		<p>Join a large and growing community supporting the development and testing of ownCloud to help make it better for everyone. Help answer posts in the <a href="http://forum.owncloud.org/">Forum</a>, post bugs in the <a href="https://github.com/owncloud/core/issues">tracker</a>, test ownCloud using the <a href="http://doc.owncloud.org/server/7.0/developer_manual/testing/index.html">test plan</a>, hang out in the <a href="http://webchat.freenode.net/?channels=owncloud">IRC channel</a> or help <a href="https://www.transifex.com/projects/p/owncloud/">translate</a> ownCloud.</p>
	</div>
<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
	<h2><i class="icon-briefcase">&nbsp;</i> Company support</h2>
	<p>ownCloud is perfect for use inside your company. Your data on your servers, under your control. <a href="https://owncloud.com">ownCloud Inc</a> offers Enterprise editions with extensive support.</p>
</div>
</div>
<div class="row 3-column-lg-md-sm">
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
		<h2><i class="icon-twitter"></i> The latest twitter posts</h2>
		<?php if(CONTRIBOOK) { CONTRIBOOK_MICROBLOG::show(0,4); } ?>
	</div>
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
		<h2><i class="icon-comment"></i> The latest from the forum</h2>
		<?php if(CONTRIBOOK) { CONTRIBOOK_FORUM::show(0,7); }?>
	</div>
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
		<h2><i class="icon-cloud"></i> ownCloud.com news</h2>
		<?php if(CONTRIBOOK) { CONTRIBOOK_NEWS::show(0,7); } ?>
	</div>
</div>