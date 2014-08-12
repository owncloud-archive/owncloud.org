<?php if(CONTRIBOOK) { require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php'); } ?>
<a href="/features">
<div class="header"><div class="row image">
	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
		<img class="home-header-image" alt="image about owncloud sync" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/ocsplash.png" />
	</div>
</div>
</a>
<div class="row">
	<h2 class="slogan">Your data - under your control</h2>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<p class="explain-short"><strong>With ownCloud you can sync & share your files, calendar, contacts and more.</strong><br/> 
			Access your data from all your devices, on an open platform you can extend and modify.</p>
	</div>
</div>
<div class="row highlight">
	<h3 class="conference hidden-xs"><a href="/conf">ownCloud Contributor Conference - August 2014, Berlin</a></h3>
	<h3 class="conference visible-xs"><a href="/conf">ownCloud Contributor Conference <br/>
	August 2014, Berlin</a></h3>
</div>
</div>
	<div class="row 3-column-lg-md-sm">

		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
			<h2><i class="icon-filter">&nbsp;</i> Integration</h2>
			<p>ownCloud uses open standards to allow easy integration with your existing services. Use CalDAV, CardDAV, and WebDAV to sync your data along with many more.</p>
		</div>

		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
			<h2><i class="icon-exclamation-circle">&nbsp;</i> Privacy</h2>
			<p>ownCloud protects your privacy by allowing you to maintain control over your data. Server-side encryption can secure data hosted in external sources.</p>
		</div>

		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
			<h2><i class="icon-unlock">&nbsp;</i> Open Source</h2>
			<p>All of the code running ownCloud is open source, allowing the public to openly review its security and anyone can contribute towards the development of ownCloud.</p>
		</div>
	</div>
	<div class="row" id="getapps">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-6">
					<h2><i class="icon-cloud-download">&nbsp;</i> Get your ownCloud</h2>
					<p>Choose <strong>your preferred way</strong> to install your ownCloud Server.</p>
					<div class="btn-group">
						<a class="btn btn-primary btn-lg installbtn" href="/install"><i class="icon-cloud-download" ></i> Host ownCloud</br><small>For server owners</small></a>
						<a class="btn btn-default btn-lg hostingbtn" href="/providers/"><i class="icon-search" ></i> Find hosting</br><small>with a third party</small></a>
					</div>
				</div>
				<div class="col-sm-6">
					<h2><i class="icon-refresh">&nbsp;</i> Sync your files</h2>
					<p>Sync your files using our sync clients for desktop and mobile devices.</p>
					<ul class="list-unstyled list-inline">
					  <li>
						<a id="desktopclient" href="/install#desktop" role="button">
							<img id="sync-button" alt="desktopclient" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/desktopapp.png" />
						</a>
					  </li>
					  <li>
						<a id="appstore" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS; ?>" target="_blank"  role="button">
							<img id="sync-button" alt="appstore" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/appstore.png" />
						</a>
					  </li>
					  <li>
						<a id="googleplay" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID; ?>" target="_blank"  role="button">
							<img id="sync-button" alt="googleplay" src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/googleplay.png" />
						</a>
					  </li>
					</ul>
			</div>
		</div>
	</div>
</div>
<div class="row 2-column-lg-md-sm" style="margin-top: -0.5em">
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
		<h2><i class="icon-rocket">&nbsp;</i> Get involved</h2>
		<p>Join a large and growing community supporting the development and testing of ownCloud to help make it better for everyone. Help answer posts in the <a href="http://forum.owncloud.org/">Forum</a>, post bugs in the <a href="https://github.com/owncloud/core/issues">tracker</a>, test ownCloud using the <a href="http://doc.owncloud.org/server/7.0/developer_manual/testing/index.html">test plan</a>, hang out in the <a href="http://webchat.freenode.net/?channels=owncloud">IRC channel</a> or help <a href="https://www.transifex.com/projects/p/owncloud/">translate</a> ownCloud.</p>
	</div>
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
		<h2><i class="icon-users">&nbsp;</i> Join and help</h2>
		<div class="join">
			<a class="btn btn-block btn-lg join-button conf-button" href="/conf" role="button">Hackathon, Berlin</a>
			<a class="btn btn-block btn-primary btn-lg join-button" href="/contribute" role="button">Join development</a>
			<a class="btn btn-block btn-primary btn-lg join-button" href="https://github.com/owncloud/core/issues" role="button">Report an issue</a>
			<a class="btn btn-block btn-primary btn-lg join-button" href="https://www.transifex.com/projects/p/owncloud/" role="button">Help translating</a>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
	<h2><i class="icon-briefcase">&nbsp;</i> ownCloud for the Enterprise</h2>
	<p>ownCloud Enterprise Edition was created with additional features and support to ensure your sensitive corporate data remains in your control. See what is a href="https://owncloud.com/products/enterprise/">best for you</a>.</p>
	</div>
</div>
<div class="row 3-column-lg-md-sm">
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
		<h2><i class="icon-twitter"></i> The latest twitter posts</h2>
		<?php if(CONTRIBOOK) { CONTRIBOOK_MICROBLOG::show(0,3); } ?>
	</div>
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
		<h2><i class="icon-comment"></i> The latest from the forum</h2>
		<?php if(CONTRIBOOK) { CONTRIBOOK_FORUM::show(0,7); }?>
	</div>
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
		<h2><i class="icon-cloud"></i> ownCloud News</h2>
		<?php if(CONTRIBOOK) { CONTRIBOOK_NEWS::show(0,7); } ?>
	</div>
</div>
