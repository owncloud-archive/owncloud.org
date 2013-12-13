<?php
/*
Template Name: Apps Page
*/
?>

<?php

 
require('/srv/www/owncloud.org/contribook/main/contribook/lib_contribook.php');

?>

<div class="page-header">
	<h1><a href="/about/">About ownCloud</a></h1>
<nav class="nav-infopages" role="navigation">
	<?php 
		wp_nav_menu(array('theme_location' => 'about-nav'));
	?>
</nav>
</div>


<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php
$title = get_the_title();
?>
	<div class="span12">
<?php
if( $title != 'About' ){
?>
		<h2><?php the_title();?></h2>
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

<?php

  // the latest content from an ocs server
  CONTRIBOOK_OCS::show(1,20);


?>




		</div>

	</div>
</div>


<br /><a href="http://apps.owncloud.com">more apps</a>


