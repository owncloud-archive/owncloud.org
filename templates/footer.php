<footer class="content-info" role="contentinfo">
<div class="container">   
   <div class="row">
     <div class="col-sm-4">
        <div class="footer-nav">
	 <a href="/about/">About ownCloud</a>
	<?php 
		wp_nav_menu(array('theme_location' => 'about-nav'));
	?>
</div>
     </div>
     <div class="col-sm-4">
        <div class="footer-nav">
	 <a href="/support/">Support &#38; Documentation</a>
	<?php 
		wp_nav_menu(array('theme_location' => 'support-nav'));
	?>
</div>
     </div> 
     <div class="col-sm-4">
        <div class="footer-nav">
	 <a href="/developer/">Developer Center</a>
	<?php 
		wp_nav_menu(array('theme_location' => 'dev-nav'));
	?>
</div>
     </div>
   </div>
   <div class="row">
    <div class="col-lg-12">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
  </div>
</div>
</footer>

<?php wp_footer(); ?>
