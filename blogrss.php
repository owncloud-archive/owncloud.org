<?php
/*
Template Name: Blog Planet RSS Page
*/
?>

<?php

require(__DIR__.'/../../../contribook/main/contribook/lib_contribook.php');

CONTRIBOOK_BLOG::showrss('ownCloud Planet','The ownCloud blog planet with posts from all ownCloud contributors','https://owncloud.org/news/',30);



