<?php
/*
Template Name: Blog Planet RSS Page
*/
?>

<?php

require('/srv/www/owncloud.org/contribook/main/contribook/lib_contribook.php');

CONTRIBOOK_BLOG::showrss('ownCloud Planet','The ownCloud blog planet with posts from all ownCloud contributors','http://owncloud.org/news/',30);



