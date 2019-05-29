<?php /* Template Name: Newsletter */
get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
?>

<article class="container">
  <h1><?php the_title(); ?></h1>
  <div class="row">
    <div class="col-md-6 col-lg-8">
      <?php
      if (isset($_GET['e'])) {
        require 'php/marketo-client.php';
        $Marketo = new Marketo();
        $Marketo->setProgramStatus($_GET['e'], 1526, 'Confirmed');
        ?>

        <div class="success"><i class="fa fa-check" aria-hidden="true"></i> You successfully confirmed your ownCloud newsletter subscription.</div>

        <?php
      }

      if (!isset($_GET['e'])) { 
          the_content();
          echo get_template_part('template-parts/newsletter', 'form');
      }
      ?>
    </div>

    <div class="col-md-6 col-lg-4">
    </div>
  </div>


</article>

<?php


    endwhile;
endif;
get_footer();
