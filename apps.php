<?php
/*
Template Name: Apps Page
*/
?>

<?php

 
require('/srv/www/owncloud.org/contribook/main/contribook/lib_contribook.php');

?>

<div class="page-header">
	<h1><a href="/about/">The latest apps</a></h1>
</div>


<div class="row">
	<div class="span3">
		<div class="sidebar">
			<?php 
			//<div class="well">
	//		wp_nav_menu(array('theme_location' => 'dev-nav'));
			//</div>
			?>
		</div>
	</div>
	
	<div class="span9">
		<div class="page-content">
<?php

  // the latest content from an ocs server
  CONTRIBOOK_OCS::show(1,20);


?>




		</div>

	</div>
</div>


<br /><a href="http://apps.owncloud.com">more apps</a>


