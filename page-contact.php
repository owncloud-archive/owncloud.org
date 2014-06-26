<?php get_template_part('templates/parts/title'); ?>
<p>Join our <a href="http://webchat.freenode.net?channels=owncloud" target="_blank">#owncloud chat room</a>.

For general questions and discussions, subscribe to our <a href="http://mailman.owncloud.org/mailman/listinfo/user" target="_blank">mailing list</a> or use our <a href="https://forum.owncloud.org" target="_blank">community forums</a>!

For the latest news, subscribe to our <a href="http://owncloud.org/feed/">RSS feed</a>.</p>

<p>For reporting vulnerabilities, read <a href="http://owncloud.org/security">Security</a>.</p>

<p class="socialicons">Also find us on <a href="https://www.facebook.com/owncloud">Facebook</a>, <a href="https://plus.google.com/102805591550379137055">Google+</a> and <a href="http://twitter.com/ownclouders"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/social/twitter.png" width="16px" height="16px" /> Twitter</a>.</p>
<h2>Active core contributors:</h2>

<?php
if(CONTRIBOOK) {

	require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php');

	$users=CONTRIBOOK_USER::getusers();
	echo('<table>');
	foreach($users as $user) {
		$data = CONTRIBOOK_USER::getuser($user);
		echo('<tr><td style="padding:5px;">');
		if(empty($data['picture_50'])) { $data['picture_50'] = 'blogger_50.png'; }

		echo('<span class="contribook_microbloguserpicture"><a href="/user?user='.$user.'"><img src="'.CONTRIBOOK_PHOTO_URL.$data['picture_50'].'" border="0" /></a></span>');

		echo('</td><td style="padding:5px;">');

		echo('<a href="/user/?user='.$user.'">'.$data['name'].'</a><br />');
		echo($data['role']);

		echo('</td></tr>');
	}

	echo('</table>');

}
