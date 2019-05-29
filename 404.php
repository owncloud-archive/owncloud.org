<?php
header("HTTP/1.0 404 Not Found");
get_header();
?>

<article class="container">
    <h1 class="headline-page">404</h1>
    <div class="row">
        <div class="col">
            <p>Oops. It seems like you are lost in the clouds. Maybe we can help you?</p>
            <a href="<?php echo get_page_link(23); ?>" class="button-oc stacked">Go to home</a>
            <a href="<?php echo get_page_link(14); ?>" class="button-oc stacked">Learn about ownCloud features</a>
            <a href="<?php echo get_page_link(87); ?>" class="button-oc stacked">Download ownCloud here<i class="fa fa-download"></i></a>
            <a href="<?php echo get_page_link(2); ?>" class="button-oc stacked">Read our blog<i class="fa fa-rss" aria-hidden="true"></i></a>
            <?php echo get_template_part('template-parts/social-media', 'follow'); ?>
        </div>
    </div>

</article>

<?php
get_footer();
