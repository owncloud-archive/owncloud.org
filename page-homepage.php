<?php if(CONTRIBOOK) { require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php'); } ?>
<h2 class="slogan-mobile">Your Data - Under Uour Control</h2>
<a href="/features">
<div class="header"><div class="row image">
	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
		<h2 class="slogan">Your data - under your control</h2>
		<img class="home-header-image" alt="image about owncloud sync" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/ocsplash.png" />
	</div>
</div>
</a>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<p class="explain-short"><strong>With ownCloud you can sync & share your files, calendar, contacts and more.</strong><br/> 
			Access your data from all your devices, on an open platform you can extend and modify.</p>
	</div>
</div>
<div class="row pad-bottom highlight">
	<h3 class="conference hidden-xs"><a href="/conf">ownCloud Contributor Conference - August 2014, Berlin</a></h3>
	<h3 class="conference visible-xs"><a href="/conf">ownCloud Contributor Conference <br/>
	August 2014, Berlin</a></h3>
</div>
</div>
	<div class="row home-row pad-bottom 3-column-lg-md-sm">
		<div class="col-xs-12 col-sm-6 col-md-3">
			<i class="icon-globe">&nbsp;</i>
			<h2>Access</h2>
			<div class="home-ft-content">
				<p>Access your data from your web browser, Android or iOS devices and your laptop and desktop.</p>
				<a href="https://owncloud.org/features" class="feature-link">More features...</a>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3">
			<i class="icon-exclamation-circle">&nbsp;</i>
			<h2>Privacy</h2>
			<div class="home-ft-content">
				<p>ownCloud gives you control over your data. You decide what is shared with who and for how long.</p>
				<a href="https://owncloud.org/blog/how-owncloud-uses-encryption-to-protect-your-data/" class="feature-link">More about security...</a>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3">
			<i class="icon-unlock">&nbsp;</i>
			<h2>Extensible</h2>
			<div class="home-ft-content">
				<p>Add apps, external storage, or your own code! Join the friendly and open community and get started!</p>
				<a href="https://owncloud.org/contribute" class="feature-link">Get involved...</a>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<i class="icon-briefcase">&nbsp;</i>
			<h2>For Enterprise</h2>
			<div class="home-ft-content">
				<p>Additional features and support to ensure your sensitive corporate data remains in your control.</p>
				<a href="https://owncloud.com" style="color: #e8733b" class="feature-link">Enterprise Edition...</a>
			</div>
		</div>
	</div>
	<div class="row pad-bottom" id="getapps">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<h2><i class="icon-cloud-download">&nbsp;</i> Get your ownCloud</h2>
				</div>
				<div class="col-sm-6 col-xs-12 install-buttons">
					<div class="btn-group">
						<a class="btn btn-primary btn-lg installbtn" href="/install"><i class="icon-cloud-download" ></i> Host ownCloud</br><small>For server owners</small></a>
						<a class="btn btn-default btn-lg hostingbtn" href="/providers/"><i class="icon-search" ></i> Find hosting</br><small>with a third party</small></a>
					</div>
					<a class="btn btn-default btn-lg client-install" href="/install/#desktop"><i class="icon-mobile" ></i> Install Clients</br><small>for desktop and mobile</small></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row pad-bottom	 2-column-lg-md-sm" style="margin-top: -0.5em">
	<div class="col-xs-12 col-sm-6">
		<h2><i class="icon-rocket">&nbsp;</i> Get involved</h2>
		<p>Join a large and growing community supporting the development and testing of ownCloud to help make it better for everyone. Help answer posts in the <a href="http://forum.owncloud.org/">Forum</a>, post bugs in the <a href="https://github.com/owncloud/core/issues">tracker</a>, test ownCloud using the <a href="http://doc.owncloud.org/server/7.0/developer_manual/testing/index.html">test plan</a>, hang out in the <a href="http://webchat.freenode.net/?channels=owncloud">IRC channel</a> or help <a href="https://www.transifex.com/projects/p/owncloud/">translate</a> ownCloud.</p>
		<a class="btn btn-block btn-lg join-button conf-button" href="/conf" role="button">Hackathon, Berlin</a>
	</div>
	<div class="col-xs-12 col-sm-6">
		<h2><i class="icon-users">&nbsp;</i> Join and help</h2>
		<div class="join">
			<a class="btn btn-block btn-primary btn-lg join-button" href="/contribute" role="button">Join development</a>
			<a class="btn btn-block btn-primary btn-lg join-button" href="https://github.com/owncloud/core/issues" role="button">Report an issue</a>
			<a class="btn btn-block btn-primary btn-lg join-button" href="https://www.transifex.com/projects/p/owncloud/" role="button">Help translating</a>
		</div>
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
