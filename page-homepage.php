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
			<h2><i class="icon-globe">&nbsp;</i> Access</h2>
			<p>Access your data from your web browser, Android or iOS devices and your laptop and desktop. ownCloud integrates with your existing services thanks to open standards. <a href="https://owncloud.org/features" class="btn btn-lg btn-standard alignright">More features</a></p>
		</div>

		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
			<h2><i class="icon-exclamation-circle">&nbsp;</i> Privacy</h2>
			<p>ownCloud gives you control over your data. You decide what is shared with who and for how long. Server-side encryption can secure data hosted on external services.<a href="https://owncloud.org/blog/how-owncloud-uses-encryption-to-protect-your-data/" class="btn btn-lg btn-standard alignright">More about security</a></p>
		</div>

		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
			<h2><i class="icon-unlock">&nbsp;</i> Extensible</h2>
			<p>Extend ownCloud with apps, external storage and your own code. ownCloud is <a href="http://github.com/ownCloud">developed on github</a>, features easy to use API's and has a friendly and open community. <a href="https://owncloud.org/contribute" class="btn btn-lg btn-standard alignright">Get involved</a></p>
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
						Find <a href="https://github.com/owncloud/core/wiki/Apps">third party apps integrating in ownCloud here</a>.
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
