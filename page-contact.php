<?php get_template_part('templates/parts/title'); ?>
<p>Join our <a href="http://webchat.freenode.net?channels=owncloud" target="_blank">#owncloud chat room</a>.

For general questions and discussions, subscribe to our <a href="http://mail.kde.org/mailman/listinfo/owncloud" target="_blank">mailing list</a>!

For the latest news, subscribe to our <a href="http://owncloud.org/feed/">RSS feed</a>.</p>

<p>For reporting vulnerabilities, read <a href="http://owncloud.org/security">Security</a></p>

<p>Also find us on <a href="http://joindiaspora.com/u/owncloud"><img alt="" src="http://owncloud.org/diaspora.png" /> Diaspora</a>, <a href="http://identi.ca/owncloud"><img alt="" src="http://identi.ca/favicon.ico" width="16px" height="16px" /> Identi.ca</a> and <a href="http://twitter.com/ownclouders"><img alt="" src="http://owncloud.org/wp-content/uploads/2012/06/twitter.png" width="16px" height="16px" />Twitter</a>.</p>
<h2>Active core contributors:</h2>

<?php
if(CONTRIBOOK) {

require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php');

$users=CONTRIBOOK_USER::getusers();
echo('<table>');
foreach($users as $user) {
	$data = CONTRIBOOK_USER::getuser($user);
	echo('<tr><td style="padding:5px;">');
	if($data['picture_50'] <> ''){
		echo('<span class="contribook_microbloguserpicture"><a href="/contributor/?user='.$user.'"><img src="'.CONTRIBOOK_PHOTO_URL.$data['picture_50'].'" border="0" /></a></span>');
	}
	echo('</td><td style="padding:5px;">');

	echo('<a href="/contributor/?user='.$user.'">'.$data['name'].'</a><br />');
	echo($data['role']);

	echo('</td></tr>');
}

echo('</table>');

}