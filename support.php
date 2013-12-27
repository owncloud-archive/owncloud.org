<?php
/*
Template Name: Support
*/
?>

<div class="row">
<div class="col-xs-12">
<div class="page-header">

	<div class="row">
	<div class="col-sm-6">
        	<h1>Support &#38; Documentation</h1>
	</div>
	<div class="col-sm-6">
		<form role="search" method="get" class="headersearch" id="searchform" action="<?php echo home_url( '/' ); ?>">
	    	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	        <input type="submit" id="searchsubmit" class="btn" value="Search" />
		</form>
	</div>
	</div>

        <nav class="nav-infopages" role="navigation">
	    <?php 
		wp_nav_menu(array('theme_location' => 'support-nav'));
	    ?>
        </nav>
</div>
</div>
</div>


<?php if (have_posts()) : while (have_posts()) : the_post();?>

	<h1><?php the_title();?></h1>
	<hr class="pagetitle">

	<div class="page-content">
		<?php the_content(); ?>
        </div>
<?php endwhile; endif; ?>



