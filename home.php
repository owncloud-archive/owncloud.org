<?php
/*
Template Name: Home
*/
?>

<?php 

get_header(); 

require('/srv/www/owncloud.org/contribook/main/contribook/lib_contribook.php');

?>
	
<?php if (have_posts()) : while (have_posts()) : the_post();?>

<?php the_content(); ?>
	
<?php endwhile; endif; ?>

<?php

  echo('<table width="100%" border="0" cellpadding="10"><tr><td valign="top">');
  echo('<h2><i class="icon-twitter"></i> The latest twitter posts</h2>');
  CONTRIBOOK_MICROBLOG::show(0,10);

  echo('</td><td valign="top">');
  echo('<h2><i class="icon-comment"></i> The latest from the forum</h2>');
  CONTRIBOOK_FORUM::show(0,10);
  echo('<h2><i class="icon-cloud"></i> ownCloud.com news</h2>');
  CONTRIBOOK_NEWS::show(0,10);

  echo('</td></tr></table>');




?>



<?php get_footer(); ?>

