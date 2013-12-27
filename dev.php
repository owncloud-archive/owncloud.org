<?php
/*
Template Name: Developer Center
*/
?>

<!-- comment out duplicated header, it’s already in the navigation
<div class="page-header"><h1><a href="<?php echo home_url( '/' ); ?>dev/">Developer Center</a></h1>
	<form role="search" method="get" class="headersearch" id="searchform" action="<?php echo home_url( '/' ); ?>">
	    	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	        <input type="submit" id="searchsubmit" class="btn" value="Search" />
	</form>
</div>
-->
<div class="page-header">
	<h1>Developer Center</h1>
<nav class="nav-infopages" role="navigation">
	<?php 
		wp_nav_menu(array('theme_location' => 'dev-nav'));
	?>
</nav>
</div>
	
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php
$title = get_the_title();
?>
	<div class="span12">
<?php
if( $title != 'Dev' ){
?>
		<h1><?php the_title();?></h1>
		<hr class="pagetitle">
<?php 
}
?>
		<div class="page-content">
			<?php the_content(); ?>
		</div>
<?php endwhile; endif; ?>

	</div>
</div>


