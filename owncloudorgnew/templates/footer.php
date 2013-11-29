      <?php dynamic_sidebar('sidebar-news'); ?>

<footer class="content-info" role="contentinfo">
<div class="container">   
   <div class="row">
      <?php dynamic_sidebar('sidebar-footer'); ?>
   </div>
   <div class="row">
    <div class="col-lg-12">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
  </div>
</div>
</footer>

<?php wp_footer(); ?>
