<?php
/*
Template Name: Support
*/
?>

<div class="page-header">
        <h1><a href="<?php echo home_url( '/' ); ?>/support/">Support</a></h1>
<nav class="nav-infopages" role="navigation">
	<?php 
		wp_nav_menu(array('theme_location' => 'support-nav'));
	?>
</nav>
</div>

<div class="span12">
	<form role="search" method="get" class="headersearch" id="searchform" action="<?php echo home_url( '/' ); ?>">
	    	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	        <input type="submit" id="searchsubmit" class="btn" value="Search" />
	</form>


<?php if (have_posts()) : while (have_posts()) : the_post();?>


	<h1><?php the_title();?></h1>
	<hr class="pagetitle">
</div>
	<div class="page-content">
		<?php the_content(); ?>
        </div>
<?php endwhile; endif; ?>

	</div>
</div>

