<?php get_template_part('templates/parts/title'); ?>
<h2>Latest News and Annoucements</h2>
<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5, 'format' => 'html' ) ); ?>
<h2>Current Release Information <small>Version 7.0</small></h2>
<a href="#" class="btn btn-lg btn-default">Annoucement</a>
<a href="#" class="btn btn-lg btn-default">Key Features</a>
<a href="#" class="btn btn-lg btn-default">Download</a>
<h2>ownCloud Resources</h2>
<h2>Branding Guidleines</h2>