<div class="row page-content-header">
	<div class="col-md-4">
		<h1>Security Advisories</h1>
	</div>
	<div class="col-md-5 col-md-offset-3">
		<form role="form" action="/security/advisory/" method="get">
			<input name="id" type="text" class="form-control" placeholder="Advisory identifier">
			<button type="submit" class="btn btn-default">Go</button>
		</form>
	</div>
</div>
<div class="row" style="
    margin-top: 40px;
">
	<div class="col-md-4">
		<h2>ownCloud Server</h2><br>
		<?php get_template_part('advisories/server-list-part'); ?>
	</div>
	<div class="col-md-4">
		<h2>Desktop Clients</h2><br>
                <?php get_template_part('advisories/desktop-list-part'); ?>	
	</div>
	<div class="col-md-4">
		<h2>Mobile Clients</h2><br>
                <?php get_template_part('advisories/mobile-list-part'); ?> 
	</div>
</div>
