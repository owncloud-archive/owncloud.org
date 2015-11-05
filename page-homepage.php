<?php if(CONTRIBOOK) { require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php'); } ?>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css" rel="stylesheet">
<!-- Teaser Area -->

<div class="container teaser-area">
            <div class="intro-text">
                <div class="intro-heading">A safe home for all your data</div>
                <div class="intro-details">Access and share your files, calendars, contacts, mail and more from any device, on your terms</div>
                <a class="btn btn-primary btn-lg" role="button" href="/install">Get your ownCloud &raquo;</a>
            </div>
        </div>
</div>
<div class="wrap container home-features">
	<div class="row">
		<div class="col-md-4">
			<a href="/contribute"><i class="icon-group icon"></i>
			<h3 class="ft-title">Open Community</h3>
			<p class="featuredesc">ownCloud is developed in a transparent and inviting way by the open source community.</p></a>
		</div>
		<a href="/security"><div class="col-md-4">
			<i class="icon-eye icon"></i>
			<h3 class="ft-title">Privacy First</h3>
			<p class="featuredesc">ownCloud keeps your files secure and private - you decide where you host your data.</p>
		</div></a>
		<a href="/features"><div class="col-md-4">
			<i class="icon-cubes icon"></i>
			<h3 class="ft-title">Capable Cloud</h3>
			<p class="featuredesc">ownCloud is extensible with new functionality to provide all you need to live your digital live.</p></a>
		</div>
	</div>
</div>

<!--<div class="wrap container pad-bottom">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2>We rock the ownCloud Contributor Conference!</h2>
		</div>
	</div>
	<div class="row pad-bottom">
		<div class="text-center videoWrapper">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/DvW_EoIoD1Y" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="row pad-bottom">
		<div class="col-md-12 text-center">
			  <a class="btn btn-block btn-lg join-button events-button" href="/conf" role="button">Learn more about the event and the announcements!</a>
		</div>
	</div>
</div>-->

<div class="wrap container users">
		<div class="row">
			<div class="col-md-12">
				<h2>Trusted by hundreds of organizations worldwide</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 customers">
			  <a href="http://home.web.cern.ch/" target="_blank"><img class="customer" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/cern.png" alt="The Atom Smashers in Switzerland" /></a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 customers">
			<a href="http://www.tu-berlin.de/" target="_blank"><img class="customer" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/TUB.png" alt="Technische Universität Berlin and home of the ownCloud Contributor Conference" /></a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 customers">
			<a href="http://www.bauhaus.info/" target="_blank"><img class="customer" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/bauhaus.png" alt="Swiss retail chain offering products for home improvement, gardening and workshop" /></a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 customers">
			  <a href="http://www.delonghi.com/" target="_blank"><img class="customer" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/delongi.png" alt="DeLongi is a major Italian appliance manufacturer" /></a>
			</div>
<!--			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 customers">
			  <a href="https://www.amnesty.de/" target="_blank"><img class="customer" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/amnesty.png" alt="Amnesty Germany" /></a>
			</div>-->
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 customers">
			  <a href="https://www.hawaii.edu/" target="_blank"><img class="customer" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/uoh.png" alt="The university of Hawaii has 50.000 students and famous alumni" /></a>
			</div>
		</div>
	<p>Learn more about ownCloud, Inc. customers and their stories <a href="https://owncloud.com/customer-stories/" target="_blank">here</a></p>
</div>

<div class="wrap container newsletter">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
		<!-- Constant Contact Email List Form Button -->
		   <!-- <a href="http://visitor.r20.constantcontact.com/d.jsp?llr=ixens9uab&amp;p=oi&amp;m=1121878184680&amp;sit=mf4qye7jb&amp;f=cc4cd13f-acdf-45d3-b132-75252542c37d" class="btn btn-block btn-primary btn-lg join-button">Subscribe to our<br />monthly newsletter!</a><br />-->
<!-- 		   <a class="btn btn-primary btn-lg" role="button" href="/features">Learn more about what ownCloud can do for you &raquo;</a> -->
		</div>
	</div>
</div>


<div class="row 3-column-lg-md-sm">
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
		<h2><i class="icon-twitter"></i> The latest <a href="https://twitter.com/ownclouders">twitter posts</a></h2>
		<?php if(CONTRIBOOK) { CONTRIBOOK_MICROBLOG::show(0,3); } ?>
	</div>
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
		<h2><i class="icon-comment"></i> The latest <a href="https://forum.owncloud.org">from the forum</a></h2>
		<?php if(CONTRIBOOK) { CONTRIBOOK_FORUM::show(0,7); }?>
	</div>
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
		<h2><i class="icon-cloud"></i> <a href="/news">ownCloud News</a></h2>
		<?php if(CONTRIBOOK) { CONTRIBOOK_NEWS::show(0,9); } ?>
	</div>
</div>
